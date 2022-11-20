<main id="main">


  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <form action="" method="GET">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" name="search" value="<?= $search_data; ?>">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
          </div>
        </form>
      </div>

      <div class="row gy-4 posts-list">

        <?php foreach ($articles as $article) : ?>
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="<?= base_url('assets/uploads/artikel/' . $article->gambar); ?>" alt="" class="img-fluid" width="100%">
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

      </div><!-- End blog posts list -->

      <!-- <div class="blog-pagination">
        <ul class="justify-content-center">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div> -->
      <!-- End blog pagination -->

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->