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

      <div class="row gy-4 posts-list" id="load_data">



      </div><!-- End blog posts list -->
      <div id="load_data_message" class="d-flex justify-content-center mt-5"></div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->
<script src="<?= base_url(); ?>/assets/js/jquery-3.5.1.js"></script>
<script>
  function get_thumb_articles(id) {
    ajax = $.ajax({
      url: "<?= base_url('artikel/get_thumb_articles'); ?>",
      type: "POST",
      data: {
        id: id
      },
      success: function(data) {
        return data;
      }
    });
  }

  $(document).ready(function() {

    let limit = 6;
    let start = 0;
    let search = "<?= $search_data; ?>";
    let action = 'inactive';

    function akbr_infinity_scroll(limit, start) {
      $.ajax({
        url: "<?= base_url('Artikel/get_articles'); ?>",
        method: "POST",
        data: {
          limit: limit,
          start: start,
          search: search
        },
        cache: false,
        success: function(data) {
          articles = JSON.parse(data);
          articles.forEach(data => {
            // insert html here
            $('#load_data').append(`
            <div class="col-xl-4 col-md-6">
            <article>
              <div class="post-img">
              ${data.thumb}
              </div>
              <p class="post-category">${data.kategori}</p>
              <h2 class="title">
                <a href="<?= base_url('artikel/detail/'); ?>${data.id}">${data.judul}</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="<?= base_url('assets/img/profile/default.png'); ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Admin</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">${data.tanggal}</time>
                  </p>
                </div>
              </div>
            </article>
          </div>
            `);
            console.log("ok");
          });
          if (data == '') {
            $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
            action = 'active';
          } else {
            $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
            action = "inactive";
          }
        }
      });
    }

    if (action == 'inactive') {
      action = 'active';
      akbr_infinity_scroll(limit, start);
    }
    $(window).scroll(function() {
      if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
        action = 'active';
        start = start + limit;
        setTimeout(function() {
          akbr_infinity_scroll(limit, start);
        }, 1000);
      }
    });

  });
</script>