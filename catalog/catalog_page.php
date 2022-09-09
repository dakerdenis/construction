        <!--Контейнер каталога-->
        <!--* Block Catalog with name & information & photo-->
        <div class="catalog__wrapper">
            <!--catalog desc & name -->
            <div class="catalog__name_desc">
                <div class="catalog__name_desc_wrapper">
                    <!--Catalog name-->
                    <div class="catalog_name">
                        <p class="catalog_name-p">КАТАЛОГ</p>
                    </div>

                    <!--Catalog desc-->
                    <div class="catalog__desc">
                        <p class="catalog__desc-p">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                            ipsa excepturi veritatis quam cum ad et culpa at maiores,
                            doloremque, sequi ipsum sapiente facere, voluptatem repellat
                            tempore ut? Consectetur, atque. Lorem ipsum dolor sit amet
                            consectetur, adipisicing elit. Eos ipsa excepturi veritatis q
                        </p>
                    </div>
                </div>
            </div>
            <!---сортировка--->
            <div class="catalog__sortby">
                <div class="sortby_desc">
                    Сортировка: 
                </div>
                <div class="sortby__price_low">
                    <a href="./catalog.php?sort_by=low_to_high">От дешевого к дорогому </a>
                </div>
                <div class="sortby__price">
                    <a href="./catalog.php?sort_by=high_to_low">От дорогого к дешевому</a>
                </div>
                <div class="sortby__default">
                    <a href="./catalog.php?sort_by=default">По умолчанию</a>
                </div>
            </div>


            <!--catalog items-->
            <div class="catalog__elements__wrapper">
                <?php
               include './admin/vendor/db.php';
               $sort_by ='';

      //         switch ($catalog) {
      //             case 'item';
      //                 include $query = "SELECT * FROM catalog";
      //                 break;

      //             case 'cat';
      //                 include './catalog/catalog_page.php';
      //                 break;

      //             default:
      //                 include './catalog/catalog_page.php';
      //                 break;
         //       }
         if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
         }


         switch ($sort_by){
            case 'low_to_high';
            $query = "SELECT * FROM `catalog` ORDER BY `catalog`.`price` ASC ";
            break;

            case 'high_to_low';
            $query = "SELECT * FROM `catalog` ORDER BY `catalog`.`price` DESC";
            break;

            case 'default';
            $query = "SELECT * FROM `catalog` ";
            break;

            default:
            $query = "SELECT * FROM `catalog` ";
            break;
         }


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