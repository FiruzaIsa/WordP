<?php get_header(); ?>


<section class="page-wrap">

<h1><?php echo post_type_archive_title( '', false ); ?></h1>
<?php get_template_part('includes/section-service','content');?>
 

</section>
<?php get_footer(); ?>