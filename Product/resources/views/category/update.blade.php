<x-master>

    <x-slot name="title">
        Update | Product
    </x-slot>


    <h2>Update Product</h2>

    <a href="{{ route('category') }}"> <button type="button" class="btn btn-secondary my-4">Products</button></a>

    <form action="{{ route('category.edit') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $category->id }}">
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input name="category_name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $category->category_name }}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Brand</label>
            <select name="brand_id" class="form-control" id="exampleFormControlSelect1">
                <option selected disabled>Select brand</option>
                @foreach ($brands as $brand)
                <option <?php if ($category->brand_id == $brand->id) {
                            echo ('selected');
                        } ?> value="{{ $brand->id }}">{{$brand->brand_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Select Color</label>
            <select name="color_id" class="form-control" id="exampleFormControlSelect2">
                <option disabled>Select color</option>
                @foreach ($colors as $color)
                <option <?php if ($category->color_id == $color->id) {
                            echo ('selected');
                        } ?> value="{{ $color->id }}">{{$color->color_name}}</option>
                @endforeach

            </select>
        </div>


        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

</x-master>