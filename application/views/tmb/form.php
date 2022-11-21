<main id="main" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3><?= $title; ?></h3>
          </div>
          <div class="card-body">
            <?php if ($this->session->flashdata('error')) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('error'); ?>
              </div>
            <?php elseif ($this->session->flashdata('success')) : ?>
              <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success'); ?>
              </div>
            <?php endif ?>

            <?php echo form_open($action); ?>

            <div class="form-group ">
              <label for="">Judul</label> <br />
              <input type="text" name="tmb_name" id="tmb_name" class="form-control" required value="<?= $tmb_name; ?>">
              <div id="emailHelp" class="form-text text-danger"><?php echo form_error('tmb_name'); ?></div>

            </div>
            <div class="form-group">
              <label for="">Link</label> <br />
              <input type="text" name="tmb_url" id="tmb_url" class="form-control" required value="<?= $tmb_url; ?>">
              <div id="emailHelp" class="form-text text-danger"><?php echo form_error('tmb_url'); ?></div>
            </div>
            <input type="hidden" name="id" value="<?= $id; ?>">

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