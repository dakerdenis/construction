<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../style/style.css">
    <!--ADMIN PANEL styles-->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="admin__panel__wrapper">
        <div class="admin__panel__block">
            <div class="admin__panel__logo">

            </div>
            <div class="admin__panel__name">
                Site firm-name
            </div>
            <form action="./vendor/login.php" class="admin__panel__form">
                <div class="admin_input__block">
                    <div class="admin_input_desc">Username:</div>
                    <div class="admin_input_input">
                        <input type="text" name="email" id="email">
                    </div>
                </div>

                <div class="admin_input__block">
                    <div class="admin_input_desc">Password:</div>
                    <div class="admin_input_input">
                        <input type="password" name="password" id="password">
                    </div>
                </div>

                <div class="admin_input_block">
                    <div class="admin_input_submit">
                        <input type="submit" value="Войти">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>