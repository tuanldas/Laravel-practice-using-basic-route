<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/calculator" method="POST">
    <p>@csrf</p>
    <p>
        Product Description: <input type="text" name="description">
    </p>
    <p>
        List Price:<input type="text" name="list_price">
    </p>
    <p>
        Discount Percent:<input type="text" name="discount_percent"> %
    </p>
    <p>
        <button type="submit">Calculate Discount</button>
    </p>
</form>
</body>
</html>
