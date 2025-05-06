<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Shop</title>
</head>
<body>
    <h1>Jewelry Available at the Shop</h1>
    <ul>
        @foreach($jewelry as $id => $item)
            <li>
                <a href="{{ url('/jewelry/' . $id) }}">{{ $item['name'] }}</a> - ₹{{ number_format($item['price']) }}
            </li>
        @endforeach
    </ul>
</body>
</html>
