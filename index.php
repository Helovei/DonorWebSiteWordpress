<?php get_header(); ?>
	<div class="container container_white">
		<p class="name"><?php the_title() ?></p>
		<?php the_content();?>
		<div class="news__time-date">
<!--			<p class="news__category-list">--><?php //the_category(); ?><!--</p>-->
			<p><?php the_date("d-m-y") . " " . the_time();?></p>
		</div>
	</div>
<?php get_footer(); ?>