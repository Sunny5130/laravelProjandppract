<a href="{{ url('/home') }}">Home</a>
{{ URL::current() }}
{{ URL::previous() }}
<a href="{{ URL::to('/home') }}">Home1</a>



<a href="{{ route('dashboard1') }}">Dashboard</a>
<a href="{{ route('profile', ['id' => 1]) }}">Profile</a>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<img src="{{asset('images/test.jpg') }}" alt="Logo" height="100" width="100">

<a href="{{ secure_url('/secure-page') }}">Secure Page</a>


