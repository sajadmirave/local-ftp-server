<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>download links</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');

        body {
            height: 100vh;
            background: blueviolet;
            color: #fff;
            font-weight: 500;
            font-family: "Fredoka", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: column;
        }


        a {
            color: #000;
        }

        .box {
            background: #fff;
            width: 800px;
            height: 550px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .box a {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="box">

        <?php
        $files = scandir('uploads/');
        $files = array_diff($files, array('.', '..'));

        foreach ($files as $link) {
            echo "<a href='./uploads/$link' download>$link</a>";
            echo "<br/>";
        }
        ?>
    </div>
</body>

</html>