@extends('layout.dashboard')

@section('page')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Summary Page</h1>

            <a type="button" class="btn btn-primary" href="/dashboard/index">
                <div class="wrapper">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
            </a>
        </div>

        <div class="row">
            <div class="col-8 table-responsive d-flex">
                <table class="table table-borderless md-auto">
                    <thead class="table-dark" align="center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <tr>
                        <th scope="row">1</th>
                        <td>Cabang</td>
                        <td>12</td>
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
                        <td>Anggota</td>
                        <td>16.800</td>
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
                        <td>Staff & AO</td>
                        <td>206</td>
                        <td>
                            <a class="btn btn-primary btn-xl" href="#summary">
                                <div class="wrapper">
                                    <span>Edit</span>
                                </div>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td>Outstanding</td>
                        <td>17.158M</td>
                        <td>
                            <a class="btn btn-primary btn-xl" href="#summary">
                                <div class="wrapper">
                                    <span>Edit</span>
                                </div>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td>Angsuran Lancar</td>
                        <td>86.25%</td>
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