<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main-style.css">
</head>

<body>
    <?php
    $logedin = false;

    if ($logedin === false) {
        echo "
        <form  method='post'>
        <input type='text' placeholder='write ftp server password...' name='password'>
        <input type='submit' name='login' value='login'>
        </form>
        ";
    }
    

    if (isset ($_REQUEST['login'])) {

        $password = $_REQUEST['password'];

        if ($password === file_get_contents('auth')) {
            $logedin = true;
            // echo file_get_contents ('./pages/upload.php');
            // echo $logedin;
            setcookie('login',true);
            header('Location: http://localhost:8888/index.php');
        } else {

        }
    }
    ?>
</body>

</html>