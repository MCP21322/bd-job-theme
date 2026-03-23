<?php 
/*
job post archive templete here
*/
?>
<?php get_header(); ?>

<?php get_header(); ?>

<div class="job_post_area" id=" archive_job">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                    <h1>All Job Circulars</h1>
                    <div class="job-list-grid">
                        <?php get_template_part('templet_part/job_post') ?>
                    </div>
            </div>
            <div class="col-md-3">
                <?php //sidebar area ?>
                <?php get_template_part('templet_part/widget_function') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php get_footer(); ?>