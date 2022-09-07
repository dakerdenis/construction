<?php

    if(isset($_GET['source'])){
        $id = $_GET['source'];

       $query =  "DELETE FROM catalog WHERE `catalog`.`id` = {$id}" ;

       $delete__element = mysqli_query($connection, $query);

    }

?>