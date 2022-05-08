@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Project</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('projects.update',$project->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Project Name:</strong>
                    <input type="text" name="name" value="{{ ucwords($project->name) }}" class="form-control form-control-sm" readonly="readonly">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount of Groups:</strong>
                    <input type="number" name="amount" value="{{ $project->amount }}" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students Per Group:</strong>
                    <input type="text" name="studentsPerGroup" value="{{ $project->studentsPerGroup }}" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left my-2">
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              <a class="btn btn-outline-secondary btn-sm" href="{{ route('projects.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection
