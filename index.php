<?php
$password = file_get_contents('auth');

if (!empty($password) && !isset($_COOKIE['login']) ) {
    include ('./pages/login.php');
}else{
    include('./pages/upload.php');
}
?>