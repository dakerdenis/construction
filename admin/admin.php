<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link rel="stylesheet" href="../style/style.css">

    <!--admin panel styles-->
    <link rel="stylesheet" href="./admin.css">
</head>

<body>
    <div class="admin__panel__wrapper">
        <!-- header admin panel-->
        <div class="admin_panel_header">
            <div class="admin_panel_headerwrapper">
                <!--admin logo--->
                <div class="admin__panel__logo">
                    <div class="admin_logo"></div>
                    <div class="admin__pagename">Firm name_logo</div>
                </div>

                <!--admin page login-->
                <div class="admin__panel_loginpanel">

                    <div class="admin__panel_username">Admin</div>
                    <div class="admin__panel_login">
                        <a href="#">Выйти</a>
                    </div>
                </div>

            </div>
        </div>


        <div class="admin_content_navigation">
            <div class="adminpanel__leftblock">
                <div class="left__block_wrapper">
                    <div class="leftblock__element">
                        <a href="./admin.php?source=catalog">Каталог</a>
                    </div>
                    <div class="leftblock__element">
                        <a href="./admin.php?source=main">Главная страница</a>
                    </div>
                </div>
                <div class="left_block__bottomcontainer">
                    Lorem
                </div>
            </div>


            <div class="admin_content__container">


                <?php
                if (isset($_GET['source'])) {
                    $source = $_GET['source'];
                } else {
                    $source = '';
                }
                switch ($source) {
                    case 'catalog';
                        include './includes/catalog.php';
                        break;

                        case 'main';
                        include './includes/main.php';
                        break;

                        case 'add';
                        include './includes/add_element.php';
                        break;


                    default:
                        include './includes/main.php';
                        break;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>