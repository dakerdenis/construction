<?php
    include '../vendor/db.php';

    if(isset($_POST['create_element'])){
       $name = $_POST['name'];
       $type = $_POST['type'];
       $price = $_POST['price'];
       $description = $_POST['description'];

       $file = $_FILES['file']['name'];
       $post_image_temp = $_FILES['file']['tmp_name'];


       move_uploaded_file($post_image_temp, "./imgs/$file");

       $query = " INSERT INTO `catalog` ( `name`, `image`, `description`, `type`, `price`)  
       VALUES ('{$name}','{$file}','{$description}','{$type}','{$price}')";

        echo $query;
        $addnew__element = mysqli_query($connection, $query);

        header('../admin.php');
    }

?>