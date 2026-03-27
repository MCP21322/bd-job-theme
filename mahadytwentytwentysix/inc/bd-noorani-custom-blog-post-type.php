<?php 
// bd noorani job theme custom blog post type function here
?>
<?php 

function bd_noorani_job_theme_custom_blog_post_type(){

    $labels = array(
    'name'           => 'blog post',
    'singular_name'  => 'blog',
    'manu_name'      => 'Blog Section',
    'add_new'        => 'Add new blog post',
    'add_new_item'   => 'Write new blog post',
    'edit_item'      => 'Edit blog post',
    'all_items'      => 'All blog post',
    );
    $args = array(
        'label'              => 'Blog post',  
        'labels'             => 'labels',
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'show_in_menu'          => true,
        'menu_position'       => 6,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'rewrite'            => array('slug' => 'blog'),
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'         => array('category', 'post_tag'),
    );
    register_post_type( 'blog_post', $args );

};

add_action( 'init', 'bd_noorani_job_theme_custom_blog_post_type' );




