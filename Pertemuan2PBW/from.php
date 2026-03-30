<!DOCTYPE html>
<html>
<head>
    <title>Predikat Nilai</title>
</head>
<body>

<h2>Input Nilai Mahasiswa</h2>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br><br>
    Nilai: <input type="number" name="nilai"><br><br>
    <input type="submit" name="proses" value="Proses">
</form>

<?php
if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 75) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 65) {
        $predikat = "C";
        $status = "Lulus";
    } elseif ($nilai >= 50) {
        $predikat = "D";
        $status = "Tidak Lulus";
    } elseif ($nilai >= 0) {
        $predikat = "E";
        $status = "Tidak Lulus";
    } else {
        $predikat = "Tidak valid";
        $status = "-";
    }

    echo "<h3>Hasil:</h3>";
    echo "Nama: $nama <br>";
    echo "Nilai: $nilai <br>";
    echo "Predikat: $predikat <br>";
    echo "Status: $status";
}
?>

</body>
</html>