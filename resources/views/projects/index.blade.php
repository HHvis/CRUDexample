@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-sm table-hover text-center my-3">
        <tr class="table-light">
            <th>Project Created</th>
            <th>Project Name</th>
            <th>Number of Groups</th>
            <th>Students per Group</th>
            <th width="220px">Actions</th>
        </tr>
        @foreach ($projects as $project)
        <tr class="align-middle">
            <td>{{ date_format($project->created_at, 'M jS Y') }}
                <br>
                <strong><time>{{ $project->created_at->diffForHumans() }}</time></strong>
            </td>
            <td>{{ ucwords($project->name) }}</td>
            <td>{{ $project->amount }}</td>
            <td>{{ $project->studentsPerGroup }}</td>
            <td>
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-light btn-sm" title="show">
                        Enter
                    </a>

                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-light btn-sm">
                        Edit
                    </a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Please Confirm')">
                        Delete
                    </button>
                </form>
        </tr>
        @endforeach
    </table>
    {!! $projects->links() !!}

    <div class="float-left my-1">
        <a class="btn btn-outline-success btn-sm" href="{{ route('projects.create') }}"> Add New Project</a>
    </div>
    
@endsection
