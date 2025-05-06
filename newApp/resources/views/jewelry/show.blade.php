<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item['name'] }}</title>
</head>
<body>
    <h1>{{ $item['name'] }}</h1>
    <p><strong>Price:</strong> ₹{{ number_format($item['price']) }}</p>
    <p><strong>Description:</strong> {{ $item['description'] }}</p>
    <a href="{{ url('/jewelry') }}">Back to Jewelry List</a>
</body>
</html>