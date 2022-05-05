<?php

/**
 * Template Name: Services
 * Template Post Type: post, page
 */

get_header(); ?>

    <div class="container container_for-switch ">
        <div class="switch-box">
            <div id="switch-btn" class="switch-btn"></div>
            <p id="switch-label">Для граждан РБ</p>
        </div>
        <p class="container__name text_center">Услуги</p>
    </div>
<?php
function get_category_children_by_parent( string $category_name ): array {
	return get_categories( array(
		'parent'     => get_cat_ID( $category_name ),
		'hide_empty' => false,
		'orderby'    => 'id'
	) );
}

function get_service_by_category( string $category_name_1 ): array {
	return get_posts( array(
		'post_type' => 'post_type_service',
		'category'    => get_cat_ID( $category_name_1 ),
		'nopaging'  => true,
		'orderby'   => 'id'
	) );
}

$category_0_level         = 'Услуги';
$category_parents_1_level = get_category_children_by_parent( $category_0_level );
foreach ( $category_parents_1_level as $category_1_level ) { ?>
    <div class="container container_white container_for_services">
        <p class="name text_center "><?php echo $category_1_level->name ?></p>
		<?php
        $categories_children_by_parent_2_level = get_category_children_by_parent( $category_1_level->name );
        foreach ( $categories_children_by_parent_2_level as $category_2_level ) { ?>
            <p class="name text_type_p"><?php echo $category_2_level->name ?></p>
			<?php
            $service_list = get_service_by_category( $category_2_level->name );

            foreach ( $service_list as $service_item ) { ?>
                <div class="service-item">
                    <p class="service-item__name"><?php echo $service_item->post_title ?></p>
                    <p class="service-item__price"><?php echo get_post_meta( $service_item->ID, 'price_for_bel', true ) ?></p>
                    <p class="service-item__price service-item__price_hidden"><?php echo get_post_meta( $service_item->ID, 'for_foreign_citizens', true ) ?></p>
                </div>
			<?php } ?>
		<?php } ?>
    </div>
<?php } ?>


    <script src="<?php echo get_template_directory_uri(); ?>/js/switch.js"></script>
<?php get_footer() ?>