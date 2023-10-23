@extends('master.parent')
@section('title', 'Add Type')
@section('content')

<form action="{{ route('type.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach ($errors->all() as $error)
        <div id="error-message" class="alert alert-danger">
            <li class="text-danger">{{$error}}</li>
        </div>
    @endforeach

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Type</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="type" name="type">
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-danger" href="{{ route('type.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>

</form>
  
  
@endsection
