<?php

/*
Template Name: page
Template Post Type: post, page, product
*/

get_header(); ?>
<div class="container container_white">
	<p class="name text_center"><?php the_title() ?></p>
    <?php the_content();?>
    <div class="news__time-date">
        <p><?php echo get_the_date('d-m-y') ?></p>
        <p><?php the_time(); ?></p>
    </div>
</div>
<?php get_footer(); ?>
