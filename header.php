<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
<link rel="shortcut icon" href="">


<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<header class="header">
  <div class="header-wrap">
    <?php if ( is_home() || is_front_page() ) : ?>
      <h2 class="header-wrap-title">安心と安全をもっと。</h2>
      <div class="header-wrap-logo">
        <h1><img src="<?php echo get_template_directory_uri();?>/assets/img/header/top-logo.png" alt="タイガー安全"></h1>
      </div>
      <div class="header-wrap-scroll">
        <span id="scroll"></span>
      </div>
    <?php else: ?>
        <div class="header-wrap-sub-logo">
          <h2><img src="<?php echo get_template_directory_uri();?>/assets/img/header/top-logo.png" alt="タイガー安全"></h2>
        </div>
    <?php endif; ?>

    <input id="drawer-checkbox" type="checkbox">
    <label id="drawer-icon" for="drawer-checkbox"><span></span></label>
    <label id="drawer-close" for="drawer-checkbox"></label>
    <div id="drawer-content">
      <div class="drawer-content-wrap">
        <div class="drawer-content-wrap-content">
          <div class="drawer-content-img">
            <h2><a href="<?php echo home_url();?>">MIRANAVI</a></h2>
          </div>
          <ul class="drawer-content-list">
            <li><a href="<?php echo home_url();?>">TOP</a></li>
            <li><a href="<?php echo home_url();?>/concept/">CONCEPT</a></li>
            <li><a href="<?php echo home_url();?>/use/">HOW TO USE</a></li>
            <li><a href="<?php echo home_url();?>/list/">3D LIST</a></li>
            <li><a href="<?php echo home_url();?>/company/">COMPANY LIST</a></li>
            <li><a href="<?php echo home_url();?>/privacy/">POLICY</a></li>
            <li><a href="<?php echo home_url();?>/operation/">運営会社</a></li>
          </ul>
        </div>
      </div>
    </div>


    <div class="header-icon">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/header/icon-deco.png" alt="">
    </div>
  </div>
</header>
