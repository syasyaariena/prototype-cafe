<head>
    <style>
       
h1 {
  text-align: center;
  font-size: 32px;
  color: #333;
  margin-top: 20px;
  border: solid;
  border-radius: 30px;
  background-color: #E6C7BD;
}


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


a[href="payment.php"] input[type="submit"],
a[href="cashier.php"] input[type="submit"] {
  display: block;
  margin: 20px auto;
  background-color: #E48586;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  text-decoration: none;
  text-align: center;
}

a[href="payment.php"] input[type="submit"]:hover,
a[href="cashier.php"] input[type="submit"]:hover {
  background-color: #F2D8D8;
}

        </style>
</head>
<body>
<h1>SYA'S CAFE</h1>
    <ul>
        <li> <a href="login.php">LOGIN</a></li>
        <li> <a href="paparanmenu.php">MENU</a></li>
    </ul>

<a href="payment.php"><input type="submit" value="pay online" name="payonline"></a><br>
<a href="cashier.php"><input type="submit" value="pay at cashier" name="cashier"></a>
</body>