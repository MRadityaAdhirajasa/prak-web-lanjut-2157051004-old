<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

</head>

<style>
body{
    background-color: #9fd3c7;
}

.data{
    margin: auto;
    border-radius: 25px;
    width: 65%;
    margin-top: 20px;
    text-align: center;
    justify-content: center;
    background-color: white;
}

img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 5px solid #555;
}


</style>

<body>

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

</body>
</html>