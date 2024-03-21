<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Network Tools</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');

body {
    height: 100vh;
    /* background: blueviolet; */
    background: #f52e93;
    color: #fff;
    font-weight: 500;
    font-family: "Fredoka", sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-flow: column;
}


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* font-family: "Poppins", sans-serif; */
}

.container {
    height: 100vh;
    width: 100%;
    align-items: center;
    display: flex;
    justify-content: center;
    flex-flow: column;
    /* background-color: #fcfcfc; */
}

.card {
  border-radius: 10px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
  width: 600px;
  height: 260px;
  background-color: #ffffff;
  padding: 10px 30px 40px;
}

@media screen and (max-width:500px) {
    .card {
  border-radius: 10px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
  width: 370px;
  height: 260px;
  background-color: #ffffff;
  padding: 10px 30px 40px;
}
}

.card h3 {
  font-size: 22px;
  font-weight: 600;
  
}

.drop_box {
  margin: 10px 0;
  padding: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  border: 3px dotted #a3a3a3;
  border-radius: 5px;
}

.drop_box h4 {
  font-size: 16px;
  font-weight: 400;
  color: #2e2e2e;
}

.drop_box p {
  margin-top: 10px;
  margin-bottom: 20px;
  font-size: 12px;
  color: #a3a3a3;
}

.btn {
  text-decoration: none;
  background-color: #005af0;
  color: #ffffff;
  padding: 10px 20px;
  border: none;
  outline: none;
  transition: 0.3s;
  cursor: pointer;
}

.btn:hover{
  text-decoration: none;
  background-color: #ffffff;
  color: #005af0;
  padding: 10px 20px;
  border: none;
  outline: 1px solid #010101;
}
.form input {
  margin: 10px 0;
  width: 100%;
  background-color: #e2e2e2;
  border: none;
  outline: none;
  padding: 12px 20px;
  border-radius: 4px;
}


    </style>
</head>
<body>
<div class="container">
        <h1 style="margin: 10px;">Local Network Tools🔨</h1>
        <div class="card">
            <h3>Upload Files</h3>
            <div class="drop_box">
                <header>
                    <h4>Select File here</h4>
                </header>
                <p>All Files Supported...</p>
                <input type="file" id="fileID" style="display:none;">
                <div class="row" style="display: flex;">
                    <button class="btn" style="margin-right: 10px;" onclick="chooseFile()">Choose File</button>
                    <button class="btn" onclick="upload()">Upload</button>
                </div>
            </div>
            <a href="{{route('file.download.links')}}">Download Links</a>
        </div>
    </div>

    <script>
        function chooseFile() {
            document.getElementById('fileID').click();
        }

        function upload() {
            var fileInput = document.getElementById('fileID');
            var file = fileInput.files[0];
            var formData = new FormData();
            formData.append('file', file);

            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    alert('file successfuly uploaded...');
                }
            };
            xmlHttp.open("POST", "{{ route('upload.files') }}");
            xmlHttp.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xmlHttp.send(formData);
        }
    </script>
</body>
</html>