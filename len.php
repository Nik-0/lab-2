<?php
session_start();
if ($_SESSION['name'] == null) {
    header("Location:/index.php");
}
if ($_POST['language']) {
    $_SESSION['lang'] = $_POST['language'];
}
$log = $_SESSION['name'];

include_once 'dorova.php';
switch ($_SESSION['lang']) {
    case 'ru':
        echo '<h2 style="text-align: center;">Позвольте вас приветствовать!</h2> <h2 style="text-align: center;">' . $log . '</h2> <a href ="logout.php"><font color="blue" size="4"><p style="text-align: center;">Выйти</p></font></a>';
        break;
    case  'en':
        echo '<h2 style="text-align: center;">Yo!</h2> <h2 style="text-align: center;">' . $log . '</h2> <a href ="logout.php"><font color="blue" size="4"><p style="text-align: center;">Log out</p></font></a>';
        break;
    case  'ua':
        echo '<h2 style="text-align: center;"> Здоровенькі були!</h2>  <h2 style="text-align: center;">' . $log . '</h2> <a href ="logout.php"><font color="blue" size="4"><p style="text-align: center;">Вийти</p></font></a>';
        break;
    case  'it':
        echo '<h2 style="text-align: center;"> Ciao! </h2> <h2 style="text-align: center;">' . $log . '</h2> <a href ="logout.php"><font color="blue" size="4"><p style="text-align: center;">Disconnettersi</p></font></a>';
        break;
    case  '';
        echo '</h2> <a href ="logout.php"><font color="blue" size="4"><p style="text-align: center;">Вийди отсюда розбійник</p></font></a>';
        break;
}
?>