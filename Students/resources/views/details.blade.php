<x-master>

    <h1>Student info</h1>

    <a href="{{ route('students') }}"><button type="button" class="btn btn-secondary my-4">Go To List</button></a>
    <br>
    <h4>Name: {{$all_info->name}}</h4>
    <h4>Birth Date: {{$all_info->birth_date}}</h4>
    <h4>Gender: {{$all_info->gender}}</h4>
    <h4>Hobbies: {{$all_info->name}}</h4>
    <h4>Nationality: {{$all_info->nationality}}</h4>

</x-master>