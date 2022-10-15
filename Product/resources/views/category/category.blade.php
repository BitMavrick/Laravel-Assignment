<x-master>

    <x-slot name="title">
        List | Category
    </x-slot>

    <h2>Category List</h2>

    <a href="{{ route('category.create') }}"> <button type="button" class="btn btn-primary my-4">Add New</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Color</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $sl = 1 ?>

            @foreach ($categories as $category)
            <tr>
                <th class="align-middle" scope="row"><?= $sl++ ?></th>
                <td class="align-middle">{{ $category->category_name }}</td>
                <td class="align-middle">{{ $category->brand_id }}</td>
                <td class="align-middle">{{ $category->color_id }}</td>
                <td> <a href="{{ route('category.update', $category->id) }}"> <button type="button"
                            class="btn btn-primary mx-2">Update</button></a>
                    <a href="{{ route('category.delete', $category->id) }}"> <button type="button"
                            class="btn btn-danger" onclick="return confirm('Delete this category?')">Delete</button></a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

    <a href="#"> <button type="button" class="btn btn-warning my-4">Recycle Bin</button></a>

</x-master>