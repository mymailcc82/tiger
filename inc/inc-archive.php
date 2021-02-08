
<div class="archive-wrap-item">
  <div class="archive-wrap-item-img">
    <a href="<?php the_permalink(); ?>">
    <?php if(has_post_thumbnail()): ?>
      <?php the_post_thumbnail('my_thumbnail_small'); ?>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri();?>/assets/img/com/noimage.png" alt="">
    <?php endif;?>
    </a>
  </div>
  <ul class="archive-wrap-item-info">
    <?php $cats = get_the_category(); ?>
    <?php foreach($cats as $cat): ?>
      <li>
        <a href="<?php echo get_category_link($cat->cat_ID); ?>">
          <?php if ($cat->cat_name == '新着情報'): ?>
            NEWS
          <?php else: ?>
            <?php echo $cat->cat_name; ?>
          <?php endif; ?>
        </a>
      </li>
    <?php endforeach; ?>

    <li><time><?php the_time('Y.m.d'); ?></time></li>
  </ul>
  <h3><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h3>
</div>
