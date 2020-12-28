<?php
/*
Template Name:  shop
*/
 ?>
<?php get_header();?>
<main class="page shop">
  <div class="com-page-title">
    <h1>TIGER PRO SHOP<span>タイガープロショップ</span></h1>
  </div>
  <div class="page-mainvisual">
    <img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-main.jpg" alt="">
  </div>
  <section class="sec01">
    <div class="content-width">
      <h2 class="sec01-h2">タイガープロショップとは？</h2>
      <h3>どんな方でも、実際に<span class="red">⾒て</span>、<span class="red">試して</span>、<span class="red">購⼊</span>できる<span class="red">防災⽤品</span>の専⾨店です。</h3>
      <p>
        ⼯事現場で使⽤される安全⽤品から⼀般家庭にも必要とされる防災グッズ・⾮常⾷・保存⾷など<br class="pc-br">
        多数取り揃えておりますので、どうぞお気軽にお⽴ち寄りください。
      </p>
    </div>
  </section>

  <section class="sec02">
    <div class="content-width">
      <h2>店内写真</h2>

      <div class="sec02-wrap">
        <div class="sec02-wrap-item">
          <div class="sec02-wrap-item-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-img-01.jpg" alt="">
          </div>
          <p class="sec02-wrap-item-desc">非常食・保存食コーナー</p>
        </div>
        <div class="sec02-wrap-item">
          <div class="sec02-wrap-item-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-img-01.jpg" alt="">
          </div>
          <p class="sec02-wrap-item-desc">防災⽤品コーナー</p>
        </div>
        <div class="sec02-wrap-item">
          <div class="sec02-wrap-item-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-img-01.jpg" alt="">
          </div>
          <p class="sec02-wrap-item-desc">ワークウェアコーナー</p>
        </div>
      </div>
      <div class="sec02-img">
        <ul class="sec02-img-list" id="slick-shop">
          <li><img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-slick-01.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-slick-01.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-slick-01.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-slick-01.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri();?>/assets/img/shop/shop-slick-01.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="sec03">
    <div class="content-width">
      <div class="sec03-wrap">
        <div class="sec03-wrap-img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/shop/sec03-img.jpg" alt="">
        </div>
        <div class="sec03-wrap-txt">
          <h2>お客様のニーズにあわせた商品を</h2>
          <p>
            タイガー安全はこれまで企業など対法⼈に対して安全・防災グッズを提案してきました。<br>
            しかしここ近年、⼀般の⽅からのお問い合わせが急速に増えたのをきっかけに、いろいろな安全・防災⽤品を実際に⼿に取って試してもらい、⾃主防災への意識を少しで<br class="pc-br">
            も⾼めてほしいという想いが⾼まり、法⼈・個⼈問わず、⼀⼈ひとりがそれぞれのスタイルに⾒合った安全・防災グッズを選べるお店を創設することになりました。
          </p>
        </div>
      </div>
    </div>

  </section>
</main>

<?php get_footer();?>
