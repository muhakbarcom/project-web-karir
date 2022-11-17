<main id="main" class="mt-5">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Kelola User</h3>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <a href="<?= base_url('users/create'); ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i> Tambah User</a>
        </div>
        <table id="datatables" class="table table-striped mt-2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Depan</th>
              <th>Nama Belakang</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $value) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $value->first_name; ?></td>
                <td><?= $value->last_name; ?></td>
                <td><?= $value->email; ?></td>
                <td>
                  <a href="<?= base_url('Users/edit/') . $value->id; ?>" class="bg-warning badge"><i class="bi bi-pencil-square"></i> Edit</a>
                  <a href="<?= base_url('Users/delete/') . $value->id; ?>" class="bg-danger badge" onclick="return confirm('are you sure?')"><i class="bi bi-trash3-fill"></i> Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Depan</th>
              <th>Nama Belakang</th>
              <th>Email</th>
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