<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>

    <link rel="stylesheet" href="../main-style.css">

    <style>
        #msg_box{
            text-align: center;
        }
    </style>
</head>

<body>


    <h1>Chat</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <textarea placeholder="write your message" name="message" id="" cols="30" rows="10"
            style="resize:none;"></textarea>
        <br>
        <input type="submit" name='submit' value="send">
    </form>

    <h2>messages: </h2>
    <?php
    ini_set('upload_max_filesize', '200MG');
    ini_set('post_max_size', '200M');

    if (isset ($_POST['submit'])) {
        $message = $_REQUEST['message'];

        $chatFile = fopen('../chat.txt', 'a');
        fwrite($chatFile, $message . PHP_EOL . '--------------------------------------' . PHP_EOL);
        fclose($chatFile);
    }

    // $messages = file_get_contents('../chat.txt');
    
    // foreach (explode(PHP_EOL, $messages) as $message) {
    //     print ($message . "<br/>");
    // }
    ?>

    <br>
    <div id="msg_box"></div>

    <script>
        const fetchMessages = () => {
            var xhr = new XMLHttpRequest();
            var url = "../chat.txt"; // specify the path to your file

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var fileContent = xhr.responseText;
                    console.log(fileContent)
                    document.getElementById("msg_box").innerText = "";
                    document.getElementById("msg_box").innerText = fileContent;
                }
            };

            xhr.open("GET", url, true);
            xhr.send();
        }

        document.addEventListener('DOMContentLoaded', function () {
            setInterval(() => {
                fetchMessages()
            }, 1000);
        })
    </script>

</body>

</html>