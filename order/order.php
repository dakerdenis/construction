<?php


include './admin/vendor/db.php';

$item_id = $_GET['id'];

$query = "SELECT * FROM catalog WHERE id = '$item_id' ";
$select__catalog = mysqli_query($connection, $query);

if (isset($_POST['amount'])) {
    $_amount_items = $_POST['amount'];
} else {
    $_amount_items = 1;
}

?>

<div class="make_order_wrapper">

    <div class="make_order_container">
        
    </div>











<?php
while ($row = mysqli_fetch_assoc($select__catalog)) {
    $id     = $row['id'];
    $name   = $row['name'];
    $image  = $row['image'];
    $desc   = $row['description'];
    $type   = $row['type'];
    $price  = $row['price'];

    $total_price =  $price *  $_amount_items;


    $_SESSION["name"] = $name;
?>
    <p><?php echo $id; ?></p>
    <p><?php echo $name; ?></p>
    <p><?php echo $desc; ?></p>
    <p><?php echo $type; ?></p>
    <p><?php echo $_amount_items; ?></p>

    <p>Сумма к заказу: <?php echo $total_price; ?> AZN </p>


<?php
}
?>
</div>




