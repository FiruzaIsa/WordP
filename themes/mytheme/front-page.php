<?php get_header(); 
$services=get_field('services');
$front_img=get_field('front_image');
$register=get_field('consultation_register');
?>

<section  id="front-page-header-image">
<div class="container">
<div class="row">
<div class="col-6">
<div class="text-area">
<h2><?php echo $front_img['text']; ?></h2>
 <h1><?php echo $front_img['discount']; ?></h1>
<a href="<?php echo $hero['link'];?>" class="btn btn-lg btn-primary" >Заказать сейчас</a>
</div>
</div>
<div class="col-6 position-initial">
<div id="bg-circle">
<img src="<?php echo $front_img['image']; ?>" alt="">
<div id="mid-circle">
<img src="<?php bloginfo('template_url'); ?>/images/pic/ordering-circle.png" alt=""> 
</div>
</div>
</div>
</div>
</div>
</section>




<section class="page-wrap mt-4">
<?php $info=get_field('seven_circle'); ?>
  <div class="container">
    <div class="row">
      <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-3 offset-md-0 col-sm-12 col-6 offset-3">
          <div class="img-part">
                <img src="<?php echo $info['image']; ?>" />
           </div>
      </div>
      <div id="vl"></div>
     <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12">
         <div class="text-part">
           <?php echo $info['text'];?>
           <a id="btn-formal" href="<?php echo $info['link'];?>">Избавить</a>
           </div>
     </div>

    </div>
  </div>
  <div class="container position-relative m-top-5">

    <div class=" col-sm-12">
    <div class="row-circle">
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>1</h6>
                        </span>
                        <p>Покупка медицинской книжки</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>2</h6>
                        </span>
                        <p>Прохождение медосмотра</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>3</h6>
                        </span>
                        <p>Вакцинация</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>4</h6>
                        </span>
                        <p>Сдача анализов</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>5</h6>
                        </span>
                        <p>Чтение лекций</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>6</h6>
                        </span>
                        <p>Получение допуска к работе</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>7</h6>
                        </span>
                        <p>Получение аттестации </p>
                    </div>
                </div>
       </div>
    </div> 
  

    <div class="line"></div>

    <div class="col-xl-4 offset-xl-8 col-lg-5 offset-lg-7 col-md-6 offset-md-6 col-sm-8 offset-sm-4 col-12 position-absolute">
    <img src="<?php bloginfo('template_url'); ?>/images/pic/imp-man.png" alt="">
    </div> 

 
  </div>
</section>


<section class="page-wrap">
<div class="heading text-center">
            <span class="left"></span>
            
            <h1>Услуги</h1>
            <span class="right"></span>
        </div>
<div class="container">
<div class="row">
<?php foreach($services as $service): ?>
    
     <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <img src="<?php bloginfo('template_url'); ?>/images/pic/box-des.jpg" alt="">
                 <?php  echo get_the_post_thumbnail( $service->ID ); ?>
                    <span class="overlay-border"></span>
                    <div class="destination">
                            <a href="<?php echo get_the_permalink($service->ID); ?>"><?php echo $service->post_title;?></a>
                        </div>
                        <div class="arrow-icon">
                            <img src="<?php bloginfo('template_url'); ?>/images/pic/arrow.png" alt="">
                        </div>
            </div>
        </div>

<?php endforeach; ?>
</div>

</div>
<?php
wp_reset_query();
?>
</section>

<section id="consultation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-0 col-sm-10 offset-sm-1 ">
                    <div class="heading text-lg-center">
                        <h1><?php echo $register['header']; ?></h1>
                    </div>
                    <div class="conslt-img">
                        <img  src="<?php bloginfo('template_url'); ?>/images/pic/bg-line.jpg" alt="">
                        <div class="row conslt-position">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="doc-img">
                                    <img src="<?php echo $register['image_left']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
                                <p><?php echo $register['text']; ?></p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 text-sm-center d-flex justify-content-center flex-md-row">
                                <div class="pass-img">
                                    <img src="<?php echo $register['image_right']; ?>" alt="">
                                </div>
                                <div class="btn-order align-self-md-center">
                                    <a href="#">Заказать консультацию</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<section class="page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/formal.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>ОФИЦИАЛЬНО</h5>
                                <p>Оформим справку законно</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/place.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>офис в центре</h5>
                                <p>Удобное расположение и отсутствие очередей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/letter.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>Доставка до двери</h5>
                                <p>оформление не выходя из дома</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/percent.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>СИСТЕМА СКИДОК</h5>
                                <p>Приятные скидки для постоянных клиентов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






