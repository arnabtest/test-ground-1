<?php //bloginfo('template_directory'); ?>
<footer>
    <div class="container">
      <div class="ftr-top common-padd">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="ftr-logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
              <p>Sed quis dapibus lacus, in faucibus justo. Etiam sit 
                nulla porttitor, blandit tellus non, cursus nulla. </p>
            </div>
            <div class="ftr-social">
              <h3>Folge uns:</h3>
              <ul>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt=""></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt=""></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg " alt=""></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="ftr-col">
              <h3>Gesellschaft</h3>
              <ul>
                <li><a href="#">Heim</a></li>
                <li><a href="#">Produkte</a></li>
                <li><a href="#">Gesellschaft</a></li>
                <li><a href="#">Kontaktiere uns</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ftr-col">
              <h3>In Kontakt kommen</h3>
              <ul class="ftr-col-info">
                <li><a href=""><div class="col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/place_black.svg" alt=""></div> Lorem ipsum dolor sit 12356 consectetur</a></li>
                <li><a href=""><div class="col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/call_black.svg" alt=""></div>+1 (24551) 21456871</a></li>
                <li><a href=""><div class="col-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/mail_outline_black.svg" alt=""></div> company@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="ftr-col">
              <h3>Abonnieren Sie unseren Newsletter</h3>
              <div class="ftr-email">
                <input type="email" placeholder="Email eingeben">
                <input type="submit" class="btn" value="Abonnieren">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ftr-btm">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="copyright-txt">
              <p>Urheberrechte © 2022 Candles. Alle Rechte vorbehalten.m</p>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="social-links">
              <li><a href="">Terms & amp; Bedingungen</a></li>
              <li><a href="">Datenschutz-Bestimmungen</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>