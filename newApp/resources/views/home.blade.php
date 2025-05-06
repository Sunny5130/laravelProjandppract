<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h2>Welcome to Homepage</h2>

@if(Cookie::get('user_name'))
    <p>Hello, {{ Cookie::get('user_name') }}!</p>
@else
    <p>No user cookie found.</p>
@endif

<form method="POST" action="/delete-cookie">
    @csrf
    <button type="submit">Delete Cookie</button>
</form>

</body>
</html>
