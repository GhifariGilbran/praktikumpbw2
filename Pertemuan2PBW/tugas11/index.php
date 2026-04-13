<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP</title>
</head>
<body>
    <h1>Latihan PHP</h1>
    <hr>
    
    <h2>Navigasi:</h2>
    <a href="?page=kendaraan">[1. Kendaraan]</a> | 
    <a href="?page=genap">[2. Genap]</a> | 
    <a href="?page=hewan">[3. Hewan]</a> | 
    <a href="?page=ganjilgenap">[4. Ganjil Genap]</a>
    <hr>

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'kendaraan';
    
    switch($page) {
        case 'kendaraan': include 'kendaraan.php'; break;
        case 'genap': include 'genap.php'; break;
        case 'hewan': include 'hewan.php'; break;
        case 'ganjilgenap': include 'ganjilgenap.php'; break;
        default: include 'kendaraan.php';
    }
    ?>
</body>
</html>