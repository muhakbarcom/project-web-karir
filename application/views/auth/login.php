<main id="main">
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5 justify-content-center">
          <div class="row">
            <form action="<?= base_url('Auth/login'); ?>" method="POST">
              <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert alert-info" role="alert">
                  <?= $this->session->flashdata('message'); ?>
                </div>
              <?php endif ?>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <div id="emailHelp" class="form-text text-danger"><?php echo form_error('email'); ?></div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <div id="emailHelp" class="form-text text-danger"><?php echo form_error('password'); ?></div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <p>Belum punya akun? <a href="<?= base_url('Auth/register'); ?>">Daftar Akun</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>


    </div>
  </section>
</main>