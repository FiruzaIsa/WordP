
<footer>
	
	<div class="container">
  <div class="row">
  <div class="col-lg-3 col-md-5 mt-sm-4 col-sm-12">
            <div class="footer-logo">
                <img src="images/pic/logo.png" alt="">
            </div>
            <p>Медицинский центр. <br> Медицинские справки с доставкой.</p>
  </div>
  
  <div class=" col-lg-3 d-none d-lg-block">
  <?php
    wp_nav_menu(
    array(
        'theme_location' => 'footer-menu',
         'menu_class' => 'footer-bar'
      )
    );
     ?>
  </div>
  <div class="col-lg-6 col-md-7 col-12 d-flex justify-content-center responsive-card">
           <div class="steth d-none d-lg-block">
                <img src="<?php bloginfo('template_url'); ?>/images/pic/stethoscope.png" alt="">
           </div>
<div class="card-order">
    <h4>+7 978 <span>105 51 01</span></h4>
    <div class="btn-order text-center mb-5">
            <a  href="">Записаться онлайн</a>
    </div>
    <div class='wave'></div>
</div>

<div class="home-phone d-md-none d-lg-block">
        <img src="<?php bloginfo('template_url'); ?>/images/pic/home-phone.png" alt="">

</div>

        </div>
    </div>
</div>

</footer>









<?php wp_footer();?>	

</body>
</html>