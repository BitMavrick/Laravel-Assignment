<x-master>

    <h2>Recycle Bin</h2>
    <a href="{{ route('students') }}"><button type="button" class="btn btn-primary my-4">Go To List</button></a>


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
                <td>
                    <form action="{{ route('student.restore', $student->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger">Restore</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

    <a href="{{ route('create') }}"> <button type="button" class="btn btn-danger my-4">Restore all</button></a>

</x-master>