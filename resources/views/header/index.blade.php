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
                        <tr>
                        <th scope="row">1</th>
                        <td>Gambar 1</td>
                        <td><img src="/assets/media/img/mum/1.jpg" alt="" width="100px" height="50px"></td>
                        <td>
                            <a class="btn btn-primary btn-xl" href="#summary">
                                <div class="wrapper">
                                    <span>Edit</span>
                                </div>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Gambar 2</td>
                        <td><img src="/assets/media/img/mum/2.jpg" alt="" width="100px" height="50px"></td>
                        <td>
                            <a class="btn btn-primary btn-xl" href="#summary">
                                <div class="wrapper">
                                    <span>Edit</span>
                                </div>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Gambar 3</td>
                        <td><img src="/assets/media/img/mum/3.jpg" alt="" width="100px" height="50px"></td>
                        <td>
                            <a class="btn btn-primary btn-xl" href="#summary">
                                <div class="wrapper">
                                    <span>Edit</span>
                                </div>
                            </a>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
@endsection