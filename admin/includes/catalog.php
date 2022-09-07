<?php include './vendor/db.php'; ?>


<div class="catalog__block__wrapper">
    <div class="wrapper__container_add_sortby">
        <!--Добавить продукт-->
        <div class="container__addelement">
            <a href="./admin.php?source=add">Добавить Продукт</a>
        </div>
        <!--сортировка поиска--->
    </div>

    <div class="wrapper__elements__container">
        <?php

        $query = "SELECT * FROM catalog";
        $select__catalog = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select__catalog)) {
            $id     = $row['id'];
            $name   = $row['name'];
            $image  = $row['image'];
            $desc   = $row['description'];
            $type   = $row['type'];
            $price  = $row['price'];
        ?>

        <?php
        }
        ?>
        <!--элемент каталога---->
        <div class="catalog__element">
            <div class="catalog__element_wrapper">
                <div class="catalog__element_image">
                    <img src="./includes/imgs" alt="">
                </div>

                <div class="catalog__element_desc">

                    <div class="catalog__element__desc_container">
                        <!---название и цена--->
                        <div class="catalog__elementdesc_nameprice">
                            <div class="catalog_element_name">Название товара</div>
                            <div class="catalog_element_price">100 AZN</div>
                        </div>
                        <!---тип и описание товара---->
                        <div class="catalog__element_typedesc">
                            <div class="catalog__element_type">Тип товара: Кирпичи</div>
                            <div class="catalog__element_desctext">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, alias. Vero, officiis dignissimos, quas ab eveniet tenetur ad dolorem reiciendis iste qui nobis, facilis delectus earum explicabo neque minima nam.
                            </div>
                        </div>
                    </div>


                    <div class="catalog__element__deleteedit">
                        <div class="catalog__element__edit">
                            <a href="#">EDIT</a>
                        </div>
                        <div class="catalog__element__delete">
                            <a href="#">DELETE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>