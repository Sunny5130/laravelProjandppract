<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/contact">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" value="{{ old('email') }}"><br><br>

        <label for="message">Message:</label><br>
        <textarea name="message" id="message">{{ old('message') }}</textarea><br><br>

        <button type="submit">Send Message</button>
    </form>
</body>
</html>
