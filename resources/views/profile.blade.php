<div>
    <h1>Profile Page</h1>
    @if(session('user'))
    <h1>Welcome, {{ session('user') }}</h1>
    @else
    <h1>No User found in session</h1>
    @endif
    <a href="login">login</a>
    <a href="logout">Logout</a>

    {{(session('allData')['password']) }}
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
