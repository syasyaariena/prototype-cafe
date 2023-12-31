<html>
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
        a:hover{
            background-color: #E48586;
        }

        img {
            display: block;
            margin: 20px auto;
            max-width: 50%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        
        p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }

        input[type="submit"]{
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
<h1>SYA'S CAFE</h1>
    <ul>
        <li> <a href="login.php">LOGIN</a></li>
        <li> <a href="paparanmenu.php">MENU</a></li>
    </ul>
    <body>

    <img id="clickableImage" src="cake.jpg" alt="Clickable Image">
    <script src="script.js"></script>
    <!DOCTYPE html>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
    
    <label for="pricePerItem">Price per Item:</label>
    <span id="pricePerItem">RM15.00</span>
    
    <h2>Total Price:</h2>
    <span id="totalPrice">RM15.00</span>

    <script>
    
        function updateTotalPrice() {
            const quantityInput = document.getElementById("quantity");
            const pricePerItemElement = document.getElementById("pricePerItem");
            const totalPriceElement = document.getElementById("totalPrice");

        
            const quantity = parseFloat(quantityInput.value);
            const pricePerItem = parseFloat(pricePerItemElement.textContent.replace("RM", ""));

            const totalPrice = quantity * pricePerItem;

            totalPriceElement.textContent = "RM" + totalPrice.toFixed(2);
        }
    </script>
    <br><a href="pay.php"><input type="submit" value="order" name="order"></a>
  </body>
</html>