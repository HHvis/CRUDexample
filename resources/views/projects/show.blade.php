@extends('layouts.app')
@section('content')

<h4> {{ ucwords($project->name) }} </h4>

@include ('projects.group-dropdown')




<table class="table table-bordered table-sm table-hover text-center my-3">
    <tr class="table-light">
        <th>Student</th>
        <th>Group Name</th>
        <th width="220px">Action</th>
    </tr>
@foreach ($students as $student)
    <tr class="align-middle">
        <td class="text-left">{{ ucwords($student->name) }}</td>
        <td>Group #?</td>
        <td>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Please Confirm')">
                    Remove
                </button>
            </form>
        </td>
    </tr>
@endforeach
</table>

<div class="float-left my-1">
    <a class="btn btn-outline-success btn-sm" href="{{ '../students' }}"> Add New Student</a>
    <a class="btn btn-outline-secondary btn-sm" href="{{ route('projects.index') }}"> Back</a>
</div>


@endsection
