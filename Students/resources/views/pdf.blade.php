<h2>Students list</h2>


<table border="2">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $sl = 1 ?>
        @foreach ($students as $student)
        <tr>
            <th scope="row"><?= $sl++ ?></th>
            <td>{{$student->name}}</td>
            <td>{{$student->gender}}</td>
            <td><a href="{{ route('student.details', $student->id) }}">Show more</a></td>
        </tr>

        @endforeach
    </tbody>
</table>