<x-master>

    <x-slot name="title">
        List | Brand
    </x-slot>


    <h2>Brand List</h2>

    <a href="#"> <button type="button" class="btn btn-primary my-4">Add New</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $sl = 1 ?>

            <tr>
                <th class="align-middle" scope="row"><?= $sl++ ?></th>
                <td class="align-middle">Daraz</td>
                <td class="align-middle">10 Oct 2022</td>
                <td> <a href="#"> <button type="button" class="btn btn-primary mx-2">Update</button></a>
                    <a href="#"> <button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>

        </tbody>
    </table>

    <a href="#"> <button type="button" class="btn btn-warning my-4">Recycle Bin</button></a>

</x-master>