<form action="{{ route('groups.store') }}" method="POST">
<div class="row">
    @for ($groupName = 1; $groupName <= $project->amount; $groupName++)
    <div class="col-3">
    <table class="table table-bordered table-sm table-hover text-center my-3">
    <tr class="table-light">
        <th> Group #{{ $groupName }} </th>
    </tr>
    <tr>
        <td>
        @for ($j = 0; $j < $project->studentsPerGroup; $j++)
        <select name="students" class="form-control form-control-sm" style="overflow:auto; max-height:260;">
            <option  value="" selected disabled>Assign Student</option>
            @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ ucwords($student->name) }} {{ $loop->iteration . '/' . $loop->count }}</option>
            @endforeach
        </select>
        @endfor
        </td>
    </tr>
    </table>
    </div>
@endfor
</div>
</form>
