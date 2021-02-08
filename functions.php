<?php
/* ------------------------------ アイキャッチ有効化 ------------------------------ */
    add_theme_support('post-thumbnails');
    add_image_size( 'my_thumbnail_small', 454, 300, true );



    add_filter('show_admin_bar', '__return_false');


 ?>
