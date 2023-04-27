<?php
require 'config.php';
if(!empty($_SESSION["id_a"])){
    $id_a = $_SESSION["id_a"];
    $result = mysqli_query($conn, "SELECT * FROM adm_data WHERE id_a = $id_a");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>MAKEUP SHOP</h1>
    <div class="menu-bar">
        <ul>
            <li><a href="index.php">Home</a></li>

            <li><a href="products.php">Products</a>
                <div class="sub-menu1">
                    <ul>

                        <li class="hover-me"><a href="products.php">Eyes ></a>
                            <div class="sub-menu2">
                                <ul>
                                    <li><a href="products.php">Mascara</a></li>
                                    <li><a href="products.php">Eyeshadow Palette</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="hover-me"><a href="products.php">Face ></a>
                            <div class="sub-menu2">
                                <ul>
                                    <li><a href="products.php">Foundation</a></li>
                                    <li><a href="products.php">Blush</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="hover-me"><a href="products.php">Lipstick ></a>
                            <div class="sub-menu2">
                                <ul>
                                    <li><a href="products.php">Lipstick</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </li>

            <li><a href="cart.html">Cart</a></li>

            <li><a href="login.php">Login</a></li>
        </ul>
    </div>

	<br>
    <h2>WELCOME <?php echo $row["username_a"]; ?></h2>
    <br><br><br>
    <h3>Administration:</h3>
    <a href="adm_product_list.php"><button class="btn">Product list</button></a>
    <a href="adm_product_insert.php"><button class="btn">Insert products</button></a><br><br>
    <h3 style="color:red">Disconnect:</h3>
    <a href="logout.php"><button type="submit" class="btn">Logout</button></a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>