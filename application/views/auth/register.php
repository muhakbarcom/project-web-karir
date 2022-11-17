<main id="main">
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5 justify-content-center">
          <div class="row">
            <form action="<?= base_url('Auth/register_action'); ?>" method="POST">
              <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= $this->session->flashdata('error'); ?>
                </div>
              <?php elseif ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                  <?= $this->session->flashdata('success'); ?>
                </div>
              <?php endif ?>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="first_name" class="form-label">Nama Depan</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" value="<?= $first_name; ?>" required>
                    <div id="emailHelp" class="form-text text-danger"><?php echo form_error('first_name'); ?></div>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="last_name" class="form-label">Nama Belakang</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" value="<?= $last_name; ?>" required>
                    <div id="emailHelp" class="form-text text-danger"><?php echo form_error('last_name'); ?></div>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?= $email; ?>" required>
                <div id="emailHelp" class="form-text text-danger"><?php echo form_error('email'); ?></div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div id="emailHelp" class="form-text text-danger"><?php echo form_error('password'); ?></div>
              </div>
              <div class="mb-3">
                <label for="password_confirm" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
                <div id="emailHelp" class="form-text text-danger"><?php echo form_error('password_confirm'); ?></div>
              </div>
              <button type="submit" class="btn btn-success">Daftar</button>
            </form>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <p>Sudah punya akun? <a href="<?= base_url('Auth/login'); ?>">Login</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>


    </div>
  </section>
</main>