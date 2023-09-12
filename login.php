<?php
Session_start();
?>
<form method="POST">
    <h1>SYA'S CAFE</h1>
    <ul>
        <li> <a href="login.php">LOGIN</a></li>
        <li> <a href="paparanmenu.php">MENU</a></li>
        <li> <a href="order.php">ORDER</a></li>
    </ul>
    Nama : <input type="text" name="nama" placeholder="Masukkan Nama Anda"> <br>
    No Telefon <input type="number" name="notel" placeholder="Masukkan No Telefon Anda"> <br>
    <input type="submit" name="login" value="Login"> 
    <input type="reset" name="reset" value="Reset">
</form>
<?php
include("config.php");
if(isset($_POST['login'])){
    $nama=$_POST ['nama'];
    $notel=$_POST ['notel'];

    $query=mysqli_query($sambungan,"INSERT INTO pelanggan WHERE nama='$nama',notel='$notel'");

    if(mysqli_num_rows($query)>0){
        while($row=mysqli_fetch_assoc($query))
          $_SESSION ['id'] = $row ['id'];
          $nama= $row ['nama'];
          $notel= $row ['notel'];
          $id= $row ['id'];

    header("location:paparanmenu.php");
        
    }
}

?>