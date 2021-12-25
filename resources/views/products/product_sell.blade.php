<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product_sell_data',$product->id) }}" method="post">
        @csrf
    <label>Enter Quantity</label>
    <input type="number" name="quantity">
    <button type="submit">Submit</button>
    </form>
</body>
</html>