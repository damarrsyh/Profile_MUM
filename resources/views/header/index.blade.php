@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Header Page</h1>

    <a type="button" class="btn btn-primary" href="/dashboard/index">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
    <a href="/header/create" class="btn btn-primary mx-3">Add New</a>
  </div>

  <div class="row">
    <div class="col-6 table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody align="center">
          @foreach ($headers as $key => $header)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>Gambar {{ $key + 1 }}</td>
              <td><img src="{{ asset("storage/$header->image") }}" alt="" width="100px" height="60px"></td>
              <td>
                <a href="/header/edit/{{ $header->id }}" class="btn btn-success mx-3">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
