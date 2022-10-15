<x-master>

    <x-slot name="title">
        New | Brand
    </x-slot>


    <h2>Create Brand</h2>

    <a href="{{ route('brand') }}"> <button type="button" class="btn btn-secondary my-4">Brands</button></a>

    <form action="{{ route('brand.store') }}" method="POST">
        @csrf
        <div class="form-group">


            <label for="exampleInputEmail1">Brand Name</label>
            <input name="brand_name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter brand name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

</x-master>