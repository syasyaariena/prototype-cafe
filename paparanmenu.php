<style>

#menu {
  background-color: #E6C7BD;
  border-radius: 30px;
  color: black;
  padding: 20px;
  text-align: center;
}

#menu h1 {
  font-size: 24px;
text-align:center;
}

#menu ul {
  list-style-type: none;
  padding: 0;
}

#menu li {
  display: inline;
  margin-right: 10px;

}

#menu a {
  text-decoration: none;
  color: black;
}


ul {
  list-style-type: none;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  background-color:#E6C7BD;
  border-radius: 30px;
}
ul :hover{
    background-color: #E48586;
}

ul li {
  margin: 20px;
  text-align: center;
}

ul li a {
  text-decoration: none;
}


ul li br {
  display: none;
}


ul li img {
  max-width: 20%;
  height: auto;
  border: 1px solid #ccc;
  border-radius: 10px;
}

ul li p {
  margin: 10px 0;
}
body{
    background-color: #E9DAC1;
}
.eat{
  text-align:center;
}
 </style>
<div id="menu">
<h1>SYA'S CAFE</h1>
    <ul>
        <li> <a href="login.php">LOGIN</a></li>
        <li> <a href="paparanmenu.php">MENU</a></li>
    </ul>
</div>
<ul>
    <li><a href="chicken.php"><img src="chicken1.jpg" alt="" srcset=""></a></li>
    <br>Korean Chicken<br>RM 15.00/5pcs
    <br>
    <li><a href="cake.php"><img src="cake.jpg" alt="" srcset=""></a></li>
    <br>Chocolate cake <br> RM 15.00
    <br>
    <div class="eat">
    <li><a href="pasta.php"><img src="pasta.jpeg" alt="" srcset=""></a></li>
    <br>Spaghetti Carbonara <br> RM 10.00 
    <br>
    <li><a href="smoothie.php"><img src="smoothie.jpg" alt="" srcset=""></a></li>
    <br>Fruit Smoothie <br> RM 11.00
    <br>
</div>
</ul>



