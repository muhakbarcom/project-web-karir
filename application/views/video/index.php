<main id="main">
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Rekomendasi Karir</h2>
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
  <section id="blog" class="blog">
    <div class="container">
      <?php echo $pagination; ?>
    </div>
  </section>
</main>

<script>
  // $(document).ready(function() {

  //   let limit = 6;
  //   let start = 0;
  //   let search = "<?= $search_data; ?>";
  //   let action = 'inactive';

  //   function akbr_infinity_scroll(limit, start) {
  //     $.ajax({
  //       url: "<?= base_url('Videos/get_videos'); ?>",
  //       method: "POST",
  //       data: {
  //         limit: limit,
  //         start: start,
  //         search: search
  //       },
  //       cache: false,
  //       success: function(data) {
  //         articles = JSON.parse(data);
  //         articles.forEach(data => {
  //           // insert html here
  //           $('#load_data').append(`
  //           <div class="col-xl-4 col-md-6 portfolio-item filter-app">
  //             <div class="portfolio-wrap">
  //               <a href="${data.video_url}" class="glightbox play-btn"><img src="${data.video_thumb}" class="img-fluid" alt=""></a>
  //               <div class="portfolio-info">
  //                 <h4><a href="${data.video_url}" title="More Details">${data.video_name}</a></h4>
  //               </div>
  //             </div>
  //           </div>
  //           `);
  //         });
  //         if (data == '') {
  //           $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
  //           action = 'active';
  //         } else {
  //           $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
  //           action = "inactive";
  //         }
  //       }
  //     });
  //   }

  //   if (action == 'inactive') {
  //     action = 'active';
  //     akbr_infinity_scroll(limit, start);
  //   }
  //   $(window).scroll(function() {
  //     if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
  //       action = 'active';
  //       start = start + limit;
  //       setTimeout(function() {
  //         akbr_infinity_scroll(limit, start);
  //       }, 1000);
  //     }
  //   });

  // });
</script>