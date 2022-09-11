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

                <div class="item_number">
                    Код товара: <?php echo $id; ?>
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
                <div class="item__order__desc_wrapper">
                    <div class="item__order_desc"><?php echo $price ?> AZN</div>
                    <div class="item__order_amount"> Количество:
                        <label class="select" for="slct">
                            <select id="slct" required="required">
                                <option value="" disabled="disabled" selected="selected">1</option>
                                <option value="#">1</option>
                                <option value="#">2</option>
                                <option value="#">3</option>
                                <option value="#">4</option>
                                <option value="#">5</option>
                                <option value="#">6</option>
                                <option value="#">7</option>
                            </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                        </label>
                        <!-- SVG Sprites-->
                        <svg class="sprites">
                            <symbol id="select-arrow-down" viewbox="0 0 10 6">
                                <polyline points="1 1 5 5 9 1"></polyline>
                            </symbol>
                        </svg>
                    </div>
                    <div class="item__order_desc-text">
                        Свяжитесь с нами и выберите один из 4х методов доставки
                    </div>
                </div>
                <div class="item__makeorder">
                    <a href="./catalog.php?catalog=order">Заказать</a>
                </div>
            </div>
        </div>


        <!--Дополнительная информация об элементе--->
        <div class="item__additional_info">
            <span>Дополнительное описание товара:</span>
            <p><?php echo $desc; ?></p>
        </div>
    </div>
    <div class="recomendation__block">
        <div class="recomendation__block_name">
            Похожие товары:
        </div>
        <div class="recomendation__block__wrapper">
            <?php
            $query = "SELECT * FROM catalog LIMIT 3";
            $select__catalog = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select__catalog)) {
                $id     = $row['id'];
                $name   = $row['name'];
                $image  = $row['image'];
                $desc   = $row['description'];
                $type   = $row['type'];
                $price  = $row['price'];
            ?>
                <!---Элемент-->
                <div class="main__catalog__element">
                    <div class="main__catalog_element_wrapper">
                        <!---фото--->
                        <div class="main__catalog_element_img">
                            <img width="100" src="./admin/includes/imgs/<?php echo $image; ?>" alt="">
                        </div>
                        <!--Описание и цена-->

                        <div class="main__catalog_element_desc">
                            <div class="main__catalog_element_desc_wrapper">
                                <!--название -->
                                <div class="main__catalog_element_desc-name">
                                    <div class="_desc-name-p">
                                        <?php echo $name; ?>
                                    </div>
                                    <div class="_desc-name-num">
                                        код товара: <?php echo $id; ?>
                                    </div>
                                </div>

                                <!--Описание-->
                                <div class="main__catalog_element_desc-desc">
                                    <p><?php echo $desc; ?></p>
                                </div>

                                <!--Кнопка подробнеее и кнопка купить--->
                                <div class="main__catalog_element_desc-buy_price">
                                    <a href="./catalog.php?catalog=item&item=<?php echo $id; ?>" class="element__desc-buy">
                                        Купить
                                    </a>
                                    <div class="element__desc-price">
                                        <?php echo $price; ?> AZN
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>