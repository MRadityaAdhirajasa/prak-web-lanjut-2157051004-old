<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<section>
  <h1>Data Mahasiswa</h1>
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
                <td></td>
            </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</section>

<?= $this->endSection() ?>

