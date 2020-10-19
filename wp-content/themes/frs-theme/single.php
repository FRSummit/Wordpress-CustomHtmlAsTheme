<?php get_header();?>

<section>
        <div class="content">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-3">
                                        <!-- <?php /*get_sidebar();*/?> -->
                                        <?php dynamic_sidebar('blog-sidebar');?>
                                </div>
                                <div class="col-lg-9">
                                        <?php if(has_post_thumbnail()):?>
                                                <div><img src="<?php the_post_thumbnail_url('post_image');?>" alt="<?php the_title();?>" class="img-fluid mb-5"></div>
                                        <?php endif;?>
                                        
                                        <h1><?php the_title();?></h1>

                                        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                                                <?php the_content();?>
                                        <?php endwhile; else: endif;?>

                                        <?php the_tags();?>
                                </div>
                        </div>

                        
                </div>
        </div>
</section>


<?php get_footer();?>