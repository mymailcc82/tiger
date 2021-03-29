<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css?ver=1.2.1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/com/favicon.png">
<?php wp_head();?>
<script type='text/javascript'  src="<?php echo get_template_directory_uri();?>/assets/js/jquery3.4.1.js"></script>
<script>

$(window).on('load', function () { // 読み込み完了したら実行する
    $('#fadein').addClass("show");;// ローディングを隠す
});

</script>



<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>



<header class="header">

    <?php if ( is_home() || is_front_page() ) : ?>
      <div class="header-wrap header-wrap-top">
        <div class="header-wrap-center" id="fadein">
          <h2 class="header-wrap-title">安心と安全をもっと。</h2>
          <div class="header-wrap-logo">
            <h1><img src="<?php echo get_template_directory_uri();?>/assets/img/header/top-logo.png" alt="タイガー安全"></h1>
          </div>
        </div>

        <div class="header-wrap-scroll">
          <span id="scroll"></span>
        </div>
    <?php else: ?>
      <div class="header-wrap sub">
        <div class="header-wrap-sub-logo">
          <h2><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/header/top-logo.png" alt="タイガー安全"></a></h2>
        </div>
    <?php endif; ?>

    <input id="drawer-checkbox" type="checkbox">
    <label id="drawer-icon" for="drawer-checkbox"><span></span></label>
    <label id="drawer-close" for="drawer-checkbox"></label>
    <div id="drawer-content">
      <div class="drawer-content-wrap">
        <div class="drawer-content-wrap-content">
          <div class="drawer-content-img">
            <h2><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/header/top-logo.png" alt="タイガー安全"></a></h2>
          </div>
          <ul class="drawer-content-list">
            <li><a href="<?php echo home_url();?>">ホーム</a></li>
            <li><a href="<?php echo home_url();?>/about/">タイガー安全について</a></li>
            <li><a href="<?php echo home_url();?>/service/">サービス</a></li>
            <li><a href="<?php echo home_url();?>/catarog/">電子カタログ</a></li>
            <li><a href="<?php echo home_url();?>/shop/">タイガープロショップ</a></li>
            <li><a href="<?php echo home_url();?>/category/news/">新着情報</a></li>
            <li><a href="<?php echo home_url();?>/company/">会社概要</a></li>
            <li><a href="<?php echo home_url();?>/recruit/">採用情報</a></li>
            <li><a href="<?php echo home_url();?>/contact/">お問い合わせ</a></li>
            <li><a href="https://www.instagram.com/tigeranzen/?hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon/icon-insta.png" alt="instagram"></a></li>
          </ul>

        </div>
      </div>
    </div>


    <div class="header-icon">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/header/icon-deco.png" alt="">
    </div>
  </div>
</header>
