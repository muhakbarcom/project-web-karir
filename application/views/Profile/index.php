<main id="main" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Profile</h3>
          </div>
          <div class="card-body">
            <?php if ($this->session->flashdata('message')) : ?>
              <div class="alert alert-info" role="alert">
                <?= $this->session->flashdata('message'); ?>
              </div>
            <?php endif ?>
            <?php echo form_open($action); ?>

            <div class="row mb-3">
              <div class="col">
                <div class="form-group ">
                  <label for="">Nama Depan</label> <br />
                  <input type="text" name="first_name" id="first_name" class="form-control" required value="<?= $first_name; ?>">
                  <div id="emailHelp" class="form-text text-danger"><?php echo form_error('first_name'); ?></div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="">Nama Belakang</label> <br />
                  <input type="text" name="last_name" id="last_name" class="form-control" required value="<?= $last_name; ?>">
                  <div id="emailHelp" class="form-text text-danger"><?php echo form_error('last_name'); ?></div>
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="">Email</label> <br />
              <input type="email" name="email" id="email" class="form-control" required value="<?= $email; ?>">
              <div id="emailHelp" class="form-text text-danger"><?php echo form_error('email'); ?></div>
            </div>



            <div class="row mb-3">
              <div class="col">
                <div class="form-group">
                  <label for="">Password</label> <br />
                  <input type="password" name="password" id="password" class="form-control">
                  <div id="emailHelp" class="form-text text-danger"><?php echo form_error('password'); ?></div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="">Konfirmasi Password</label> <br />
                  <input type="password" name="password_confirm" id="password_confirm" class="form-control">
                  <div id="emailHelp" class="form-text text-danger"><?php echo form_error('password_confirm'); ?></div>
                </div>
              </div>
            </div>


            <input type="hidden" name="id_user" value="<?= $id_user; ?>">

            <p><?php echo form_submit('submit', 'Simpan', 'class="btn btn-primary"'); ?></p>

            <?php echo form_close(); ?>

          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</main>
<section style="height: 600px;">

</section>