<div>
    <h1>Add New User</h1>
  <!-- @if($errors->any())
    @foreach($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
        @endforeach 
    @endif -->

    <form action="fromuser" method="post">
        @csrf
        <div class="input-form">
            <input type="text" value="{{ old('name') }}" placeholder="Enter Name" name="name">
            <span style="color:red;">@error('name'){{ $message }}@enderror</span>
        </div>
        <div class="input-form">
            <input type="email" placeholder="Enter Email" value="{{ old('email') }}" name="email">
             <span style="color:red;">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="input-form">
            <input type="text" placeholder="Enter city" value="{{ old('city') }}" name="city">
             <span style="color:red;">@error('city'){{ $message }}@enderror</span>
        </div>
        <div>
            <h3>User Language</h3>
            <input type="checkbox" name="language" vlaue="PHP" id="language">
            <label for="PHP">PHP</label>.
            <input type="checkbox" name="language" vlaue="Python" id="language">
            <label for="Python">Python</label>
            <input type="checkbox" name="language" vlaue="Java" id="language">
            <label for="Java">Java</label>
        </div>

        <!-- <div>
            <h3>User Gender</h3>
            <input type="radio" name="gender" vlaue="Male" id="male">
            <label for="Male">Male</label>.
            <input type="radio" name="gender" vlaue="Female" id="femail">
            <label for="Female">Female</label>
            <input type="radio" name="gender" vlaue="Other" id="other">
            <label for="Other">Other</label>
        </div>
        <div>
            <h3>City</h3>
            <select name="city">
                <option value="sangli"></option>
                <option value="kolhapur">Kolhapur</option>
                <option value="satara">Satara</option>
                <option value="pune">Pune</option>
            </select>
        </div>
        <div>
            <h5>Age</h5>
        </div>
        <div></div>
            <input type="range" name="age" min="18" max="85">
        </div> -->
        <div>
            <button>Add new user</button>
        </div>
    </form>
</div>