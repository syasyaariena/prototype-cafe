<html>
<head>
    <style>
/* Apply styles to the header */
h1 {
  text-align: center;
  font-size: 32px;
  color: #333;
  margin-top: 20px;
  border:solid;
  border-radius: 30px;
  background-color: #E6C7BD;
}

/* Style the navigation menu */
ul {
  list-style-type: none;
  padding: 0;
  text-align: center;
  border: solid;
  border-radius: 30px;
  background-color: #E6C7BD;
}

li {
  display: inline;
  margin-right: 20px;

}

a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}

a:hover {
  background-color: #E48586;
}
/* Style the image */
img {
  display: block;
  margin: 20px auto;
  max-width: 50%;
  height: auto;
  border: 1px solid #ccc;
  border-radius: 20px;
}

/* Style the food item description */
p {
  text-align: center;
  font-size: 18px;
  color: #555;
}

/* Style the "Order" button */
input[type="submit"] {
  display: block;
  margin: 20px auto;
  background-color: #E48586;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #F2D8D8;
}
body {
  background-color: #E9DAC1;
}


        </style>
</head>
<h1>SYA'S CAFE</h1>
    <ul>
        <li> <a href="login.php">LOGIN</a></li>
        <li> <a href="paparanmenu.php">MENU</a></li>
        <li> <a href="order.php">ORDER</a></li>
    </ul>
    <img src="pasta.jpeg" alt="" srcset="">
   <p> Spaghetti Carbonara </p> <br>
   <p> Rm 10.00 </p>
    <br>
    <input type="submit" value="order" name="order">
</html>