<main id="main">
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Video</h2>
        <p></p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <!-- <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->
        <!-- </div> -->

        <div class="row gy-4 portfolio-container">

          <?php foreach ($videos as $value) : ?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="<?= $value->video_url; ?>" class="glightbox play-btn"><img src="<?= get_youtube_thumb($value->video_url); ?>" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?= $value->video_url; ?>" title="More Details"><?= $value->video_name; ?></a></h4>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          <?php endforeach ?>
        </div>

      </div>
  </section><!-- End Portfolio Section -->

</main>