<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Praktikum 9</title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
echo "Nama : <b>$nama</b> <br>";
echo "E-mail : <b>$email</b> <br>";
echo "Pesan : <b>$pesan</b> <br>";
?>

</body>
</html>