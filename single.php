
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
          <a href="<?php echo get_category_link($cat->cat_ID);?>">
            <?php if ($cat->cat_name == '新着情報'): ?>
              NEWS
            <?php else: ?>
              <?php echo $cat->cat_name; ?>
            <?php endif; ?>
          </a>
          <?php endforeach; ?>
          <time><?php the_time('Y.m.d'); ?></time>
          <h2><?php the_title(); ?></h2>
        </div>

        <div class="single-desc">
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
      <div class="single-btn">
        <a href="<?php echo home_url();?>/category/news/">新着情報一覧</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer();?>
