<?php
/*
Template Name: category-news
Template Post Type: post, page, product
*/
const WP_USE_THEMES = false;
get_header();
?>
<p class="container__name text_center">Новости</p>
<div class="container container_news">
    <!--    to do -->
    <!--    <div class="categories-menu">-->
    <!--        <a class="category-item">Тест категория 1</a>-->
    <!--        <a class="category-item">Тест категория 3</a>-->
    <!--        <a class="category-item">Тест категория 4</a>-->
    <!--    </div>-->
    <div class="news__feed">

		<?php

		$custom_query_args = array(
			array(
				'numberposts'   => 6,
				'post_type'     => 'post',
				'post_per_page' => 6,
			)
		);

		// Get current page and append to custom query parameters array
		$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

		// Instantiate custom query
		$custom_query = new WP_Query( $custom_query_args );

		// Pagination fix
		$temp_query = $wp_query;
		$wp_query   = null;
		$wp_query   = $custom_query;

		// Output custom query loop
		if ( $custom_query->have_posts() ) :
			while ( $custom_query->have_posts() ) :
				$custom_query->the_post(); ?>
                <div class="container container_white news__box">
                    <p class="news__title"><?php echo the_title() ?></p>
                    <div class="news__time-date">
                        <p><?php echo get_the_date( 'd-m-y' ); ?></p>
                        <p><?php the_time(); ?></p>
                    </div>
                    <div class="news__body">
                        <img class="news__img" src="
                    <?php if ( has_post_thumbnail() ) {
							get_the_post_thumbnail_url();
						} else {
							echo get_template_directory_uri();
						} ?>/images/news_img.png"
                             alt="Новость">
                        <p class="news__text">
							<?php echo the_excerpt() ?>
                        </p>
                    </div>
                    <div class="news__plank"></div>
                    <div class="news__panel">
                        <div class="news__category-list"></div>
                        <a href="<?php echo the_permalink() ?>" class="news__link">Подробнее</a>
                    </div>
                </div>
			<?php
			endwhile;
		endif;
		// Reset postdata
		wp_reset_postdata();

		?>
        <div class="news__pagination">
            <?php
            previous_posts_link( 'Предыдушая страница' );
            next_posts_link( 'Следующая страница', $custom_query->max_num_pages );
            ?>
        </div>
        <?php
		// Custom query loop pagination


		// Reset main query object
		$wp_query = null;
		$wp_query = $temp_query;
		?>
    </div>
</div>
<?php get_footer(); ?>
