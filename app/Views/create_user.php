<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createuser</title>
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
    <div class="data">
        <br>
        <br>
    <form action="<?= base_url('/user/store') ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas">
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