<x-master>

    <x-slot name="title">
        Update | Brand
    </x-slot>


    <h2>Update Brand</h2>

    <a href="{{ route('brand') }}"> <button type="button" class="btn btn-secondary my-4">Brands</button></a>

    <form action="{{ route('brand.edit') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $brand->id }}">
        <div class="form-group">
            <label for="exampleInputEmail1">Brand Name</label>
            <input name="brand_name" value="{{ $brand->brand_name }}" type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter brand name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

</x-master>