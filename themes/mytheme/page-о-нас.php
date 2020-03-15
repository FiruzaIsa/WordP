<?php
  
/*
Template Name: About Us

*/
?>
<?php get_header(); ?>

<section class="page-wrap">
<div class="container">
<div class="col-12">
<div class="image">
<?php if(has_post_thumbnail()):?>
  <img src="<?php the_post_thumbnail_url();?>" alt="">
  <?php endif;?>
</div>
<?php get_template_part('includes/section','content');?>
</div>


<div class="card-discount ml-sm-4">
    <h5>Запишитесь на прием сейчас и получи скидку 10%</h5>
    <!-- <img src="<?php bloginfo('template_url'); ?>/images/photos/discount.jpg" class="card-img-top"> -->
     <form>
      <div id="form-body">
        <input type="text" placeholder="Имя" required>
         <input type="text" placeholder="Телефон" required>
          <a href="#" class="btn-send btn-block">Отправить</a>
           <div class="d-flex align-items-center"> <input type="checkbox" class="mr-1" id="agreement">
         <label for="agreement">
              Согласен с <span>политикой конфиденциальности</span>
         </label></div>
       </form>
  </div>

 
</div>




</section>





 <?php get_footer(); ?>