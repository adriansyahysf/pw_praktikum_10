<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 //Mendefinisikan variabel dengan berbagai macam tipe data
 $nim = "22.11.4738";
 $nama = "Adriansyah Yusuf Bimantara";
 $umur = 20;
 $nilai = 92.2;
 $status = TRUE;
 //Menampilkan data
 echo "NIM : ".$nim."<br>";
 echo "Nama : $nama <br>";
 print "Umur : ".$umur."<br>";
 printf ("Nilai : %.3f<br>",$nilai);
 if($status)
 echo "Status : Aktif";
 else
 echo "Status : Tidak Aktif";
 ?>
</body>
</html>