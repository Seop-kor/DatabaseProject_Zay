<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Zay Shop</title>
  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/zay/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/zay/img/favicon.ico">
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/zay/css/reset.css">
  <!-- Light Slider Plugin Link -->
  <link rel="stylesheet" href="/zay/lib/lightslider.css">
  <!-- Main Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/style.css">
  <!-- Media Style CSS Link -->
  <link rel="stylesheet" href="/zay/css/media.css">
</head>
<body>

  <div class="wrap">

  <?php

    session_start();
    if(isset($_SESSION['userid'])){
      $userid = $_SESSION['userid'];
    } else {
      $userid = "";
    }

    if(isset($_SESSION['userprofile'])){
      $userprofile = $_SESSION['userprofile'];
    } else {
      $userprofile = "";
    }

    //echo $userid, $userprofile;

  ?>

    <!-- Top Bar Section -->
    <div class="top_bar">
      <div class="center">
        <div class="contact_info">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <em>info@dabipyeung.com</em>
          </a>
          <a href="#">
            <i class="fa fa-phone"></i>
            <em>+82 10 1234 5678</em>
          </a>
        </div>
        <div class="sns_info">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End of Top Bar Section -->

    <!-- Header Section -->
    <header>
      <div class="center">
        <h2 class="logo"><a href="#">Zay</a></h2>
        <div class="menu_items">
          <ul class="gnb">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Community</a></li>
          </ul>
          <div class="login_info">

            <?php

            ?>

            <!-- <a href="/zay/pages/login_form.php">로그인</a> -->
            <a href="/zay/php/logout.php">로그아웃</a>
            <a href="/zay/pages/join_form.php">회원가입</a>
            <a href="#"><img src="/zay/img/default-user.png" alt=""></a>
          </div>
        </div>  
        <div class="mobile_menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
    <!-- End of Header Section -->

    <!-- Slider Landing Section -->
    <section class="slider">
      <!-- Loop Slider Box -->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_txt">
            <h2>Zay eCommerce</h2>
            <h4>Tiny and Perfect eCommerce Template</h4>
            <p>Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1).<br>This template is 100% free provided by TemplateMo website.<br>Image credits go to Freepik Stories, Unsplash and Icons 8.</p>
          </div>
          <div class="slider_img">
            <img src="/zay/img/banner_img_01.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- End of Loop Slider Box -->
      <!-- Loop Slider Box -->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_txt">
            <h2>Zay eCommerce</h2>
            <h4>Tiny and Perfect eCommerce Template</h4>
            <p>Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1).<br>This template is 100% free provided by TemplateMo website.<br>Image credits go to Freepik Stories, Unsplash and Icons 8.</p>
          </div>
          <div class="slider_img">
            <img src="/zay/img/banner_img_02.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- End of Loop Slider Box -->
      <!-- Loop Slider Box -->
      <div class="slider_box">
        <div class="center slider_wrap">
          <div class="slider_txt">
            <h2>Zay eCommerce</h2>
            <h4>Tiny and Perfect eCommerce Template</h4>
            <p>Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1).<br>This template is 100% free provided by TemplateMo website.<br>Image credits go to Freepik Stories, Unsplash and Icons 8.</p>
          </div>
          <div class="slider_img">
            <img src="/zay/img/banner_img_03.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- End of Loop Slider Box -->
    </section>
    <!-- End of Slider Landing Section -->

    <!-- Categories Section -->
    <section class="categories">
      <div class="center">
        <div class="tit_box">
          <h2>Categories of The Month</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br> mollit anim id est laborum.</p>
        </div>
        <div class="cate_box">
          <!-- Loop of Cate Item -->
          <div class="cate_item">
            <div class="cate_img">
              <img src="/zay/img/category_img_01.jpg" alt="">
            </div>       
            <h3>Watches</h3>
            <a href="#" class="main_btn">Go Shop</a>
          </div>
          <!-- End of Loop of Cate Item -->
          <!-- Loop of Cate Item -->
          <div class="cate_item">
            <div class="cate_img">
              <img src="/zay/img/category_img_02.jpg" alt="">
            </div>       
            <h3>Watches</h3>
            <a href="#" class="main_btn">Go Shop</a>
          </div>
          <!-- End of Loop of Cate Item -->
          <!-- Loop of Cate Item -->
          <div class="cate_item">
            <div class="cate_img">
              <img src="/zay/img/category_img_03.jpg" alt="">
            </div>       
            <h3>Watches</h3>
            <a href="#" class="main_btn">Go Shop</a>
          </div>
          <!-- End of Loop of Cate Item -->
        </div>
      </div>
    </section>
    <!-- End of Categories Section -->
  </div>

  <!-- jQuery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/zay/lib/lightslider.js"></script>
  <script src="/zay/js/jq.main.js"></script>
</body>
</html>