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
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Product Management</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

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
<script>
  $(document).ready(function() {
    $('#datatables').DataTable();
  });
</script>
</body>

</html>