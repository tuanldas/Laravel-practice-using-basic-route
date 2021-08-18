<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="/dictionary" method="POST">
    <p>@csrf</p>
    <p>
        <input type="text" name="english" placeholder="English">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>
</html>
