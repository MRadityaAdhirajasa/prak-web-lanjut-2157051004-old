<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div>

<div class="data">
        <br>
        <br>
        <img src="https://cdn-icons-png.flaticon.com/512/2815/2815428.png" alt="saya">
        <p></p>
        <input style="width:240px; height:30px" type="text" name="nama" value="<?= $nama ?>" placeholder="Nama" disabled>
        <br><br><br><input style="width:240px; height:30px" type="text" name="kelas" value="<?= $kelas ?>" placeholder="Kelas" disabled>
        <br><br><br><input style="width:240px; height:30px" type="text" name="npm" value="<?= $npm ?>" placeholder="NPM" disabled>
        <p>
        </p>
        <br>
    </div>



<!-- <table>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?= $nama ?></td>
  </tr>
  <tr>
    <td>kelas</td>
    <td>:</td>
    <td><?= $kelas ?></td>
  </tr>
  <tr>
    <td>npm</td>
    <td>:</td>
    <td><?= $npm ?></td>
  </tr>
</table> -->

<?= $this->endSection() ?>