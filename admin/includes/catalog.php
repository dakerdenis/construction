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


            <!--элемент каталога---->
            <div class="catalog__element">
                <div class="catalog__element_wrapper">
                    <div class="catalog__element_image">
                        <img src="./includes/imgs/<?php echo $image ?>" alt="">
                    </div>

                    <div class="catalog__element_desc">

                        <div class="catalog__element__desc_container">
                            <!---название и цена--->
                            <div class="catalog__elementdesc_nameprice">
                                <div class="catalog_element_name"><?php echo $name ?></div>
                                <div class="catalog_element_price"><?php echo $price ?> AZN</div>
                            </div>
                            <!---тип и описание товара---->
                            <div class="catalog__element_typedesc">
                                <div class="catalog__element_type">Тип товара: <?php echo $type ?></div>
                                <div class="catalog__element_desctext">
                                    <p><?php echo $desc ?></p>
                                </div>
                            </div>
                        </div>


                        <div class="catalog__element__deleteedit">
                            <div class="catalog__element__edit">
                                <a href="./includes/edit.php?source=<?php echo $id?>">EDIT</a>
                            </div>
                            <div class="catalog__element__delete">
                                <a href="./includes/delete.php?source=<?php echo $id?>">DELETE</a>
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