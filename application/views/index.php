<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Selamat datang di <span><?= $titleapp; ?></span></h2>
        <p><?= $descapp; ?></p>
        <!-- <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div> -->
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="<?= base_url() ?>/assets-impact/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-easel"></i></div>
            <h4 class="title"><a href="<?= base_url('videos'); ?>" class="stretched-link">Rekomendasi Karir</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-newspaper"></i></div>
            <h4 class="title"><a href="<?= base_url('artikel'); ?>" class="stretched-link">Artikel</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-chat-dots"></i></div>
            <h4 class="title"><a href="<?= base_url('konsultasi/user'); ?>" class="stretched-link">Konsultasi</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-pencil"></i></div>
            <h4 class="title"><a href="<?= base_url('tmb'); ?>" class="stretched-link">Tes Minat Bakat</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

      </div>
    </div>
  </div>

  </div>
</section>
<!-- End Hero Section -->

<main id="main">




  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <a href="<?= base_url('videos'); ?>">
          <h2>Rekomendasi Karir</h2>
        </a>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">


        <div class="row gy-4 portfolio-container">
          <?php foreach ($data_videos as $video) : ?>

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="<?= $video->video_url; ?>" class="glightbox play-btn"><img src="<?= get_youtube_thumb($video->video_url); ?>" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?= $video->video_url; ?>" title="More Details"><?= $video->video_name; ?></a></h4>
                </div>
              </div>
            </div>

          <?php endforeach ?>
        </div>
      </div>
  </section><!-- End Portfolio Section -->


  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-posts" class="recent-posts sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <a href="<?= base_url('artikel'); ?>">
          <h2>Artikel Terbaru</h2>
        </a>

      </div>

      <div class="row gy-4">

        <?php foreach ($data_artikel as $article) : ?>
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <?php echo get_thumb_articles($article->id); ?>
                <!-- <img src="<?= base_url('assets/uploads/artikel/' . $article->gambar); ?>" alt="" class="img-fluid" width="100%"> -->
              </div>

              <p class="post-category"><?= $article->kategori; ?></p>

              <h2 class="title">
                <a href="<?= base_url('artikel/detail/' . $article->id); ?>"><?= $article->judul; ?></a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="<?= base_url('assets/img/profile/default.png'); ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Admin</p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?= $article->tanggal; ?></time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->
        <?php endforeach ?>


      </div><!-- End recent posts list -->

    </div>
  </section><!-- End Recent Blog Posts Section -->



</main><!-- End #main -->