<section>
<?php 
$about = get_page_by_path( 'о-нас' );
?>
<div class="container ">
            <div class="row">
         <div class="col-12 about-sec overflow-auto">
                   
             <div class="med-center">
                            <div id="rect-grn"></div>
                            <?php echo get_the_post_thumbnail( $about->ID,'med-small'); ?>
             </div>
             <div class="card-discount ml-sm-4">
                            <h5>Запишитесь на прием сейчас и получи скидку 10%</h5>
                            <img src="<?php bloginfo('template_url'); ?>/images/photos/discount.jpg" class="card-img-top">
                            <form>
                                <div id="form-body">
                                    <input type="text" placeholder="Имя" required>
                                    <input type="text" placeholder="Телефон" required>
                                    <a href="#" class="btn-send btn-block">Отправить</a>
                                    <div class="d-flex align-items-center"> <input type="checkbox" class="mr-1" id="agreement">
                                        <label for="agreement">
                                         Согласен с <span>политикой конфиденциальности</span>
                                        </label>
                                    </div>
                                    </div>
                            </form>
             </div>
             <div class="about-med-center">
                  <?php 
                  $content = apply_filters('the_content', $about->post_content); 
                  echo $content;  
                  ?>
                      
                    <?php if($med['link']):?>
                    <a class="btn-send all-services" href="<?php echo $med['link'];?>">Все услуги</a>
                       <?php endif;?>
                    <p class="mt-5"><?php echo $med['text_below'];?></p>
             </div>
             
        </div>

        </div>
</div>
</section>


<section class="page-wrap">
<div class="container">
           <div class="row">
               <div class="col-lg-12 col-md-10 col-sm-12">
                   <div class="order-now">
                       <div class="container ">
                             <div class="row">
                                 <div class="col-sm-12 mt-4">
                                        <h2>Мы поможем сэкономьте свое время</h2>
                                 </div>
                                    <div class="col-xl-4 col-lg-5 col-md-10 col-12">  <p> Закажите справку с доставкой до дома и получите скидку 100 рублей </p></div>
                                    <div class="col-lg-4 col-md-8 align-self-center col-12">  <a href="">Заказать сейчас</a></div>
                             </div>
                              
                           </div>
                 
                   </div>
               </div>
           </div>
</div>
</section>


   
   
      <section class="page-wrap">
       <div class="container">
           <div class="row">
                   <?php if(is_active_sidebar('custom-contact-info-footer-widget')):?>
                               <?php dynamic_sidebar('custom-contact-info-footer-widget'); ?>
                               <?php endif; ?>
              
               <div class="col-xl-7 col-lg-8 offset-xl-1 col-md-7 col-sm-12">
                   <div class="heading">
                       <h1>Как проехать</h1>
                   </div>
                   <div class="row">
                       <div class="col-lg-6">
                              <div class="station d-flex">
                                    <div class="bus-icon">
                                            <img src="<?php bloginfo('template_url'); ?>/images/icon/bus-icon.png" alt="">
                                      </div>
                                  <div class="bus-adress">
                                      <h6>Остановка «площадь Ленина»</h6>
                                      <small><i class="fas fa-long-arrow-alt-left"></i>просп. Кирова</small>
                                    <br>
                                    <small><i class="fas fa-long-arrow-alt-right"></i>Сергеева-Ценского, 4А</small>
                                    </div>
                              </div>
                              <div class="bus-num">
                                  <h6>Автобус</h6>
                                  <ul class="bus">
                                      <li>3</li>
                                      <li>6</li>
                                      <li>7</li>
                                      <li>126</li>
                                      <li>22</li>
                                      <li>30</li>
                                      <li>55</li>
                                      <li>98</li>
                                  </ul>
                                  <h6>Маршрутки</h6>
                                  <ul class="minibus">
                                      <li>1</li>
                                      <li>2</li>
                                      <li>10</li>
                                      <li>15</li>
                                      <li>25</li>
                                      <li>41</li>
                                      <li>48</li>
                                      <li>85</li>
                                      <li>112</li>
                                  </ul>
                                  <h6>Троллейбусы</h6>
                                  <ul class="trollbus">
                                      <li>4</li>
                                      <li>5</li>
                                      <li>7</li>
                                      <li>9</li>
                                      <li>10</li>
                                      <li>11</li>
                                      <li>15</li>
                                  </ul>
                              </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="station d-flex">
                               <div class="bus-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon/bus-icon.png" alt="">
                               </div>
                                <div class="bus-adress">
                                    <h6>Остановка Октябрьская улица</h6>
                                <small><i class="fas fa-long-arrow-alt-left"></i>ул. Курчатова, 1</small>
                                <br>
                                 <small> <i class="fas fa-long-arrow-alt-right"></i>Пролетарская, 5</small>
                                </div>
                           </div>
                           <div class="bus-num">
                               <h6>Маршрутки</h6>
                               <ul class="minibus">
                                   <li>1</li>
                                   <li>2</li>
                                   <li>10</li>
                                   <li>15</li>
                                   <li>25</li>
                                   <li>41</li>
                                   <li>48</li>
                                   <li>85</li>
                                   <li>112</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-5 col-sm-12">
                   
                               
                                <?php if(is_active_sidebar('custom-contact-footer-widget')):?>
                               <?php dynamic_sidebar('custom-contact-footer-widget'); ?>
                               <?php endif; ?>
                      
                      
               
               </div>
               <div class="col-xl-7 col-lg-8 offset-xl-1 col-md-7 col-sm-12">
                

                <?php if(is_active_sidebar('custom-map-footer-widget')):?>
                               <?php dynamic_sidebar('custom-map-footer-widget'); ?>
                               <?php endif; ?>                
               </div>
           </div>
       </div>
</section>












<div id="footer-band"></div>


<?php get_footer(); ?>
