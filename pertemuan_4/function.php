<?php
    function salam($waktu = "Datang", $admin = "Admin"){
        return "Selamat $waktu, $admin!";
    }
?>
<html>
    <head>
        <title>Latihan Function</title>
    </head>
    <body>
        <h1>
            <?= salam(); ?>
        </h1>
    </body>
</html>