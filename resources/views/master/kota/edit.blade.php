@extends('master.parent')
@section('title', 'Edit Kota')
@section('content')

<form action="{{ route('kota.update', $kota->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @foreach ($errors->all() as $error)
        <div id="error-message" class="alert alert-danger">
            <li class="text-danger">{{$error}}</li>
        </div>
    @endforeach

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Kota</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama kota" name="nm_kota" value="{{$kota->nm_kota}}">
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-danger" href="{{ route('kota.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>
  
  
@endsection
