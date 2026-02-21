<?php
/*
* This is a header area
 */
get_header(); ?>

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9" id="colum-9">
                   <?php get_template_part('templet_part/post_setup'); ?>
                   <div class="comments_area">
                    <?php comments_template(); ?>

                   </div>
                </div>
                <div class="col-md-3">
                    <p>This is site ber area</p>
                    <?php if(is_active_sidebar('widget_id_1')) : ?>
                        <div id="secandary" class="widget_area">
                            <?php dynamic_sidebar('widget_id_1');  ?>
                        </div>
                    <?php endif; ?>    
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

    <?php wp_footer(); ?>
</body>
</html>