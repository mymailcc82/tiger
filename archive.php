
<?php get_header();?>
<main class="archive">
  <div class="com-page-title">
    <h1>NEWS<span>新着情報</span></h1>
  </div>
  <section class="archive-sec">
    <div class="content-width">
      <div class="archive-wrap">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('inc/inc-archive');?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
      </div>

      <div class="pagination">
        <?php $args = array(
          'prev_next'          => true,
          'prev_text'          => '＜',
          'next_text'          => '＞',
          'mid_size' =>5,
        ); ?>
        <?php echo paginate_links($args); ?>
      </div>
      <?php wp_reset_postdata(); ?>
    </div>
  </section>

</main>

<?php get_footer();?>
