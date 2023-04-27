<?php
require 'config.php';
if(!empty($_SESSION["id_a"])){
    header("Location: adm_welcome.php");
}
if(isset($_POST["submit"])){
    $username_a = $_POST["username_a"];
    $password_a = $_POST["password_a"];
    $result = mysqli_query($conn, "SELECT * FROM adm_data WHERE username_a = '$username_a'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password_a == $row["password_a"]){
            $_SESSION["login"] = true;
            $_SESSION["id_a"] = $row["id_a"];
            header("Location: adm_welcome.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
    }
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

	<br><br><br><br><br><br>

	<!----------account----------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <a href="login.php"><span>Login</span></a>
                            <a href="registration.php"><span>Register</span></a>
                        </div>
                        <h3>Admin</h3>
                        <form id="RegForm" method="post" autocomplete="off">
                            <input type="text" placeholder="Username" name="username_a" id="username_a" required value="">
                            <input type="password" placeholder="Password" name="password_a" id="password_a" required value="">
                            <button type="submit" class="btn" name="submit">Login</button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>