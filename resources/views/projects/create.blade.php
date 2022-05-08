@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Add New Project</h2>
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
   
<form action="{{ route('projects.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Project Name:</strong>
                <input type="text" name="name" class="form-control form-control-sm" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount of Groups:</strong>
                <input type="number" name="amount" class="form-control form-control-sm" placeholder="Amount of Groups Needed">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" action="{{ route('groups.store') }}" method="POST">
                <strong>Students Per Group:</strong>
                <input type="number" name="studentsPerGroup" class="form-control form-control-sm" placeholder="Maximum Amount of Students per Group">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left my-2">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('projects.index') }}"> Back</a>
    </div>
   
</form>
@endsection
