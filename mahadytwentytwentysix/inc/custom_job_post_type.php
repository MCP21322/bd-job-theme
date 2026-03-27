<?php 
// custom noorani job post type functon here
function custom_post_type_jobs() {

    $labels = array(
        'name'                  => 'Jobs',
        'singular_name'         => 'job',
        'menu_name'             => 'Job',
        'add_new'               => 'Add New Job',
        'add_new_item'          => 'Add New Job',
        'edit_item'             => 'Edit job',
        'view_item'             => 'View Job',
        'search_items'          => 'Search Jobs',
        'not_found'             => 'No Jobs found',
    );

    $args = array(
        'label'                 => 'Jobs',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true, 
        'rewrite'               => array('slug' => 'job'),
        'taxonomies'            => array('category', 'post_tag'),
    );

    register_post_type( 'job', $args );
}
add_action( 'init', 'custom_post_type_jobs', 0 );


