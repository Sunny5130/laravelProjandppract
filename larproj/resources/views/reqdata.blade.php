<form method="POST" action="/register">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="checkbox" name="agree" value="1"> Agree to terms
    <button type="submit">Register</button>
</form>
