<div>
    <h1>Query Builder</h1>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email-Id</th>
            <th>Phone</th>
        </tr>
        @foreach($users as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
            </tr>
        @endforeach
    </table>

    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

</div>
