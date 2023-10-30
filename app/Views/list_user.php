<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<section>
  <h1>Data Mahasiswa</h1>
  <a href="<?= base_url('user/create')?>" class="btn btn-primary">Tambah Data</a>
  <div class="tbl-header">
    <table class="list-table">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <table class="list-table">
      <tbody>
      <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                  <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-info">Info</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</section>

<?= $this->endSection() ?>

