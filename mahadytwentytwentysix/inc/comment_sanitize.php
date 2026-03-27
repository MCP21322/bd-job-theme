<?php 

// ১. comments sanitaize function

function Noorani_comment_sanitize($commentdata){
    $commentdata['comment_author'] = sanitize_text_field($commentdata['comment_author']);
    $commentdata['comment_content'] = wp_filter_post_kses($commentdata['comment_content']);
    return $commentdata;
}
add_filter('preprocess_comment', 'Noorani_comment_sanitize');

// ২. off the comments text form post comments
remove_filter( 'comment_text', 'make_clickable', 9 );

