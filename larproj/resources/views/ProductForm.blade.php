<!DOCTYPE html>
<html lang="en">
<head>
    <style>
fieldset
{
    width:250px;
}

    </style>
</head>
<body>
<fieldset>
<legend>Add Products</legend>
<form action="/products" method="POST">
{{-- <form action="/products/store" method="POST"> --}}
    @csrf
<input type="text" name="name" placeholder="Enter Name"><br>
<input type="text" name="description" placeholder="Enter the description"><br>
<input type="number" name="price" placeholder="Price"><br>
<input type="submit" name="submit" value="Add"><br>
</form>
</fieldset>
</body>
</html>