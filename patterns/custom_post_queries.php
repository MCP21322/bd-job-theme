<?php
/**
 * Custom Query for Job Post Type
 */

function include_jobs_in_archive( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'job' ) ) {
        $query->set( 'post_type', array( 'job' ) );
    }
}
add_action( 'pre_get_posts', 'include_jobs_in_archive' );