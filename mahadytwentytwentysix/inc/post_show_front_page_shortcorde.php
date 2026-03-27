<?php
// post show on home page shortcode here
function display_front_page_jobs_shortcode() {
    //current page number searching
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );
    // ডাটাবেস থেকে লেটেস্ট ৫টি জব কুয়েরি করা
    $args = array(
        'post_type'      => 'job',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'paged'          =>  $paged,
    );

    $jobs_query = new WP_Query($args);

    ob_start(); ?>
    <div class="job-listing-container">
        <?php if ($jobs_query->have_posts()) : 
            while ($jobs_query->have_posts()) : $jobs_query->the_post(); 
            // callect mata data
            $company  = get_post_meta(get_the_ID(), 'company_name', true);
            $location = get_post_meta(get_the_ID(), 'job_location', true);
        ?>
            <div class="job-card" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; border-radius: 8px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <h3 style="margin: 0 0 10px 0;">
                    <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #0073aa;">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="job-meta" style="font-size: 14px; color: #666;">
                    <strong>প্রতিষ্ঠান:</strong> <?php echo esc_html($company ? $company : 'নূরানী মাদ্রাসা'); ?> | 
                    <strong>স্থান:</strong> <?php echo esc_html($location ? $location : 'বাংলাদেশ'); ?>
                </div>
                <div class="job-footer" style="margin-top: 10px; text-align: right;">
                    <a href="<?php the_permalink(); ?>" style="background: #0073aa; color: #fff; padding: 5px 15px; border-radius: 4px; text-decoration: none; font-size: 13px;">বিস্তারিত দেখুন</a>
                </div>
            </div>
        <?php endwhile;?>
        <div class="pagination-area custom-pagination" style="margin-top: 20px; text-align: center;">
            <?php 
                echo paginate_links(array(
                    'total'        => $jobs_query->max_num_pages,
                    'current'      => $paged,                   
                    'mid_size'     => 2,
                    'prev_text'    => __('« Previous', 'nurani-job-bd'),
                    'next_text'    => __('Next', 'nurani-job-bd'),
                ));
            ?>
        </div>
        
        <?php wp_reset_postdata(); ?> 
        <?php else : ?>
            <p>দুঃখিত, বর্তমানে কোনো নিয়োগ বিজ্ঞপ্তি নেই।</p>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('latest_jobs', 'display_front_page_jobs_shortcode');

