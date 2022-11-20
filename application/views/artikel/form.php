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

            <?php echo form_open_multipart($action); ?>

            <div class="form-group mb-3">
              <label for="">Judul</label> <br />
              <input type="text" name="judul" id="judul" class="form-control" required value="<?= $judul; ?>">
              <div id="emailHelp" class="form-text text-danger"><?php echo form_error('judul'); ?></div>

            </div>


            <div class="form-group mb-3">
              <textarea name="isi" id="isi" class="form-control" required value="<?= $isi; ?>" rows="10"><?= $isi; ?></textarea>
              <div id="emailHelp" class="form-text text-danger"><?php echo form_error('isi'); ?></div>

            </div>


            <div class="form-group mb-3">
              <label for="">Kategori</label> <br />
              <select name="kategori" id="kategori" class="form-control" required>
                <option>-- Pilih Kategori --</option>
                <?php foreach ($kategori_artikel as $value) : ?>
                  <option value="<?= $value; ?>" <?= $value == $kategori ? 'selected' : ''; ?>><?= $value; ?></option>
                <?php endforeach ?>
              </select>
              <div id="emailHelp" class="form-text text-danger"><?php echo form_error('video_url'); ?></div>
            </div>

            <input type="hidden" name="id" value="<?= $id; ?>">

            <p><?php echo form_submit('submit', 'Publish', 'class="btn btn-primary"'); ?></p>


          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group mb-3">
          <label for="">Thumbnail</label> <br />
          <input type="file" name="gambar" id="gambar" class="form-control" value="<?= $gambar; ?>">
          <div id="emailHelp" class="form-text text-danger"><?php echo form_error('gambar'); ?></div>
        </div>
        <div class="form-group mb-3">
          <div id="image-preview"></div>
          <?php if ($gambar) : ?>
            <img src="<?= base_url('assets/uploads/artikel/' . $gambar); ?>" alt="" width="100%">
          <?php endif ?>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</main>
<section style="height: 600px;">

</section>
<script>
  // image preview before upload
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("gambar").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").innerHTML = '<img src="' + oFREvent.target.result + '" style="width: 100%; height: 100%;">';
    };
  };

  document.getElementById("gambar").addEventListener("change", previewImage);
</script>