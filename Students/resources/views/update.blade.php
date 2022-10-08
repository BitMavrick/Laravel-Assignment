<x-master>

    <h2>Update student</h2>

    <a href="{{ route('students') }}"><button type="button" class="btn btn-secondary my-4">Go To List</button></a>


    <form action="{{ route('student.edit') }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $student->id }}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter name" value="{{old('name', $student->name )}}">
            @error('name')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <p>Enter date of birth</p>
            <input name="birth_date" class="form-control" type="date"
                value="{{ old('birth_date', $student->birth_date)}}">
            @error('birth_date')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <select name="nationality" class="form-select" aria-label="Default select example">
                <option selected disabled>Select Nationality</option>
                <option <?php if ($student->nationality == 'Bangladeshi') {
                            echo ("selected");
                        } ?> value="Bangladeshi">Bangladeshi</option>
                <option <?php if ($student->nationality == 'Indian') {
                            echo ("selected");
                        } ?> value="Indian">Indian</option>
                <option <?php if ($student->nationality == 'Pakistani') {
                            echo ("selected");
                        } ?> value="Pakistani">Pakistani</option>
            </select>
            @error('nationality')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <p>Select Gender</p>
            <div class="form-check">
                <input <?php if ($student->gender == 'Male') {
                            echo ("checked");
                        } ?> class="form-check-input" value="Male" type="radio" name="gender" id="flexRadioDefault1"
                    checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input <?php if ($student->gender == 'Female') {
                            echo ("checked");
                        } ?> class="form-check-input" value="Female" type="radio" name="gender" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>

            <div class="form-check">
                <input <?php if ($student->gender == 'Others') {
                            echo ("checked");
                        } ?> class="form-check-input" value="Others" type="radio" name="gender" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    Others
                </label>
            </div>
            @error('gender')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="my-3">
            <p>Select hobby: </p>
            <div class="form-check">
                <input <?php if ($student->hobby1 == 'Travelling') {
                            echo ("checked");
                        } ?> name="hobby1" class="form-check-input" type="checkbox" value="Travelling"
                    id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Travelling
                </label>
            </div>
            <div class="form-check">
                <input <?php if ($student->hobby2 == 'Read Books') {
                            echo ("checked");
                        } ?> name="hobby2" class="form-check-input" type="checkbox" value="Read Books"
                    id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Read Books
                </label>
            </div>

            <div class="form-check">
                <input <?php if ($student->hobby3 == 'Do Nothing') {
                            echo ("checked");
                        } ?> name="hobby3" class="form-check-input" type="checkbox" value="Do Nothing"
                    id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">
                    Do Nothing
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</x-master>