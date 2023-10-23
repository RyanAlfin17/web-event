@extends('master.parent')
@section('title', 'Edit Price')
@section('content')

<form action="{{ route('price.update', $price->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @foreach ($errors->all() as $error)
        <div id="error-message" class="alert alert-danger">
            <li class="text-danger">{{$error}}</li>
        </div>
    @endforeach

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="price" name="price" value="{{$price->price}}">
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-danger" href="{{ route('price.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>
  
  
@endsection
