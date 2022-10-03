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
            <tr>
                <th scope="row">1</th>
                <td>Mehedi</td>
                <td>Male</td>
                <td><a href="#">Show more</a></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mehedi</td>
                <td>Male</td>
                <td><a href="#">Show more</a></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mehedi</td>
                <td>Male</td>
                <td><a href="#">Show more</a></td>
            </tr>
        </tbody>
    </table>



</x-master>