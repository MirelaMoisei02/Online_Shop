<?php
require 'config.php';
if(!empty($_SESSION["id_u"])){
    $id_u = $_SESSION["id_u"];
    $result = mysqli_query($conn, "SELECT * FROM user_data WHERE id_u = $id_u");
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
    <h2>WELCOME <?php echo $row["username_u"]; ?></h2>
    <a href="logout.php"><button type="submit" class="btn">Logout</button></a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <!--------info-footer-page-------->
    <br><br>
	<h2 class="contact-title">INFO</h2>
    <br><br>
    <p>Address: Romania, Timisoara, Bvld Vasile Parvan, No. 4<br><br>
    Phone: +40 (0)777 77 77 77 <br><br> 
    Email: makeup@gmail.com <br></p>
    <br><br>
</body>
</html>