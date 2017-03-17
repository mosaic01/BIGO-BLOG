<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <input type="file" name="resouce">
        <input type="submit">
    </form>
</body>
</html>