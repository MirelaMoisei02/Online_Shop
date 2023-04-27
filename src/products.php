<html>
    <head>
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

	<br><br><br><br><br><br><br><br>

    <!-------products---------->
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="small-container">
        <h2 class="title">Products</h2>
            <div class="row">
                    <?php 
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'shop_db');

                        $query = " SELECT * FROM `product_data` ORDER BY id_p DESC ";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                         ?>

                        <div class="col-4">
                        <a href= <?php echo $row['link_p']; ?> >
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image_p']).'" alt="Image" >'; ?> </a><br>
                             <?php echo $row['name_p']; ?> <br>
                             <?php echo $row['price_p']; ?> <br>
                             </div>
                            
                        <?php
                        }
                    ?>
                        
            </div>
            </div>
        </form>
        
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