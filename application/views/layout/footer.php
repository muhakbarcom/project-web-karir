<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span><?= $titleapp; ?></span>
        </a>
        <p><?= $descapp; ?></p>
        <div class="social-links d-flex mt-4">
          <a href="<?= $socmed['twitter']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="<?= $socmed['facebook']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?= $socmed['instagram']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?= $socmed['linkedin']; ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">

      </div>

      <div class="col-lg-2 col-6 footer-links">

      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">


      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span><?= $titleapp; ?></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>/assets-impact/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets-impact/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>/assets-impact/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>/assets-impact/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url() ?>/assets-impact/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>/assets-impact/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>/assets-impact/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>/assets-impact/js/main.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery-3.5.1.js"></script>
<script src="<?= base_url() ?>/assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/datatables/dataTables.bootstrap5.min.js"></script>

<!-- include summernote css/js-->
<link href="<?= base_url('assets/summernote/summernote-lite.css'); ?>" rel="stylesheet">
<script src="<?= base_url('assets/summernote/summernote-lite.js'); ?>"></script>
<script>
  $(document).ready(function() {
    $('#datatables').DataTable();
  });
  // disable form-group note-group-image-url
  $('.note-group-image-url').hide();

  $(document).ready(function() {
    $('.summernote').summernote({
      height: 300, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: true // set focus to editable area after initializing summernote
        ,

      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['picture']],
        ['height', ['height']]
      ],
      callbacks: {
        onImageUpload: function(files) {
          for (let i = 0; i < files.length; i++) {
            $.upload(files[i]);
          }
        },
        onImageLinkInsert: function(url) {
          // url is the image url from the dialog
          $img = $('<img>').attr({
            src: url
          })
          $('.summernote').summernote('insertNode', $img[0], function($img) {
            $img.attr('width', '100%');
          });
        },
        onMediaDelete: function(target) {
          // alert(target[0].src)
          deleteFile(target[0].src);
        }
      }
    });

  });

  function deleteFile(src) {
    $.ajax({
      data: {
        src: src
      },
      type: "POST",
      url: "<?= base_url('Artikel/delete_img_summernote'); ?>", // replace with your url
      cache: false,
      success: function(resp) {
        console.log(resp);
      }
    });
  }

  $.upload = function(file) {
    let out = new FormData();
    out.append('file', file, file.name);

    $.ajax({
      method: 'POST',
      url: '<?= base_url('Artikel/upload_img_summernote'); ?>',
      contentType: false,
      cache: false,
      processData: false,
      data: out,
      success: function(img) {
        // decode json
        let data = JSON.parse(img);
        // add image to summernote

        $('.summernote').summernote('insertImage', data.url, function($img) {
          $img.attr('width', '100%');
          $img.attr('data-file-name', data.file_name);
        });
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error(textStatus + " " + errorThrown);
      }
    });
  };
</script>

</body>

</html>