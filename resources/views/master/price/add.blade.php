@extends('master.parent')
@section('title', 'Add Price')
@section('content')

<form action="{{ route('price.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach ($errors->all() as $error)
        <div id="error-message" class="alert alert-danger">
            <li class="text-danger">{{$error}}</li>
        </div>
    @endforeach

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="price" name="price">
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-danger" href="{{ route('price.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>

</form>
  
  
@endsection
