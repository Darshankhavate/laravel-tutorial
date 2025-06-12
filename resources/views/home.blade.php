<h1>This is a home page</h1>

<!-- @include('comman.header')
@include('comman.inner', ['page'=>'This is home page']) -->

<x-message-banner msg="User Login Sucessfully" class="sucess" />
<x-message-banner msg="User SignUp Sucessfully" class="sucess"/>
<br>
<br>

<x-message-banner msg="Password not correct please try again" class="error"/>
<x-message-banner msg="Your First warring" class="warring"/>

<style>
    .sucess {
        color: green;
        border-radius: 2px;
        background-color: lightblue;
        padding: 10px;
        display: inline-block;
        margin: 10px;
    }

    .error {
        color: red;
        border-radius: 2px;
        background-color: powderblue;
        padding: 10px;
        display: inline-block;
        margin: 10px;
    }

    .warring {
        color: orange;
        border-radius: 2px;
        background-color: lightyellow;
        padding: 10px;
        display: inline-block;
        margin: 10px;
    }
</style>

