<?php

function add_role_viajero()
{
  remove_role('viajero');
    add_role(
        'viajero',
        'viajero',
        [
            'read'         => true,
            'edit_posts'   => true,
            'upload_files' => true,
            'publish_posts'=> true,
            'delete_posts' => true,
            'edit_published_posts'   => true,
        ]
    );
}

// add the simple_role
add_action('init', 'add_role_viajero');

function viajes_init() {
    $labels = array(
        'name'              => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis viajes', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Viajes', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'viaje', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo viaje', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo viaje', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar viaje', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver viaje', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos los viajes', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar viajes', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Viajes padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado viajes.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado viajes en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'viaje' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-admin-multisite',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'viaje', $args );
}

add_action( 'init', 'viajes_init' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_viaje',
		'title' => 'Viaje',
		'fields' => array (
			array (
				'key' => 'field_5b46d9e3f6729',
				'label' => 'Destino',
				'name' => 'destino',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b46dacefce56',
				'label' => 'Vacunas obligatorias',
				'name' => 'vacunas_obligatorias',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b46dae9fce57',
				'label' => 'Vacunas recomendadas',
				'name' => 'vacunas_recomendadas',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b46dafbfce58',
				'label' => 'Transporte local',
				'name' => 'transporte_local',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b46db25fce59',
				'label' => 'Peligrosidad',
				'name' => 'peligrosidad',
				'type' => 'select',
				'choices' => array (
					'Baja' => 'Baja',
					'Media' => 'Media',
					'Alta' => 'Alta',
					'Muy Alta' => 'Muy Alta',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5b46db8cfce5a',
				'label' => 'Moneda Local',
				'name' => 'moneda_local',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'viaje',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
// RUTAS----------------------------------------------------------------------------
// RUTAS----------------------------------------------------------------------------
// RUTAS----------------------------------------------------------------------------


function rutas_init() {
    $labels = array(
        'name'              => _x( 'Rutas', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Rutas', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis rutas', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Rutas', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nueva', 'ruta', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nueva ruta', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nueva ruta', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar ruta', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver ruta', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todas las rutas', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar rutas', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Rutas padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado rutas.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado rutas en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'ruta' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-chart-line',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'ruta', $args );
}

add_action( 'init', 'rutas_init' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_ruta',
		'title' => 'Ruta',
		'fields' => array (
			array (
				'key' => 'field_5b4ba1845044a',
				'label' => 'Dificultad',
				'name' => 'dificultad',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'baja:		Baja' => 'Baja',
					'media: Media' => 'Media',
					'alta:		 Alta' => 'Alta',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5b4ba7e475750',
				'label' => 'Tiempo',
				'name' => 'tiempo',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Horas , minutos y segundos.',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ruta',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
