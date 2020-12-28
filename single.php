
<?php get_header();?>
<main class="single">
  <div class="com-page-title">
    <h1>NEWS<span>新着情報</span></h1>
  </div>
  <section class="single-sec">
    <div class="content-width">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $cats = get_the_category(); ?>
        <div class="single-sec-info">
          <?php foreach($cats as $cat): ?>
          <a href="<?php echo get_category_link($cat->cat_ID);?>">NEWS</a>
          <?php endforeach; ?>
          <time><?php the_time('Y.m.d'); ?></time>
          <h2><?php the_title(); ?></h2>
        </div>

        <div class="single-desc">
          <?php if(has_post_thumbnail()): ?>
            <div class="single-desc-sum">
              <?php the_post_thumbnail(''); ?>
            </div>
          <?php endif;?>
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
      <div class="single-btn">
        <a href="<?php echo home_url();?>/category/blog/">新着情報一覧</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer();?>
