<?php
/*
Template Name:  about
*/
 ?>
<?php get_header();?>
<main class="page about">
  <div class="com-page-title">
    <h1>ABOUT<span>タイガー安全について</span></h1>
  </div>

  <section class="sec01">
    <div class="content-width">
      <div class="sec01-wrap">
        <div class="sec01-wrap-img">
          <div class="sec01-wrap-img-list">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/about/about-sec01.jpg" alt="">
          </div>
        </div>
        <div class="sec01-wrap-txt">
          <h2>安全⽤品の提供を通じて安全と<br>環境の整備に貢献します。</h2>
          <p>
            お客様の多種多様なご要望に応えるよう、多数の商品を取り扱っております。<br>
            また、安全⽤品は販売だけでなく、リース・レンタルサービスも提供しております。<br>
            「少しの間だけ使⽤したい」「保管場所に困っている」など、<br class="pc-br">
            お客様の状況に応じて最適なプランをご提案します。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="sec02">
    <div class="content-width">
      <div class="sec02-wrap">
        <div class="sec02-wrap-txt">
          <h2>タイガープロショップについて</h2>
          <p>
            2020年4⽉、タイガー安全は新しく「タイガープロショップ」をオープン。<br>
            安全⽤品だけでなく、⼀般家庭にも必要とされる防災グッズ・保存⾷など多数取り揃えておりますので、どうぞお気軽にお⽴ち寄りください。
          </p>
          <div class="com-btn">
            <a href="<?php echo home_url();?>/shop/">READ MORE</a>
          </div>
        </div>
        <div class="sec02-wrap-img scroll-fade">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/about/about-sec02.jpg?ver=2.0.0" alt="">
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();?>
