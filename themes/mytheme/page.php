<?php get_header(); ?>

<section class="page-wrap">
<div class="container">
	
<img src="<?php the_post_thumbnail_url();?>" alt="">

<?php get_template_part('includes/section','content');?>
<?php if(has_post_thumbnail()):?>
             
                    <?php endif;?>
 
</div>

</section>

<?php get_footer(); ?>