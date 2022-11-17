<main id="main" class="mt-5">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3><?= $title; ?></h3>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <a href="<?= base_url('videos/create'); ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i> Tambah Video</a>
        </div>
        <?php if ($this->session->flashdata('error')) : ?>
          <div class="alert alert-danger" role="alert">
            <?= $this->session->flashdata('error'); ?>
          </div>
        <?php elseif ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success'); ?>
          </div>
        <?php endif ?>
        <table id="datatables" class="table table-striped mt-2">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Link</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($videos as $value) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $value->video_name; ?></td>
                <td><?= $value->video_url; ?></td>
                <td>
                  <a href="<?= base_url('videos/edit/') . $value->id; ?>" class="bg-warning badge"><i class="bi bi-pencil-square"></i> Edit</a>
                  <a href="<?= base_url('videos/delete/') . $value->id; ?>" class="bg-danger badge" onclick="return confirm('are you sure?')"><i class="bi bi-trash3-fill"></i> Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Link</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</main>
<section style="height: 600px;">

</section>