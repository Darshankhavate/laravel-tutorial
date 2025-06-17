<div>
    <h1>User Login</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name="user" placeholder="Enter Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Your Password">
        <br>
        <br>
        <button type="submit">login</button>
    </form>
    <!-- He who is contented is rich. - Laozi -->
</div>
