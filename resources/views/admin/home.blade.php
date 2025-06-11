<div>
    <h1>Welcome to the Admin Home Page</h1>
    <h1>{{ $name }}</h1>
    <!-- <h1>{{ rand() }}</h1> -->

    <h1>{{ $user[0] }}</h1>
    @if($name=='Darshan')
        <h1>This is  Darsan!</h1>
    @elseif($name== 'sammed');
    <h1>This is sammed</h1>
    @else
        <h1>Welcome, Guest!</h1>
    @endif

    <div>
       @foreach($user as $users)
            <h4>{{ $users }}</h4>
        @endforeach
    </div>
    <div>
        @for($i=0; $i<10; $i++)
            <h4>{{ $i }}</h4>
        @endfor
    </div>
</div>
