<?php 
    if(have_posts()) : 
        while(have_posts()) : the_post(); 
?>
<div id="blog_area">
    <div id="post_thumbnail">
        <a class="noorani_post_thumbnail" href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('medium'); ?>
        </a>
    </div>
    <div class="post_details_area">
        <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        
        <div class="job-footer" style="margin-top: 10px; text-align: right;">
            <a href="<?php the_permalink(); ?>" style="background: #0073aa; color: #fff; padding: 5px 15px; border-radius: 4px; text-decoration: none; font-size: 13px;">বিস্তারিত দেখুন</a>
        </div>
    </div>
</div>

<?php
endwhile;
else:
    _e( 'Not post found');
                
endif;
?>

