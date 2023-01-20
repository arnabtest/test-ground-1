<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>  
<section class="banner-wrap">
      <div class="banner-slider">
        <div class="banner-item">
          <div class="banner-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg" alt="">
          </div>
          <div class="container banner-content">
            <div class="banner-content-wrapper">
              <h1>Natürlich duftend
                Kerzen</h1>
              <p>Neben unserem riesigen Standardsortiment und zwei Saisonkollektionen pro Jahr entwickeln wir individuelle Produktlösungen, die perfekt auf Ihre Zielgruppen zugeschnitten sind.</p>
              <div class="explore-btn">
                <a href="#" class="btn">Jetzt einkaufen</a>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-item">
          <div class="banner-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg" alt="">
          </div>
          <div class="container banner-content">
            <div class="banner-content-wrapper">
              <h1>Natürlich duftend
                Kerzen</h1>
              <p>Neben unserem riesigen Standardsortiment und zwei Saisonkollektionen pro Jahr entwickeln wir individuelle Produktlösungen, die perfekt auf Ihre Zielgruppen zugeschnitten sind.</p>
              <div class="explore-btn">
                <a href="#" class="btn">Jetzt einkaufen</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<!--banner sction-->

<!--content sction-->
<main class="main-section">
  <section class="uber-kerzen-section common-padd">
    <div class="bg-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bg-image.png" alt="">
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="image-box">
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/image-1.jpg" alt="">
            </div>
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/image-2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-wrap common-padd-lt">
            <h3>Über uns</h3>
            <h2>Über Kerzen & Düfte</h2>
            <p>Neben unserem riesigen Standardsortiment und zwei Saisonkollektionen pro Jahr entwickeln wir individuelle Produktlösungen, die perfekt auf Ihre Zielgruppen zugeschnitten sind. Dank unseres globalen Netzwerks von Trend- und Marketingexperten und unserem eigenen. Wir sind immer an der Spitze von Trends und Innovationen.</p>
            <p>Unser globales Netzwerk erstklassiger Produktionsstätten und eine starke Lieferkette ermöglichen es uns, Produkte von der Kleinserien- bis zur Massenproduktion und in allen Preissegmenten auf den Markt zu bringen.</p>
            <a href="" class="btn">Weiterlesen</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-section common-padd">
    <div class="container">
      <div class="content-wrap text-center">
        <h3>Produkt</h3>
        <h2>Unsere Produkte</h2>
        <p>Neben unserem riesigen Standardsortiment und zwei Saisonkollektionen pro Jahr entwickeln wir individuelle <br> Produktlösungen, die perfekt auf Ihre Zielgruppen zugeschnitten sind.</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-1.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Wunderschöne Holzhandschuhe</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-2.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Elegante Geldbörse aus Gummi</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-3.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Mittelmäßiger Seidenhut</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-4.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Blumen & Wohnkultur</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-1.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Wunderschöne Holzhandschuhe</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-2.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Elegante Geldbörse aus Gummi</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-3.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Mittelmäßiger Seidenhut</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#" class="product-card">
            <div class="product-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/product-4.png" alt="">
              <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="card-overlay-content">
                  <h6><img src="<?php echo get_template_directory_uri(); ?>/images/shopping_bag.svg" alt=""> In den Warenkorb legen</h6>
                </div>
              </div>
            </div>
            <div class="product-content text-center">
              <h4>Blumen & Wohnkultur</h4>
              <h5>Є978.78</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="umwelt-sec common-padd">
    <div class="bg-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bg-image-2.png" alt="">
    </div>
    <div class="container">
      <div class="content-wrap text-center">
        <h3>Zutaten</h3>
        <h2>Umweltfreundliche und natürliche Inhaltsstoffe</h2>
        <p>Neben unserem riesigen Standardsortiment und zwei Saisonkollektionen pro Jahr entwickeln wir individuelle <br> Produktlösungen, die perfekt auf Ihre Zielgruppen zugeschnitten sind. </p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="umwelt-wrap">
            <div class="umwelt-wrap-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/candle-1.jpg" alt="">
            </div>
            <div class="umwelt-content text-center">
              <div class="umwelt-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/candle-icon.svg" alt="">
              </div>
              <h3>Erdölfrei</h3>
              <p>Wenn sie nicht von Lust geblendet sind, werden sie nicht</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="umwelt-wrap">
            <div class="umwelt-wrap-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/candle-2.jpg" alt="">
            </div>
            <div class="umwelt-content text-center">
              <div class="umwelt-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/candle-icon-1.svg" alt="">
              </div>
              <h3>Grausamkeitsfrei</h3>
              <p>Wenn sie nicht von Lust geblendet sind, werden sie nicht</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="umwelt-wrap">
            <div class="umwelt-wrap-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/candle-3.png" alt="">
            </div>
            <div class="umwelt-content text-center">
              <div class="umwelt-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/candle-icon-2.svg" alt="">
              </div>
              <h3>Phthalatfrei</h3>
              <p>Wenn sie nicht von Lust geblendet sind, werden sie nicht</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="umwelt-wrap">
            <div class="umwelt-wrap-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/candle-4.png" alt="">
            </div>
            <div class="umwelt-content text-center">
              <div class="umwelt-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/candle-icon-3.svg" alt="">
              </div>
              <h3>100 % vegan</h3>
              <p>Wenn sie nicht von Lust geblendet sind, werden sie nicht</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="unsere-sec common-padd">
    <div class="unsere-bg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/unsere-bg.jpg" alt="">
    </div>
    <div class="container">
      <div class="eigenmarke-content">
        <h3>Eigenmarke</h3>
        <h2>Unsere Eigenmarke Produkt</h2>
        <p>Neben unserem riesigen Standardsortiment und zwei Saisonkollektionen pro Jahr entwickeln wir individuelle Produktlösungen, die perfekt auf Ihre Zielgruppen zugeschnitten sind.</p>
        <a href="" class="btn">Lern mehr</a>
      </div>
    </div>
  </section>
  <section class="entdecken-sec common-padd">
    <div class="bg-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bg-image-3.png" alt="">
    </div>
    <div class="container">
      <div class="content-wrap text-center">
        <h3>Sammlungen</h3>
        <h2>Entdecken Sie Sammlungen</h2>
        <p>Neben unserem riesigen Standardsortiment und zwei Saisonkollektionen pro Jahr entwickeln wir individuelle <br> Produktlösungen, die perfekt auf Ihre Zielgruppen zugeschnitten sind. </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="entdecken-wrap">
            <div class="entdecken-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/entdecken-1.jpg" alt="">
            </div>
            <div class="card-img-overlay d-flex justify-content-between align-items-center">
              <div class="card-overlay-content">
                <h2>Heimdüfte</h2>
                <p>Abgesehen von unserem riesigen <br> Standardsortiment und zwei </p>
              </div>
              <div class="card-overlay-btn">
                <a href="" class="btn">Jetzt einkaufen</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="entdecken-wrap">
            <div class="entdecken-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/entdecken-2.jpg" alt="">
            </div>
            <div class="card-img-overlay d-flex justify-content-between align-items-center">
              <div class="card-overlay-content">
                <h2>Blumenprodukte</h2>
                <p>Abgesehen von unserem riesigen <br> Standardsortiment und zwei </p>
              </div>
              <div class="card-overlay-btn">
                <a href="" class="btn">Jetzt einkaufen</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>