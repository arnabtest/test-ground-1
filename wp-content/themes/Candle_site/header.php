<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<!--/head-->
<?php if(is_front_page()){
    $class='home';
}else{
    $class='';
}?>
<body <?php body_class( $class ); ?>>
<?php //bloginfo('template_directory'); ?> 
<header>
  <div class="main-header">
    <div class="container header-row">
      <div class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
      </div>
      <div class="hdr-rt">
        <div class="main-menu">
          <div class="nav_close" onclick="menu_close()">
            <i class="far fa-times-circle"></i>
          </div>
          <ul>
            <li class="current-menu-item"><a href="index.html">Heim</a></li>
            <li class="menu-item-has-children"><a href="javascript:void(0);">Produkte</a>
              <ul class="sub-menu">
                <li><a href="product-listing.html">Product Listing</a></li>
                <li><a href="product-details.html">Product Details</a></li>
                <li><a href="private-lable-product.html">Private Lable Product</a></li>
                <li><a href="our-brands.html">Our Brands</a></li>
                <li><a href="safety-instructions.html">Safety Instructions</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);">Gesellschaft</a>
                <ul class="sub-menu">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="trends-&-innovationen.html">Trends &  Innovationen</a></li>
                    <li><a href="sustainability.html">Sustainability</a></li>
                    <li><a href="at-a-glance.html">At A Glance</a></li>
                </ul>
            </li>
            <li><a href="contact-us.html">Kontaktiere uns</a></li>
          </ul>
        </div>
        <ul class="hid-icons">
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt=""></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.svg" alt=""></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/user.svg" alt=""></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/shopping.svg" alt=""> <span>0</span></a></li>
        </ul>
        <div onclick="menu_open()" class="nav_btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <div class="hdr-rt-log-reg desktop">
        <ul>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt=""></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.svg" alt=""></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/user.svg" alt=""></a></li>
          <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/shopping.svg" alt=""> <span>0</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>