

<div class="container">
    <div class="row">
    <?php if(have_posts() ): while(have_posts() ): the_post();?>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <img src="<?php bloginfo('template_url'); ?>/images/pic/box-des.jpg" alt="">
            <?php if(has_post_thumbnail()):?>
             <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="">
                    <?php endif;?>
                    <span class="overlay-border"></span>
                    <div class="destination">
                        <a href="<?php echo get_post_permalink(); ?>">
                            <h6><?php the_title();?></h6>
                            </a>
                        </div>
                        <div class="arrow-icon">
                            <img src="<?php bloginfo('template_url'); ?>/images/pic/arrow.png" alt="">
                        </div>
   
            </div>
        </div>
        <?php endwhile; else: endif;?>

        <?php if( get_field('other_services') ): ?>
    <?php the_field('other_services'); ?>
           <?php endif; ?>

        <div class="col-lg-8 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="other-services">
                        <div class="header-services">
                            <h5>Другие услуги</h5>
                        </div>
                        <div class="container">
                            <div class="row type-other-services">
                                <div class="col-lg-6 col-sm-12">
                                    <ul>
                                        <li><span>Справка для участия в соревнованиях</span></li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="design-below">
                            <img src="<?php bloginfo('template_url'); ?>/images/pic/line.png" alt="">
                        </div>

                    </div>
                </div>
</div>

</div>


