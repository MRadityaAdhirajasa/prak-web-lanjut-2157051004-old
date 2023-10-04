<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div>

<div class="data">
        <br>
        <br>
        <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
        <p></p>
        <input class="input-profile" style="width:240px; height:30px" type="text" name="nama" value="<?= $user['nama'] ?? 'nama' ?>" disabled>
        <br><br><br><input class="input-profile" style="width:240px; height:30px" type="text" name="kelas" value="<?= $user['nama_kelas'] ?? 'kelas' ?>" disabled>
        <br><br><br><input class="input-profile" style="width:240px; height:30px" type="text" name="npm" value="<?= $user['npm'] ?? 'npm' ?>" disabled>
        <p>
        </p>
        <br>
    </div>


<?= $this->endSection() ?>