<x-master>

    <x-slot name="title">
        New | Color
    </x-slot>


    <h2>Create Color</h2>

    <a href="{{ route('color') }}"> <button type="button" class="btn btn-secondary my-4">Brands</button></a>

    <form action="{{ route('color.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Color Name</label>
            <input name="color_name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter color name">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Select Color</label>
            <input name="color_code" type="color" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

</x-master>