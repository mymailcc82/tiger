<?php
/*
Template Name:  contact
*/
 ?>
<?php get_header();?>
<main class="page contact">
  <div class="com-page-title">
    <h1>CONTACT<span>お問い合わせ・資料請求</span></h1>
  </div>
  <section class="contact-sec">
    <div class="content-width">

      <?php echo do_shortcode('[contact-form-7 id="13" title="お問い合わせ"]'); ?>

    </div>
  </section>

</main>

<?php get_footer();?>
