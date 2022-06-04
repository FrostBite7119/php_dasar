<?php
    $mahasiswa = [
        ["Alex Nurdin", "043040023", "Teknik Informatika", "alex.nurdin@email.com"],
        ["Dedi", "033040001", "Teknik Industri", "dedi@email.com"],
        ["023040123", "Eril", "Teknik Planologi", "eril@email.com"]
    ];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php foreach($mahasiswa as $mhs): ?>
            <ul>
                <li>Nama: <?= $mhs[0]; ?></li>
                <li>NRP: <?= $mhs[1]; ?></li>
                <li>Jurusan: <?= $mhs[2]; ?></li>
                <li>Email: <?= $mhs[3]; ?></li>
            </ul>
        <?php endforeach; ?>
    </body>
</html>