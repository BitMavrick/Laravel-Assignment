<x-master>

    <h2>Students list</h2>
    <a href="{{ route('create') }}"> <button type="button" class="btn btn-primary my-4">Add New</button></a>


    <table class="table">
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

    <a href="{{ route('create') }}"> <button type="button" class="btn btn-danger my-4">Recyle Bin</button></a>

</x-master>