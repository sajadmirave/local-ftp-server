<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            color: #efefef;
        }
    </style>
</head>

<body>
    <h1>Hello There :D</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name='submit' value="upload">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];

            if ($fileError === 0) {
                // Specify the directory where you want to save the uploaded file
                $fileDestination = 'uploads/' . $fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "No file chosen.";
        }
    }
    ?>

    <br>
    <a href="./links.php">download links</a>

   

</body>

</html>