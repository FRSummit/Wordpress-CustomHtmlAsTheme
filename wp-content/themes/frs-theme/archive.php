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
                                        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                                            <div class="blog-post">
                                                <?php if(has_post_thumbnail()):?>
                                                    <a href="<?php the_permalink();?>">
                                                        <div><img src="<?php the_post_thumbnail_url('post_image');?>" alt="<?php the_title();?>" class="img-fluid mb-5"></div>
                                                    </a>
                                                <?php endif;?>
                                                
                                                <a href="<?php the_permalink();?>"><h1><?php the_title();?></h1></a>
                                                <!-- <?php /*the_content();*/?> -->
                                                <?php the_excerpt();?>
                                            </div>
                                        <?php endwhile; else: endif;?>
                                </div>
                        </div>

                        
                </div>
        </div>
</section>


<?php get_footer();?>