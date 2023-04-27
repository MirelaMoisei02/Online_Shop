<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display: flex; justify-content: center; align-items: center; flex-direction: column; min-height: 100vh">
    <h1>INSERT PRODUCTS</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data" >
        <input type="file" name="my_image">
        <input type="text" name="name_product" placeholder="Product Name">
        <input type="text" name="price_product" placeholder="Price">
        <input type="text" name="amount_product" placeholder="Amount">
        <input type="submit" name="isubmit" value="Upload" class="btn">
    </form>
    <a href="adm_welcome.php" style="display: flex; justify-content: left; align-items: left; flex-direction: column;";>&#8592;</a>
</body>
</html>