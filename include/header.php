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
        <li><a href="/zay/index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Community</a></li>
      </ul>
      <div class="login_info">
        <?php if(!$userid){ ?>
        <!-- 로그아웃 시 보여질 UI -->
        <a href="/zay/pages/login_form.php">로그인</a>
        <a href="/zay/pages/join_form.php">회원가입</a>
        <a href="#"><img src="/zay/img/default-user.png" alt=""></a>
        <?php } else { ?>
        <!-- 로그인 시 보여질 UI -->
        <a href="/zay/php/logout.php">로그아웃</a>
        <a href="#"><?=$userid?></a>
        <a href="#"><img src="/zay/data/profile/<?=$userprofile?>" alt=""></a>
        <?php } ?>
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