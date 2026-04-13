<h3>3. Hewan - Foreach Array</h3>
<form method="POST">
    Tambah hewan: <input type="text" name="hewan_baru"><br><br>
    <input type="submit" name="submit_hewan" value="Tampilkan Hewan">
</form>
<hr>

<?php
if(isset($_POST['submit_hewan'])) {
    $daftar_hewan = array('Singa','Gajah','Harimau','Zebra');
    if(!empty($_POST['hewan_baru'])) {
        $daftar_hewan[] = $_POST['hewan_baru'];
    }
    
    echo "<h4>Daftar Hewan:</h4>";
    foreach($daftar_hewan as $no => $hewan) {
        echo ($no+1).". $hewan<br>";
    }
}
?>