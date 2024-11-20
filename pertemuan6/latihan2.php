<?php
// $mahasiswa = [
//     ["Afreta Yufri","20060713","Rekayasa 
// Perangkat Lunak","AfretaYufri@gmail.com"],
//     ["Dwi Fitria","20060714","Teknik Kasih Sayang","DwiFitri@gmail.com"],
//     ["fitrian","20060715","Teknik Komputer","Fitrian@gmail.com"],
// ];

// Array Assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
            "nama" => "Afreta Yufri",
            "nrp" => "20060713", 
            "email" => "Afretayufri@gmail.com",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "gambar" => "taaa.jpg"
    ],
    [
            "nama" => "Dwi Ftria",
            "nrp" => "20060714", 
            "email" => "Dwifitria@gmail.com",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "gambar" => "reet.jpg"
    ]
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
        <li>   
            <img src="img/<?= $mhs["gambar"]; ?>  ">
         </li>
      <li>Nama:<?= $mhs["nama"]; ?></li>
      <li>NRP:<?= $mhs["nrp"]; ?></li>
      <li>Jurusan:<?= $mhs["jurusan"]; ?></li>
      <li>Email:<?= $mhs["email"]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>