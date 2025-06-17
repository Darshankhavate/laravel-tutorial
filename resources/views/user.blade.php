 <div>
    <h1>User Login</h1>
    @if(session('message'))
    <span class="sucess-message"> {{ session('message') }}</span>
    &@endif
   {{ session()->reflash() }}
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter Your email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter Your phone number">
        <br>
        <br>
        <button type="submit">Add New User</button>
    </form>
</div>
