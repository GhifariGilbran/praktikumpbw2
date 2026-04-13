<h3>1. Kendaraan - Switch Statement</h3>
<form method="POST">
    Jumlah Roda: <input type="number" name="roda" required><br><br>
    <input type="submit" name="submit_kendaraan" value="Cek Kendaraan">
</form>
<hr>

<?php
if(isset($_POST['submit_kendaraan'])) {
    $roda = (int)$_POST['roda'];
    echo "<h4>HASIL SWITCH:</h4>";
    
    switch($roda) {
        case 2: echo "Sepeda/Motor (2 roda)"; break;
        case 3: echo "Trisikel (3 roda)"; break;
        case 4: echo "Mobil (4 roda)"; break;
        case 6: echo "Truk kecil (6 roda)"; break;
        case 8: echo "Truk besar (8 roda)"; break;
        case 10: echo "Bus (10 roda)"; break;
        default: echo "Kendaraan tidak dikenali";
    }
}
?>