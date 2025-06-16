<!-- <div>
    <h1>User Form</h1>
    <form action='/user' method="get">
        <div>
            <input type="text" class="name" name="name" id="name" placeholder="Enter Your Name">
        </div>
        <br>
         <div>
            <input type="password" class="password" name="password" id="password" placeholder="Enter Your password">
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>-->
<div> 
    <h1>User Form</h1>
    <form action='/user' method="post">
        <input type="hidden" name="_method" vlaue="DELETE">
        @csrf
        <div>
            <input type="text" class="name" name="name" id="name" placeholder="Enter Your Name">
        </div>
        <br>
         <div>
            <input type="password" class="password" name="password" id="password" placeholder="Enter Your password">
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>
