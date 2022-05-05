<?php
register_nav_menu( 'header-menu', 'Header Menu' );
add_theme_support( "post-thumbnails" );

add_filter( 'excerpt_length', function () {
	if (is_page_template('Category-news')){
		return 80;
	} elseif (is_page_template('Home page')){
		return 30;
	} else return 30;
} );
add_filter( 'excerpt_more', function ( $more ) {
	return '...';
} );

add_filter( 'post_type_labels_post', 'rename_posts_labels' );
function rename_posts_labels( $labels ): object {

	/* оригинал
		stdClass Object (
			'name'                  => 'Записи',
			'singular_name'         => 'Запись',
			'add_new'               => 'Добавить новую',
			'add_new_item'          => 'Добавить запись',
			'edit_item'             => 'Редактировать запись',
			'new_item'              => 'Новая запись',
			'view_item'             => 'Просмотреть запись',
			'search_items'          => 'Поиск записей',
			'not_found'             => 'Записей не найдено.',
			'not_found_in_trash'    => 'Записей в корзине не найдено.',
			'parent_item_colon'     => '',
			'all_items'             => 'Все записи',
			'archives'              => 'Архивы записей',
			'insert_into_item'      => 'Вставить в запись',
			'uploaded_to_this_item' => 'Загруженные для этой записи',
			'featured_image'        => 'Миниатюра записи',
			'set_featured_image'    => 'Задать миниатюру',
			'remove_featured_image' => 'Удалить миниатюру',
			'use_featured_image'    => 'Использовать как миниатюру',
			'filter_items_list'     => 'Фильтровать список записей',
			'items_list_navigation' => 'Навигация по списку записей',
			'items_list'            => 'Список записей',
			'menu_name'             => 'Записи',
			'name_admin_bar'        => 'Запись',
		)
	*/

	$new = array(
		'name'                  => 'Статьи',
		'singular_name'         => 'Статья',
		'add_new'               => 'Добавить статью',
		'add_new_item'          => 'Добавить статью',
		'edit_item'             => 'Редактировать статью',
		'new_item'              => 'Новая статья',
		'view_item'             => 'Просмотреть статью',
		'search_items'          => 'Поиск статей',
		'not_found'             => 'Статей не найдено.',
		'not_found_in_trash'    => 'Статей в корзине не найдено.',
		'parent_item_colon'     => '',
		'all_items'             => 'Все статьи',
		'archives'              => 'Архивы статей',
		'insert_into_item'      => 'Вставить в статью',
		'uploaded_to_this_item' => 'Загруженные для этой статьи',
		'featured_image'        => 'Миниатюра статьи',
		'filter_items_list'     => 'Фильтровать список статей',
		'items_list_navigation' => 'Навигация по списку статей',
		'items_list'            => 'Список статей',
		'menu_name'             => 'Статьи',
		'name_admin_bar'        => 'Статью', // пункте "добавить"
	);

	return (object) array_merge( (array) $labels, $new );
}

add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type( 'post_type_service', [
		'label'         => 'service',
		'labels'        => [
			'name'               => 'Услуги', // основное название для типа записи
			'singular_name'      => 'Услуга', // название для одной записи этого типа
			'add_new'            => 'Добавить услугу', // для добавления новой записи
			'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
			'new_item'           => 'Новая услуга', // текст новой записи
			'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
			'search_items'       => 'Искать услугу', // для поиска по этим типам записи
			'not_found'          => 'Услуг не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Услуг в корзине не найдено', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Услуги', // название меню
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => null, // показывать ли в меню адмнки
		'show_in_rest'  => null, // добавить в REST API. C WP 4.7
		'rest_base'     => null, // $post_type. C WP 4.7
		'menu_position' => null,
		'menu_icon'     => null,
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'custom-fields',
		],
		'taxonomies'    => ['category'],
		'has_archive'   => true,
		'rewrite'       => true,
		'query_var'     => true,
	] );
	register_post_type( 'post_type_blood_status', [
		'label'         => 'blood_status',
		'labels'        => [
			'name'               => 'Статус потребности в донорах', // основное название для типа записи
			'singular_name'      => 'Показатели', // название для одной записи этого типа
			'add_new'            => 'Добавить показатели', // для добавления новой записи
			'add_new_item'       => 'Добавление показателей', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование показателей', // для редактирования типа записи
			'new_item'           => 'Новая показатели', // текст новой записи
			'view_item'          => 'Смотреть показатели', // для просмотра записи этого типа.
			'search_items'       => 'Искать показатели', // для поиска по этим типам записи
			'not_found'          => 'показателей не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'показателей в корзине не найдено', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Статус потребности в донорах', // название меню
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => null, // показывать ли в меню адмнки
		'show_in_rest'  => null, // добавить в REST API. C WP 4.7
		'rest_base'     => null, // $post_type. C WP 4.7
		'menu_position' => null,
		'menu_icon'     => null,
		'hierarchical'  => false,
		'supports'      => [
			'author',
			'custom-fields',
		],
		'taxonomies'    => [],
		'has_archive'   => true,
		'rewrite'       => true,
		'query_var'     => true,
	] );
}

