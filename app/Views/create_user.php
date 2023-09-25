<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createuser</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<style>
body{
    background-color: #9fd3c7;
}

.data{
    border-radius: 25px;
    width: 65%;
    margin-top: 20px;
    background-color: white;
    margin-left: auto;
    margin-right: auto;
    justify-content: center;
    display: flex;
}

table{
    margin-top: 20px;
    margin-bottom: 20px;
    width: 100%;
    align-self: center;
    /* border: 1px solid black; */
}

input{
    width: 100%;
}

button{
    width: 100%;
}


</style>

<body>
    
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
            <option value="<?= $item['id'] ?>">
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

</body>
</html>