<?php
function display_home_jobs_shortcode() {
    // ডাটাবেস থেকে লেটেস্ট ৫টি জব কুয়েরি করা
    $args = array(
        'post_type'      => 'job',
        'posts_per_page' => 5,
        'post_status'    => 'publish'
    );

    $jobs_query = new WP_Query($args);

    ob_start(); ?>
    <div class="job-listing-container">
        <?php if ($jobs_query->have_posts()) : while ($jobs_query->have_posts()) : $jobs_query->the_post(); 
            // মেটা ডেটা সংগ্রহ
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
        <?php endwhile; wp_reset_postdata(); else : ?>
            <p>দুঃখিত, বর্তমানে কোনো নিয়োগ বিজ্ঞপ্তি নেই।</p>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('latest_jobs', 'display_home_jobs_shortcode');

