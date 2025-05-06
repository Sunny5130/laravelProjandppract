<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>

<form action="adduser" method="POST">
    @csrf

    <div class="input-wrapper">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter username">
        <span style="color:red">@error('username'){{ $message }}@enderror</span>
    </div>

    <div class="input-wrapper">
        <label>Email:</label>
        <input type="text" name="email" placeholder="Enter User email">
        <span style="color:red">@error('email'){{ $message }}@enderror</span>
    </div>

    <div class="input-wrapper">
        <label>City:</label>
        <input type="text" name="city" placeholder="Enter User city">
        <span style="color:red">@error('city'){{ $message }}@enderror</span>
    </div>

    <div class="input-wrapper">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter password">
        <span style="color:red">@error('password'){{ $message }}@enderror</span>
    </div>

    <div class="input-wrapper">
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" placeholder="Confirm password">
    </div>

    <button type="submit">Submit</button>
</form>

</body>
</html>
