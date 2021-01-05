<?php get_header();?>

<main class="top">
  <section class="archive scroll-fade">
    <div class="content-width">
      <div class="top-title-h2">
        <h2>NEWS</h2>
        <p class="top-title-h2-p">新着情報</p>
      </div>
      <div class="com-btn">
        <a href="<?php echo home_url();?>/category/news">SHOW ALL</a>
      </div>
      <div class="archive-wrap">
        <?php $args = array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          //'cat' =>2
        ); ?>
        <?php $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php get_template_part('inc/inc-archive');?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

  <section class="sec02">
    <div class="sec02-wrap">
      <div class="sec02-wrap-txt">
        <div class="top-title-h2">
          <h2>ABOUT</h2>
          <p class="top-title-h2-p">タイガー安全について</p>
        </div>
        <p class="sec02-wrap-txt-desc">
          あらゆる「危険」に対応できるよう、<br>
          「安⼼・安全」をテーマに<br>
          当社では安全⽤品全般を<br>
          多数取り扱っております。
        </p>
        <div class="com-btn">
          <a href="<?php echo home_url();?>/about/">READ MORE</a>
        </div>
      </div>
      <div class="sec02-wrap-img scroll-fade">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/top/top-sec02.jpg" alt="">
      </div>
    </div>
  </section>
  <section class="sec03 scroll-fade">
    <div class="content-width">
      <div class="top-title-h2">
        <h2>SERVICE</h2>
        <p class="top-title-h2-p">サービス</p>
      </div>
      <div class="com-btn">
        <a href="<?php echo home_url();?>/service/">READ MORE</a>
      </div>

      <div class="sec03-wrap">
        <div class="sec03-wrap-item">
          <a href="<?php echo home_url();?>/service/#service01">
          <div class="sec03-wrap-item-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/service-item-01.png" alt="">
          </div>
          <p>安全保全用品販売・リース</p>
          </a>
        </div>

        <div class="sec03-wrap-item">
          <a href="<?php echo home_url();?>/service/#service02">
          <div class="sec03-wrap-item-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/service-item-02.png" alt="">
          </div>
          <p>特注看板製作</p>
          </a>
        </div>

        <div class="sec03-wrap-item">
          <a href="<?php echo home_url();?>/service/#service03">
          <div class="sec03-wrap-item-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/service-item-03.png" alt="">
          </div>
          <p>⼟⽊建築⽤品販売</p>
          </a>
        </div>

        <div class="sec03-wrap-item">
          <a href="<?php echo home_url();?>/service/#service04">
          <div class="sec03-wrap-item-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/service-item-04.png" alt="">
          </div>
          <p>防災⽤品販売</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="shop scroll-fade">
    <div class="content-width">
      <div class="shop-wrap">
        <div class="shop-wrap-txt">
          <p>⾒て、試して、購⼊できる<br>安全・防災⽤品の専⾨店</p>
          <h2><img src="<?php echo get_template_directory_uri();?>/assets/img/top/top-shop-title.png" alt="タイガープロショップ"></h2>

          <div class="com-btn--bg">
            <a href="<?php echo home_url();?>/shop/">READ MORE</a>
          </div>
        </div>
        <div class="shop-wrap-img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/top/top-shop.jpg" alt="">
        </div>

      </div>
    </div>
  </section>
</main>
<?php get_footer();?>
