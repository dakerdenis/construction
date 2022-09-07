<?php
    include '../vendor/db.php';
    if(isset($_GET['source'])){
        $id = $_GET['source'];

       $query =  "DELETE FROM catalog WHERE `catalog`.`id` = {$id}" ;

       $delete__element = mysqli_query($connection, $query);

       echo $delete__element;

       header('Location: ../admin.php?source=catalog');
       

    }

?>