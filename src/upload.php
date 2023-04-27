<?php
if(isset($_POST['isubmit']) && isset($_FILES['my_image'])){
    include "config.php";
    
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    $my_image = $_POST['my_image'];
    $name_product = $_POST['name_product'];
    $price_product = $_POST['price_product'];
    $amount_product = $_POST['amount_product'];

    if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
            ///
            $query = "INSERT INTO product_data(image_p, name_p, price_p, amount_p) VALUES('$new_img_name', ' $name_product', '$price_product', '$amount_product')";
            //$sql = "INSERT INTO product_data(image_p,name_p,price_p,amount_p) VALUES('$my_image',' $name_product','$price_product','$amount_product')";
            mysqli_query($conn, $query);
            header("Location: adm_welcome.php");
    }else{
        $em = "error";
        header("Location: adm_welcome.php?error=$em");
    }

}else{
    header("Location: adm_welcome.php");
}

?>