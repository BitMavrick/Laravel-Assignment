<x-master>

    <x-slot name="title">
        New | Color
    </x-slot>


    <h2>Add a new Color</h2>

    <a href="{{ route('category') }}"> <button type="button" class="btn btn-secondary my-4">Categories</button></a>

    <form action="{{ route('category.add') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $category->id }}">

        <div class="form-group">
            <label for="exampleFormControlSelect2">Select Color</label>
            <select name="color_id" class="form-control" id="exampleFormControlSelect2">
                <option selected disabled>Select color</option>
                @foreach ($colors as $color)
                <option value="{{ $color->id }}">{{$color->color_name}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

</x-master>