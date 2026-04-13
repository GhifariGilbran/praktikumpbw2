<h3>4. Ganjil Genap - Ternary Operator</h3>
<form method="POST">
    Masukkan angka: <input type="number" name="angka" required><br><br>
    <input type="submit" name="submit_ganjilgenap" value="Cek Genap/Ganjil">
</form>
<hr>

<?php
if(isset($_POST['submit_ganjilgenap'])) {
    $angka = (int)$_POST['angka'];
    $status = ($angka % 2 == 0) ? "GENAP" : "GANJIL";
    
    echo "<h4>HASIL TERNARY:</h4>";
    echo "Angka $angka adalah <strong>$status</strong>";
}
?>