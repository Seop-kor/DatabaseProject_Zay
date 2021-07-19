<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Zay Shop || Detail</title>
  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/zay/img/favicon.ico">
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/zay/css/reset.css">
  <!-- Main Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/style.css">
  <!-- Media Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/media.css">
</head>
<body>
  <div class="wrap">

    <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/header.php"; ?>

    <section class="pro_insert">
      <div class="center">
        <div class="detail_contents">

          <?php
          $pro_idx = $_GET['pro_idx'];
          include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
          $sql = "SELECT * FROM zay_pro WHERE ZAY_pro_idx='{$pro_idx}'";
          
          $detail_result = mysqli_query($dbConn, $sql);
          $detail_row = mysqli_fetch_array($detail_result);

          $detail_img_1 = $detail_row['ZAY_pro_img_01'];
          $detail_img_2 = $detail_row['ZAY_pro_img_02'];
          $detail_tit = $detail_row['ZAY_pro_name'];
          $detail_pri = $detail_row['ZAY_pro_pri'];
          $detail_desc = $detail_row['ZAY_pro_desc'];
          $detail_color = $detail_row['ZAY_pro_color'];
          $detail_bran = $detail_row['ZAY_pro_bran'];
          ?>

          <div class="detail_img">
            <img src="/zay/data/product_imgs/<?=$detail_img_1?>" alt="">
            <img src="/zay/data/product_imgs/<?=$detail_img_2?>" alt="">
            <div class="detail_tab_btns">
              <span><img src="/zay/data/product_imgs/<?=$detail_img_1?>" alt=""></span>
              <span><img src="/zay/data/product_imgs/<?=$detail_img_2?>" alt=""></span>
            </div>
          </div>
          <div class="detail_txt">
            <div class="detail_wrap">
              <div class="detail_top">
                <h2><?=$detail_tit?></h2>
                <p><span><i class="fa fa-krw"></i> <?=$detail_pri?></span></p>
                <div class="detail_like">
                  <div class="like_unlike">
                    <span>좋아요 | <b>20</b></span>
                    <span>별로에요 | <b>11</b></span>
                  </div>     
                  <p class="gray">Brand : <?=$detail_bran?></p>
                  <div class="detail_desc">
                    <h3>상품설명</h3>
                    <p><?=$detail_desc?></p>
                  </div>
                  <p class="gray">Available Color : <?=$detail_color?></p>       
                </div>
                <!-- end of detail_like -->
              </div>

              <div class="size_quan">
                <div class="size">
                  <p>Size : 
                    <span>S</span>
                    <span>M</span>
                    <span>L</span>
                    <span>XL</span>
                  </p>
                  <p>Quantity 
                    <span id="minus">-</span>
                    <b id="count">1</b>
                    <span id="plus">+</span>
                  </p>
                </div>
                <div class="detail_btns">
                  <button type="button">BUY NOW</button>
                  <button type="button">ADD TO CART</button>
                </div>
              </div>
              <!-- end of size quantity -->
            </div>
          </div>
        </div>
        <!-- end of detail-contents -->
      </div>
    </section>

    <section class="comments">
      <div class="center">
        <div class="comments_tit">
          <span>상품평</span> |
          <?php
          include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
          $sql_rev = "SELECT * FROM zay_review WHERE ZAY_pro_rev_con_idx=$pro_idx ORDER BY ZAY_pro_rev_idx DESC";

          $rev_result = mysqli_query($dbConn, $sql_rev);
          $rev_total = mysqli_num_rows($rev_result);

          //echo $rev_total;
          ?>
          <span><em><?=$rev_total?></em> Comments</span>
        </div>
        <div class="comment_insert">
          <form action="/zay/php/comment_insert.php?pro_idx=<?=$pro_idx?>&pro_writer=<?=$userid?>" method="post" name="comment_form">
            <textarea type="text" placeholder="상품평을 입력해 주세요." name="comment_txt"></textarea>
            <?php if(!$userid){ ?>
            <button type="button" onclick="plzLogin()">입력</button>
            <?php } else { ?>
            <button type="button" onclick="insertTxt()">입력</button>
            <?php } ?>
          </form>
        </div>
        <div class="comment_contents">
          <?php
            
            while($rev_row = mysqli_fetch_array($rev_result)){
              $rev_writer = $rev_row['ZAY_pro_rev_id'];
              $rev_reg = $rev_row['ZAY_pro_rev_reg'];
              $rev_txt = $rev_row['ZAY_pro_rev_txt'];
              $rev_pro_idx = $rev_row['ZAY_pro_rev_con_idx'];
          ?>
          <!-- Loop Comments -->
          <div class="loop_contents">
            <div class="comments_tit">
              <span><?=$rev_writer?></span> |
              <span><?=$rev_reg?></span>
            </div>    
            <form action="#">    
              <div class="comments_text">        
                <em class=""><?=$rev_txt?></em>
                <textarea><?=$rev_txt?></textarea> 
              <?php if(!$userid){ ?>
                <input type="hidden">
              <?php
                } else { 
                  if($userid != $rev_writer){
              ?>
                <input type="hidden">
              <?php
                  } else {
              ?>
                <span class="comment_btns">
                  <button type="button" class="rev_send">보내기</button>
                  <button type="button" class="rev_upadte">수정</button>
                  <button type="button">삭제</button>
                </span>      
              <?php
                  }
                }
              ?>       
              </div> 
            </form>     
          </div>
          <!-- End of Loop Comments -->
          <?php } ?>  
        </div>
      </div>
    </section>

    <?php include $_SERVER["DOCUMENT_ROOT"]."/zay/include/footer.php"; ?>

  </div>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/js/jq.main.js"></script>
  <script>
    $(function(){
      $(".rev_upadte").click(function(){
        $(this).toggleClass("on");

        if($(this).hasClass("on")){
          $(this).text('수정취소');
          $(this).prev(".rev_send").show();
        } else {
          $(this).text('수정');
          $(this).prev(".rev_send").hide();
        }
      });
    });
  </script>
  <script>
    function plzLogin(){
      alert('로그인 후 이용해 주세요.');
      return false;
    }

    function insertTxt(){
      if(!document.comment_form.comment_txt.value){
        alert('상품평을 입력해 주세요.');
        return;
      }

      document.comment_form.submit();
    }
  </script>
</body>
</html>