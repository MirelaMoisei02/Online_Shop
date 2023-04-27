<html>
    <head>
        <title>List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="small-container">
        <h1>Product List</h1>
        <a href="adm_welcome.php">&#8592;</a>
            <div class="row">
                    <?php 
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'shop_db');

                        $query = " SELECT * FROM `product_data`";
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
    </body>
</html>