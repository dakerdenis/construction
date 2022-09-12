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
        <form class="make_order__form" method="post">
            <div class="make_order__desc">
                Оформление заказа
            </div>
            <div class="make_order__text">
                Заполните форму и мы свяжемся с вами для дальнейшего обсуждения вашей покупки
            </div>

            <!--элемент формы-->
            <div class="make__order__form_element">
                <div class="make__order_element_desc">
                    Мобильный телефон
                </div>
                <input type="number" class="make__order_element_input">
            </div>
            <!--элемент формы-->
            <div class="make__order__form_element">
                <div class="make__order_element_desc">
                    Электронная почта
                </div>
                <input type="email" class="make__order_element_input">
            </div>
            <!--элемент формы-->
            <div class="make__order__form_element">
                <div class="make__order_element_desc">
                    Ваше имя
                </div>
                <input type="text" class="make__order_element_input">
            </div>
            <!--Вариант доставки---->
            <div class="order__variants_wrapper">
                <div class="order__variants_container">
                    <!--Вариант доставки--->
                    <div class="order_variant_block">
                        <label class="container">Самовывоз
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="order_variant_block">
                        <label class="container">Курьер
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="order_variant_block">
                        <label class="container">Почта
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
                        <!--Вариант оплаты---->

        </form>
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