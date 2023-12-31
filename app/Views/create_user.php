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
    <form action="<?= base_url('/user/store') ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?= old('nama') ?>">
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
            <option class="option-class" value="<?= $item['id'] ?>">
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
                    <input type="text" name="npm" id="npm">
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

