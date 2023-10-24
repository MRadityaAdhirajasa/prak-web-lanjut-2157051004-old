<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div>
    
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="row">
        <div class="col-md-5">
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('errors') ?>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div class="data">
        <br>
        <br>
    <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input class="input-create" type="text" name="nama" id="nama" value="<?= $user['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                <select name="kelas" id="kelas">
        <?php
        foreach ($kelas as $item) {
        ?>
            <option class="option-class" value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                <?= $item['nama_kelas']  ?>
            </option>
        <?php   
        }
        ?>
    </select>

                    <!-- <input type="text" name="kelas" id="kelas"> -->
                </td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input class="input-create" type="text" name="npm" id="npm" value="<?= $user['npm'] ?>">
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                    <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
                    <input class="input-create" type="file" id="foto" name="foto" accept=".jpg, .jpeg, .png">
                </td>
            </tr>
        </table>

        <button type="submit">Simpan</button>
        <br>
        <br>
    </form>

    </div>

    </div>

<?= $this->endSection() ?>

