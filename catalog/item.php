<?php

include './admin/vendor/db.php';
$item_id = $_GET['item'];

$query = "SELECT * FROM catalog WHERE id = '$item_id' ";
$select__catalog = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select__catalog)) {
    $id     = $row['id'];
    $name   = $row['name'];
    $image  = $row['image'];
    $desc   = $row['description'];
    $type   = $row['type'];
    $price  = $row['price'];
}
?>
<div class="catalog_item_wrapper">
    <div class="catalog__item_container">
        <!---навигация--->
        <div class="catalog__item_desc">
            <a href="../catalog.php">Каталог</a> > Товар № <?php echo $id; ?>
        </div>

        <!---Блок элемента--->
        <div class="catalog_item_wrapper">
            <!--блок картинки элемента-->
            <div class="item__imageblock">
                <img src="./admin/includes/imgs/<?php echo $image;?>" alt="">
            </div>

            <!---блок информации о элементе-->
            <div class="item__description">
                <div class="item__name">
                    <?php echo $name; ?>
                </div>

                <div class="item__type">
                    Категория товара: <?php echo $type; ?>
                </div>

                <div class="item__price">
                    Стоимость: <?php echo $price ?>
                </div>
            </div>
        </div>
        <!--Дополнительная информация об элементе--->
        <div class="item__additional_info">
            <p>
                <?php echo $desc; ?>
            </p>
        </div>
    </div>
</div>