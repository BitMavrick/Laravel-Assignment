<x-master>

    <x-slot name="title">
        List | Color
    </x-slot>


    <h2>Color List</h2>

    <a href="{{ route('color.create') }}"> <button type="button" class="btn btn-primary my-4">Add New</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Color Name</th>
                <th scope="col">Color Code</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $sl = 1 ?>

            @foreach ($colors as $color)
            <tr>
                <th class="align-middle" scope="row"><?= $sl++ ?></th>
                <td class="align-middle">{{ $color->color_name }}</td>
                <td class="align-middle" style="color: <?= $color->color_code; ?> ;">{{ $color->color_code }}
                </td>
                <td> <a href="{{ route('color.update', $color->id) }}"> <button type="button"
                            class="btn btn-primary mx-2">Update</button></a>
                    <a href="{{ route('color.delete', $color->id) }}"> <button type="button" class="btn btn-danger"
                            onclick="return confirm('Delete this color?')">Delete</button></a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

    <a href="#"> <button type="button" class="btn btn-warning my-4">Recycle Bin</button></a>

</x-master>