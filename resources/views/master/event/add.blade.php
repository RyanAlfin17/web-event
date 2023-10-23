@extends('master.parent')
@section('title', 'Add Event')
@section('content')

<form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach ($errors->all() as $error)
        <div id="error-message" class="alert alert-danger">
            <li class="text-danger">{{$error}}</li>
        </div>
    @endforeach
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" class="form-control" id="gambar" name="image" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama event" name="nm_event">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Event</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="tanggal event" name="tanggal">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Detail Event</label>
        <textarea class="form-control" aria-label="With textarea" name="detail"></textarea>
    </div>
    <div class="row">
        <div class="input-group mb-3 col-6">
            <label class="input-group-text" for="inputGroupSelect01">Kota</label>
            <select class="form-select" id="inputGroupSelect01" required name="kota_id">
                <option selected>Choose...</option>
                @foreach ($kota as $item)
                <option value="{{ $item->id }}">{{ $item->nm_kota }}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group mb-3 col-6">
            <label class="input-group-text" for="inputGroupSelect01">Price</label>
            <select class="form-select" id="inputGroupSelect01" required name="price_id">
                <option selected>Choose...</option>
                @foreach ($price as $item)
                <option value="{{ $item->id }}">{{ $item->price }}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group mb-3 col-6">
            <label class="input-group-text" for="inputGroupSelect01">Type</label>
            <select class="form-select" id="inputGroupSelect01" required name="type_id">
                <option selected>Choose...</option>
                @foreach ($type as $item)
                <option value="{{ $item->id }}">{{ $item->type }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="d-flex justify-content-between">
        <a class="btn btn-danger" href="{{ route('kota.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>

</form>
  
  
@endsection
