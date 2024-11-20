<?php
// SUPERGLOBALS
// Variable global milik php
// merupakan array Associative

// $_GET


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
   
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php? nama=<?= $mhs["nama"]; 
                ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>
               "> <?= $mhs["nama"]; ?> </a>
                
            </ul>        
            <?php endforeach; ?>
         </li>
    
    </body>
</html>