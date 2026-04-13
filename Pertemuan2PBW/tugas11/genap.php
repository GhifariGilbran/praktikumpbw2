<h3>2. Bilangan Genap 2-10</h3>
<form method="POST">
    Batas: <input type="number" name="batas" value="10"><br><br>
    <input type="submit" name="submit_for" value="Cetak">
</form>

<?php
if(isset($_POST['submit_for'])) {
    $batas = (int)$_POST['batas'];
    echo "<h4>Genap 2 - $batas :</h4>";
    
    for($i=2; $i<=$batas; $i+=2) {
        echo "$i ";
    }
}
?>