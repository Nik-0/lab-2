<?php
session_start();
$log = $_POST['login'];
$pass = $_POST['password'];
$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat'],
];
foreach ($users as $human => $val) {
    if ($val['login'] == $log && $val['password'] == $pass) {
        $_SESSION['name'] = $log;
        $_SESSION['lang'] = $val['lang'];
    }
}
if ($_SESSION['name'] == $log) {
    header("Location:len.php");
} else {
    include_once 'index.php';
    echo " <h4 style=text-align:center;>Неправильный логин или пароль!</h4>";
    
}
exit;
?>
