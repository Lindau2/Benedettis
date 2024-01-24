<!DOCTYPE html>
<html>
<head>
    <title>Benedetti's Pizzaria</title>
    <style>
        body {
            background: linear-gradient(to bottom, #FFDDDD, #A3D1A3);
            font-family: Arial, sans-serif;
        }

        #container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #FF5733;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        #submit-btn {

            display: block;
            margin: 20px auto;
            background-color: #FF5733;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        #logo {

            text-align: center;
            margin-top: 20px;
        }

    
        #logo img {
            max-width: 200px;
            height: auto;
        }

        #selected-toppings {
            border: 1px solid #ddd;
            padding: 10px;
            margin-top: 20px;
        }
    </style>



    </head>
<body>
<div id="container">
        <div id="logo">
           
            <img src="benedetti.png" alt="Logo">
        </div>
        <h1>Build Your Pizza</h1>
        <form method="post" action="">
            <label><input type="checkbox" name="toppings[]" value="Tomato"> Tomato</label>
            <label><input type="checkbox" name="toppings[]" value="Mushrooms"> Mushrooms</label>
            <label><input type="checkbox" name="toppings[]" value="Onions"> Onions</label>
            <label><input type="checkbox" name="toppings[]" value="Olives"> Olives</label>
            <label><input type="checkbox" name="toppings[]" value="Jalapeno Peppers"> Jalapeno Peppers</label>
            <label><input type="checkbox" name="toppings[]" value="Chicken"> Chicken</label>
            <label><input type="checkbox" name="toppings[]" value="Bacon"> Bacon</label>
            <label><input type="checkbox" name="toppings[]" value="Extra Cheese"> Extra Cheese</label>
            <label><input type="checkbox" name="toppings[]" value="Pineapple"> Pineapple</label>
            <label><input type="checkbox" name="toppings[]" value="Mint"> Mint</label>
            <label><input type="checkbox" name="toppings[]" value="Anchovies"> Anchovies</label>
            <input type="submit" id="submit-btn" value="Submit">
        
        </form>

        
        <?php
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             if (isset($_POST["toppings"]) && is_array($_POST["toppings"])) {
                 $selectedToppings = implode(", ", $_POST["toppings"]);
                 echo "<p>You have chosen the following toppings: $selectedToppings</p>";
             } else {
                 echo "<p>No toppings selected.</p>";
             }
         }
         
        ?>

</div>

</body>
</html>