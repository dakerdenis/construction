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
            <a href="./index.html">Главная </a> <span>&#8250;</span> <a href="./catalog.php">Каталог</a> <span>&#8250;</span>
            <p>Товар № <?php echo $id; ?></p>
        </div>

        <!---Блок элемента--->
        <div class="catalog_item_wrap">
            <!--блок картинки элемента-->
            <div class="item__imageblock">
                <div class="item__imageblock_image">
                    <img src="./admin/includes/imgs/<?php echo $image; ?>" alt="">
                </div>
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
                    Стоимость: <span><?php echo $price ?></span> AZN
                </div>
            </div>

            <!----->
            <div class="item__order_details">
                    <div class="item__order_desc">Доставка</div>
                    <div class="item__order_desc-text">
                        Свяжитесь с нами для осуществления заказа и доставки
                    </div>
            </div>
        </div>


        <!--Дополнительная информация об элементе--->
        <div class="item__additional_info">
            < >Дополнительное описание товара:</span>
            <p><?php echo $desc; ?></p>
        </div>
    </div>
</div>