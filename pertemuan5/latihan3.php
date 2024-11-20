<?php
$mahasiswa = [
    ["Afreta Yufri","20060713","Rekayasa 
Perangkat Lunak","AfretaYufri@gmail.com"],
    ["Dwi Fitria","20060714","Teknik Kasih Sayang","DwiFitri@gmail.com"],
    ["fitrian","20060715","Teknik Komputer","Fitrian@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
<head>
   <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama:<?= $mhs[0]; ?></li>
      <li>NRP:<?= $mhs[1]; ?></li>
      <li>Jurusan:<?= $mhs[2]; ?></li>
      <li>Email:<?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>