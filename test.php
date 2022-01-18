<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program perulangan</title>
    <link rel="stylesheet" href="test.css">
</head>
<body style="background-image: url(14042599-vintage-menu-background.webp);">
    <center>
    <h1>Daftar Program</h1>
    <table cellspacing ="15" align ="center">
    <tr>
        <th></th>
        <th>No</th>
        <th>Daftar Program</th>
    </tr>
    <tr>
        <td></td>
        <td>1.</td>
        <td>Program Pengulangan Kelipatan 2</td>
    </tr>
    <tr>
        <td></td>
        <td>2.</td>
        <td>Program Pengulangan Kelipatan 5 x 5</td>
    </tr>
    <tr>
        <td></td>
        <td>3.</td>
        <td>Program Ganjil Genap</td>
    </tr>
    <tr>
        <td></td>
        <td>4.</td>
        <td>Program Pengulangan Kuadrat</td>
    </tr>
    </table>
    </center>
    <center>
    <form action="" method ="post">
    <p>Silahkan Pilih Program Yang Ingin Anda Gunakan</p>
    <input type ="number" name = "int">
    <button name ="kirim" class ="button">Pilih</button>
</form>
    <?php
   if (isset ($_POST['kirim'])) {
    $int = $_POST ['int'] ;
    if ($int == 1) {
        echo 'Anda memilih program Pengulangan Kelipatan 2';
        echo 'silahkan masukan angka : <br>';
        echo '<input type="number" name="masukkan">';
        for ($x = 3; $x <= $angka; $x+=3){
            echo "$x ";
        }
    }
   }
    ?>
    </center>
</body>
</html>