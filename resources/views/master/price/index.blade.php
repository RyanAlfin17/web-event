@extends('master.parent')
@section('title', 'Price')
@section('content')
<table class="table table-striped">
    <a href="{{ route('price.create') }}" class="btn btn-primary mb-3">add</a>
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
        <th scope="col">Price</th>
        {{-- <th scope="col">Last</th> --}}
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)    
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td scope="col">{{ $item->price }}</td>
        <th class="d-flex">
            <a href="{{ route('price.edit', $item->id) }}" class="btn btn-warning mr-2">edit</a>
            <form action="{{ route('price.destroy', $item->id) }}" method="POST">
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
