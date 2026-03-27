<?php get_header(); ?>

<section id="blog_archive_area" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="section-title mb-4">
                    <h1 class="h2 font-weight-bold">আমাদের ব্লগ ও ক্যারিয়ার টিপস</h1>
                    <hr>
                </div>

                <div class="row">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-md-6 mb-4"> 
                                <div class="card h-100 shadow-sm border-0">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h4 class="h5"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h4>
                                        <p class="text-muted small"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-link btn-sm p-0">বিস্তারিত...</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        
                        <div class="col-md-12">
                            <?php 
                                the_posts_pagination(array(
                                    'mid_size' => 2,
                                    'prev_text' => __('« Previous','nurani-job-bd'),
                                    'next_text' => __('Next','nurani-job-bd'),
                                    'screen_reader' => '',

                                ));
                            ?>
                        </div>

                    <?php else : ?>
                        <p class="ml-3">দুঃখিত, কোনো ব্লগ পোস্ট পাওয়া যায়নি।</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-3">
                <aside class="sidebar-area">
                    <?php get_template_part('templet_part/widget_function'); ?>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
