<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- form for upload 2 filew -->
<form action="/upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file1" />
    <input type="file" name="file2" />
    <input type="submit" value="Upload" />
    
</body>
</html>