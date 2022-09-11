<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Каталог Продукции</title>
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./style/catalog.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="main_wrapper">
        <!-- * Block with header and address & phone bar-->
        <div class="header__wrapper">
            <!--Adress Block-->
            <div class="address_phone_block">
                <div class="address_phone_block-wrapper">
                    <!--Address and block in map-->
                    <div class="address_block">Atomoglan Rzayev 228, Sumqayit</div>
                    <!--Phone block-->
                    <div class="phone__block">
                        <div class="phone__block_mobile">
                            <span>mobile:</span> + 380 (69) 323 84 38
                        </div>
                        <div class="phone__block_mobile">
                            <span>Home:</span> + 380 (69) 323 84 38
                        </div>
                    </div>
                    <!--Phone block-->
                </div>
            </div>

            <!--Header & Logo BLock-->
            <div class="header__block">
                <div class="header__block_wrapper">
                    <!--Logo BLock-->
                    <a href="./index.html" class="header_logo">
                        <!--Logotype-->
                        <div class="header_logo_img"></div>
                        <!--Company name-->
                        <div class="header_logo_name">LOGO</div>
                    </a>

                    <!--Navigation block-->
                    <div class="navigation_header">
                        <div class="nav__block">
                            <a href="#" class="nav__block-a">каталог</a>
                        </div>
                        <div class="nav__block">
                            <a href="#" class="nav__block-a">о нас</a>
                        </div>
                        <div class="nav__block">
                            <a href="#" class="nav__block-a">как зазкать?</a>
                        </div>
                        <div class="nav__block">
                            <a href="#" class="nav__block-a">доставка и оплата</a>
                        </div>
                        <div class="nav__block">
                            <a href="#" class="nav__block-a">связь</a>
                        </div>
                    </div>


                    <!---mobile only burger--->
                    <div class="mobile__only__burger_menu">
                        <div class="burger-menu">
                            <a href="" class="burger-menu_button">
                                <spun class="burger-menu_lines"></spun>
                            </a>
                            <nav class="burger-menu_nav">
                                <a href="#section-1" class="burger-menu_link">каталог</a>
                                <a href="#section-2" class="burger-menu_link">о нас</a>
                                <a href="#section-3" class="burger-menu_link">как зазкать?</a>
                                <a href="#section-4" class="burger-menu_link">доставка и оплата</a>
                                <a href="#section-5" class="burger-menu_link">связь</a>

                            </nav>
                            <div class="burger-menu_overlay"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_GET['catalog'])) {
            $catalog = $_GET['catalog'];
        } else {
            $catalog = '';
        }
        switch ($catalog) {
            case 'item';
                include './catalog/item.php';
                break;

            case 'cat';
                include './catalog/catalog_page.php';
                break;
            case 'order';
                include './order/order.php';
                break;

            default:
                include './catalog/catalog_page.php';
                break;
        }
        ?>
        <!--*Footer blcock for page-->
        <div class="footer__wrapper">
            <!--footer content-->
            <div class="footer__content">
                <!--footer лого---->
                <div class="footer__logo__container">
                    <div class="footer__logo_block">
                        <img src="./img/footer__logo.svg" alt="">
                        <p>LOGO</p>
                    </div>
                </div>
                <!--footer navigation--->
                <div class="footer__navigation">


                    <div class="footer__navigation_name__container">
                        <p>Навигация</p>
                        <div class="footer__navigation_name_border">

                        </div>
                    </div>



                    <div class="footer__navigation__list">
                        <div class="footer__navigation__list_element">Каталог</div>
                        <div class="footer__navigation__list_element">О нас</div>
                        <div class="footer__navigation__list_element">Как заказать ?</div>
                        <div class="footer__navigation__list_element">Доставка и оплата</div>
                        <div class="footer__navigation__list_element">Связь</div>
                        <div class="footer__navigation__list_element">Политика конфиденциальности</div>
                    </div>
                </div>

                <!---footer best sellers----->
                <div class="footer__best_sellers">
                    <div class="footer__navigation_name__container">
                        <p>Навигация</p>
                        <div class="footer__navigation_name_border">

                        </div>
                    </div>

                    <div class="footer__bestsellers__wrapper">
                        <img src="./img/footer__best.svg" alt="" srcset="">
                        <img src="./img/footer__best.svg" alt="" srcset="">
                        <img src="./img/footer__best.svg" alt="" srcset="">
                    </div>
                </div>
            </div>
            <!--created by and all rights reserved-->
            <div class="footer__legacy_wrap">
                <div class="footer__element"></div>
                <div class="footer__element">© 2022. ООО "КАМУШКИН" - Все права защищены.</div>
                <div class="footer__element2">


                    <div class="container">
                        <!-- code here -->
                        <a class="post" href="https://daker.website">
                            <h2 class="post-title">created by &nbsp; <span>DAKER Studio</span></h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Меню бургер
        // Меню бургер
        // Меню бургер
        function burgerMenu(selector) {
            let menu = $(selector);
            let button = menu.find('.burger-menu_button', '.burger-menu_lines');
            let links = menu.find('.burger-menu_link');
            let overlay = menu.find('.burger-menu_overlay');

            button.on('click', (e) => {
                e.preventDefault();
                toggleMenu();
            });

            links.on('click', () => toggleMenu());
            overlay.on('click', () => toggleMenu());

            function toggleMenu() {
                menu.toggleClass('burger-menu_active');

                if (menu.hasClass('burger-menu_active')) {
                    $('body').css('overlow', 'hidden');
                } else {
                    $('body').css('overlow', 'visible');
                }
            }
        }

        burgerMenu('.burger-menu');
    </script>
</body>

</html>