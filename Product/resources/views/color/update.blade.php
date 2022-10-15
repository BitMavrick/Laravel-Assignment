<x-master>

    <x-slot name="title">
        Update | Color
    </x-slot>


    <h2>Update Color</h2>

    <a href="{{ route('color') }}"> <button type="button" class="btn btn-secondary my-4">colors</button></a>

    <form action="{{ route('color.edit') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $color->id }}">
        <div class="form-group">
            <label for="exampleInputEmail1">Color Name</label>
            <input name="color_name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $color->color_name }}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="exampleInputEmail2">Select Color</label>
            <input name="color_code" value="{{ $color->color_code }}" type="color" class="form-control"
                id="exampleInputEmail2" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

</x-master>