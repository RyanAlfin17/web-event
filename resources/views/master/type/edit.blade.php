@extends('master.parent')
@section('title', 'Edit Type')
@section('content')

<form action="{{ route('type.update', $type->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @foreach ($errors->all() as $error)
        <div id="error-message" class="alert alert-danger">
            <li class="text-danger">{{$error}}</li>
        </div>
    @endforeach

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Type</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="type" name="type" value="{{$type->type}}">
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-danger" href="{{ route('type.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>
  
  
@endsection
