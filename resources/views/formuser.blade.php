<div>
    <h1>User Form</h1>
    <div>
        <form action="/formuser" method="POST">
            @csrf
            <div class="name">
                <label for="name">Name:-
                    <input type="text" class="name" id="name" name="name"  placeholder="Enter Your Name">
                </label>
            </div>
            <div class="email">
                <label for="email">E-mail-id:-
                    <input type="email" class="email" id="email" name="email" placeholder="Enter Your Valid Email-id">
                </label>
            </div>
           <div class="phone">
                <label for="phone">Phone Number:-
                    <input type="text" class="phone" id="phone" name="phone" placeholder="Enter Your active Phone Number">
                </label>
            </div>
           <button type="submit">Submit</button>

        </form>
    </div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
