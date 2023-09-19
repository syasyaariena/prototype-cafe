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
    <img src="person.png" alt="" srcset=""> <input type="text" name="nama" placeholder="Masukkan Nama Anda"> <br>
    <img src="call.png" alt="" srcset=""><input type="number" name="notel" placeholder="Masukkan No Telefon Anda"> <br>
    <input type="submit" name="login" value="Login"> 
    <input type="reset" name="reset" value="Reset">
</form>
<?php
include("config.php");
if(isset($_POST['login'])){
    $nama=$_POST ['nama'];
    $notel=$_POST ['notel'];

    $query=mysqli_query($sambungan,"INSERT INTO pelanggan WHERE nama='$nama',notel='$notel'");

    header("location:paparanmenu.php");
        
    }
?>
