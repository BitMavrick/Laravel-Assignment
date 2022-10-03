<x-master>

    <h2>Create New</h2>

    <a href="{{ route('students') }}"><button type="button" class="btn btn-secondary my-4">Go To List</button></a>


    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter name">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
            <p>Enter date of birth</p>
            <input name="birth_date" class="form-control" type="date">
        </div>

        <div class="mb-3">
            <select name="nationality" class="form-select" aria-label="Default select example">
                <option selected disabled>Select Nationality</option>
                <option value="Bangladeshi">Bangladeshi</option>
                <option value="Indian">Indian</option>
                <option value="Pakistani">Pakistani</option>
            </select>
        </div>

        <div class="mb-3">
            <p>Select Gender</p>
            <div class="form-check">
                <input class="form-check-input" value="Male" type="radio" name="gender" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="Female" type="radio" name="gender" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" value="Others" type="radio" name="gender" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    Others
                </label>
            </div>
        </div>


        <div class="my-3">
            <p>Select hobby: </p>
            <div class="form-check">
                <input name="hobby1" class="form-check-input" type="checkbox" value="Travelling" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Travelling
                </label>
            </div>
            <div class="form-check">
                <input name="hobby2" class="form-check-input" type="checkbox" value="Read Books" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Read Books
                </label>
            </div>

            <div class="form-check">
                <input name="hobby3" class="form-check-input" type="checkbox" value="Do Nothing" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">
                    Do Nothing
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</x-master>