<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/index.php/user/upload" method="post" enctype="multipart/form-data">
        姓名<input type="text" name="name">
        头像<input type="file" name="pic" id="">
        {{csrf_field()}}
        <input type="submit" value="提交">
    </form>
</body>
</html>