<?php add_filter( 'rwmb_meta_boxes', 'jensen_register_meta_boxes' );

function jensen_register_meta_boxes( $meta_boxes ) {
    
    $prefix = 'ing_';

    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => __( 'Carrousel', 'textdomain' ),
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'low',
        'fields' => array(

            array(
                'name'             => esc_html__( 'Imagenes', $prefix ),
                'id'               => "{$prefix}imgadv",
                'type'             => 'image_advanced',
                'max_file_uploads' => 30
            )
            
        )
    );
    
    return $meta_boxes;
} ?>