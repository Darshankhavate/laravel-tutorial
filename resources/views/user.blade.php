 <div>
    <h1>User Login</h1>
    <form action="/form" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Your Password">
        <br>
        <br>
        <button type="submit">login</button>
    </form>
</div>
