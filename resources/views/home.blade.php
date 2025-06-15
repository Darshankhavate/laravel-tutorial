<div>
    <h1>Student List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email-ID</th>
            <th>Phone</th>
        </tr>
        @foreach($data as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phne }}</td>
            </tr>
        @endforeach

    </table>


    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
