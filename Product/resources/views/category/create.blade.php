<x-master>

    <x-slot name="title">
        New | Product
    </x-slot>


    <h2>Create Product</h2>

    <a href="{{ route('category') }}"> <button type="button" class="btn btn-secondary my-4">Categories</button></a>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input name="category_name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter product name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Brand</label>
            <select name="brand_id" class="form-control" id="exampleFormControlSelect1">
                <option selected disabled>Select brand</option>
                @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{$brand->brand_name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

</x-master>