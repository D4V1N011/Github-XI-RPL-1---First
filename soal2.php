<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <center>
    <h1>Program Tugas</h1>
    <table>
        <tr>
            <th></th>
            <th>No</th>
            <th>Menu Program</th>
        </tr>
        <tr>
            <td></td>
            <td>1.</td>
            <td>Program While Pertama</td>
        </tr>
        <tr>
            <td></td>
            <td>2.</td>
            <td>Program While kedua</td>
        </tr>
        <tr>
            <td></td>
            <td>3.</td>
            <td>Program While ketiga</td>
        </tr>
        <tr>
            <td></td>
            <td>4.</td>
            <td>Program Do While pertama</td>
        </tr>
        <tr>
            <td></td>
            <td>5.</td>
            <td>Program Do While kedua</td>
        </tr>
        <tr>
            <td></td>
            <td>6.</td>
            <td>Program Do While ketiga</td>
        </tr>
        <tr>
            <td></td>
            <td>0.</td>
            <td><a href ="lanjutan.php">daftar lainnya</a></td>
        </tr>

    </table>
    <form action="" method="post">
  <p>Silahlan pilih nomor diatas </p>
  <input type="number" name ="bebas">
  <button name ="kirim" class ="button">ok</button>
  </form>
  <?php
  if (isset ($_POST['kirim'])) {
    $bebas = $_POST ['bebas'] ;
    if ($bebas == 1) {
        echo "Program While Pertama<br>";
        $x = 1; 

        while($x <= 10) {
            echo "Angka $x <br>";
            $x++;
        } 
    }else if ($bebas == 2) {
        echo "Program while kedua<br>";
        $i=1;
while ($i <= 10){
  echo "$i";
  echo "<br />";
  $i=$i+1;
}
    }elseif ($bebas == 3) {
        echo "Program While Ketiga<br>";
        $i=100;
while ($i >= 0){
   echo "$i";
   echo "<br />";
   $i-=8;
}
    }elseif ($bebas == 4) {
        echo "Program Do While Pertama<br>";
        $i=1000;
do{
  echo "$i";
  echo "Akan tampil di browser";
  $i=$i+1;
} while ($i <= 10);
    }elseif ($bebas == 5) {
        echo "Program Do While Kedua";
        $i=1;
do
{
  echo "$i";
  echo "<br />";
  $i=$i+1;
} while ($i <= 10);
    }else if ($bebas == 6) {
        echo "Program Do While Ketiga";

    }else {
        echo "Maaf Pilihan Anda Tidak Ada!!!";
    }
}
    ?>
    </center>
</body>
</html>