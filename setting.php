<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setting</title>
    <link rel="stylesheet" href="./main-style.css">

</head>

<body>
    <h1>Set Password</h1>
    <form method="post">
        <input type="text" placeholder="password..." name="password">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if (isset ($_REQUEST['submit'])) {
        $password = $_REQUEST['password'];
        file_put_contents('auth', $password);
        echo 'password set successfuly...';
    }
    ?>
</body>

</html>