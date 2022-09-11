<?php


include './admin/vendor/db.php';

$item_id = $_GET['id'];

$query = "SELECT * FROM catalog WHERE id = '$item_id' ";
$select__catalog = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select__catalog)) {
    $id     = $row['id'];
    $name   = $row['name'];
    $image  = $row['image'];
    $desc   = $row['description'];
    $type   = $row['type'];
    $price  = $row['price'];
?>
    <p><?php echo $id; ?></p>
    <p><?php echo $name; ?></p>
    <p><?php echo $desc; ?></p>
    <p><?php echo $type; ?></p>


<?php
}
?>


