<x-master>

    <h1>Student info</h1>

    <a href="{{ route('students') }}"><button type="button" class="btn btn-secondary my-4">Go To List</button></a>
    <br>
    <h4>Name: {{$all_info->name}}</h4>
    <h4>Birth Date: {{$all_info->birth_date}}</h4>
    <h4>Gender: {{$all_info->gender}}</h4>
    <h4>Hobbies:
        <?php
        if ($all_info->hobby1 != null) {
            echo $all_info->hobby1 . ", ";
        }
        if ($all_info->hobby2 != null) {
            echo  $all_info->hobby2 . ", ";
        }
        if ($all_info->hobby3 != null) {
            echo $all_info->hobby3 . ", ";
        }
        ?>
    </h4>
    <h4>Nationality: {{$all_info->nationality}}</h4>

    <a href="{{ route('student.update', $all_info->id) }}"><button type="button"
            class="btn btn-primary my-4">Update</button></a>
    <a href="{{ route('student.delete', $all_info->id) }}"><button type="button" class="btn btn-danger my-4"
            onclick="return confirm('Delete this student?')">Delete</button></a>

</x-master>