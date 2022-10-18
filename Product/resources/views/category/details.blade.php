<x-master>

    <x-slot name="title">
        Details | Product
    </x-slot>

    <h2>Product Details</h2>

    <a href="{{ route('category') }}"> <button type="button" class="btn btn-primary my-4">Products</button></a>

    <h3>Product Name : {{ $category->category_name }}</h3>
    <br>
    <h3>Brand Name : {{ $category->brand->brand_name }}</h3>
    <br>
    <h3>Availabe Colors : N/A</h3>


    <a href="#"> <button type="button" class="btn btn-warning my-4 mr-3">Update details</button></a>
    <a href="{{ route('category.addColor', $category->id) }}"> <button type="button" class="btn btn-primary my-4">Add
            color</button></a>

</x-master>