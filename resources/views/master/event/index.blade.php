@extends('master.parent')
@section('title', 'Event')
@section('content')
<table class="table table-striped">
    <a href="{{ route('event.create') }}" class="btn btn-primary mb-3">add</a>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar event</th>
        <th scope="col">Nama event</th>
        <th scope="col">Tanggal event</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)    
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td scope="col"><img src="{{ $item->image }}" alt="" width="100" height="100"></td>
        <td scope="col">{{ $item->nm_event }}</td>
        <td scope="col">{{ $item->tanggal }}</td>
        <th class="d-flex">
            <a href="{{ route('event.edit', $item->id) }}" class="btn btn-warning mr-2">edit</a>
            <form action="{{ route('event.destroy', $item->id) }}" method="POST">
              @csrf
              @method('DELETE')
            <button class="btn btn-danger">delete</button>
          </form>
        </th>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
