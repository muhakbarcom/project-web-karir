<main id="main">
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tes Minat Bakat</h2>
        <p></p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">


        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <?php foreach ($tmb as $value) : ?>
              <div class="row mb-3 shadow-sm">
                <a class="card" href="<?= $value->tmb_url; ?>">
                  <div class="card-body">
                    <?= $value->tmb_name; ?>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
          </div>
          <div class="col-md-3"></div>
        </div>

      </div>
  </section><!-- End Portfolio Section -->
  <section id="blog" class="blog">
    <div class="container">
      <?php echo $pagination; ?>
    </div>
  </section>
</main>