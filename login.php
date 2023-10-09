<?php
Session_start();
?>

<head>
    <style>
        /* Apply styles to the form container */
form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 100px;
  background-color: #FFD9C0;
  text-align: center;
}

/* Style the form heading */
h1 {
  font-size: 24px;
  color: #333;
}

/* Style the list in the navigation menu */
ul {
  list-style-type: none;
  padding: 0;
  text-align: center;
}

ul li {
  display: inline;
  margin-right: 20px;
}

ul li a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}
ul li a:hover{
    background-color: #E48586;
}

/* Style the input fields and icons */
img {
  vertical-align: middle;
  margin-right: 10px;
  max-width: 100px;
}

input[type="text"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style the submit and reset buttons */
input[type="submit"],
input[type="reset"] {
  background-color: #D3CEDF;
  color: black;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  margin: 10px 5px;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
  background-color: #EAC7C7;
}

        </style>
</head>

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
