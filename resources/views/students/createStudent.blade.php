@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Student</h2>
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
   
<form action="{{ route('students.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Name:</strong>
                <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left my-2">
                <button type="submit" class="btn btn-primary btn-sm" href="#">Submit</button>
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('projects.index') }}">Cancel</a>
    </div>
   
</form>
@endsection
