<?php
/*
* This is a header area
 */
get_header(); ?>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9" id="colum-9">
                    <h1>চাকরী ও ব্লগ</h1>
                    <div class="jobs_container">
                        <?php echo do_shortcode('[latest_jobs]'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php //sidebar area ?>
                    <?php get_template_part('templet_part/widget_function') ?>
                </div>
            </div>
        </div>
    </section>


<?php 
/**
* This is footer area
*/
get_footer();
?>