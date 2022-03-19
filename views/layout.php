<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table width="100%">
        <tr>
            <td width="20%" valign="top" align="center">
                <h1>
                    <img src="img/logo.png" width="36px" alt="Логотип">
                    <i><u>Супер Блог</u></i>
                </h1>
            </td>
            <td width="60%" align="center">
                <img src="img/shapka-sayta.jpg" alt="Шапка" height="150px">
            </td>
            <td width="20%">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td width="20%" valign="top">
                <h3>
                    <img src="img/arrow.png" alt="Стрелка" width="30px">
                    <a href="?c=main&a=index">Главная</a>
                </h3>
                <h3>
                    <img src="img/arrow.png" alt="Стрелка" width="30px">
                    <a href="?c=articles&a=index&catg=популярные">Популярные</a>
                </h3>
                <h3>
                    <img src="img/arrow.png" alt="Стрелка" width="30px">
                    <a href="?c=articles&a=index&catg=животные">Животные</a>
                </h3>
                <h3>
                    <img src="img/arrow.png" alt="Стрелка" width="30px">
                    <a href="?c=articles&a=index&catg=растения">Растения</a>
                </h3>
                <h3>
                    <img src="img/arrow.png" alt="Стрелка" width="30px">
                    <a href="?c=contact">Контакты</a>
                </h3>
            </td>
            <td width="60%" align="center" valign="top">
                <?php include_once "views/{$controller}/$action.php"; ?>
            </td>
            <td width="20%">

            </td>
        </tr>
    </table>
</body>
</html>
