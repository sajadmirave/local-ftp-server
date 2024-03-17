<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./main-style.css">
</head>

<body>
    

    <h1>Hello There :D</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name='submit' value="upload">
    </form>

    <?php
    ini_set('upload_max_filesize', '200MG');
    ini_set('post_max_size', '200M');

    if (isset ($_POST['submit'])) {
        if (isset ($_FILES['file'])) {
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
                echo "Error uploading file. Error code: $fileError";
            }
            
        } else {
            echo "No file chosen.";
        }
    }
    ?>

    <br>
    <div style="display:flex;">
        <a href="./links.php" style="margin-right:10px;">download links</a>
        <a href="./setting.php">setting</a>
    </div>


</body>

</html>