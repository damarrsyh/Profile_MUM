@extends('layout.dashboard')

@section('page')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Gallery Page</h1>

            <a type="button" class="btn btn-primary" href="/dashboard/index">
                <div class="wrapper">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
            </a>
        </div>

        <div class="row">
            <div class="col-10 table-responsive d-flex">
                <table class="table table-borderless md-auto">
                    <thead class="table-dark" align="center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <tr>
                        <th scope="row">1</th>
                        <td><img src="/assets/media/img/galeri/Pelatihan/PELATIHAN FINLIT SUBANG 6.jpg" alt="" width="100px" height="50px"></td>
                        <td>Kegiatan Pelatihan</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td><img src="/assets/media/img/galeri/Lembaga/LOKAKARYA.jpg" alt="" width="100px" height="50px"></td>
                        <td>Kegiatan Lembaga</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td><img src="/assets/media/img/galeri/Sosial/SANTUNAN RUMAH REMBANG.jpg" alt="" width="100px" height="50px"></td>
                        <td>Kegiatan Sosial</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td><img src="/assets/media/img/galeri/Pelatihan/PELATIHAN FINLIT SUBANG 1.jpg" alt="" width="100px" height="50px"></td>
                        <td>Kegiatan Pelatihan</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td><img src="/assets/media/img/galeri/Lembaga/RAPAT KOORDINASI.jpg" alt="" width="100px" height="50px"></td>
                        <td>Kegiatan Lembaga</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td><img src="/assets/media/img/galeri/Sosial/SANTUNAN ANAK YATIM.jpeg" alt="" width="100px" height="50px"></td>
                        <td>Kegiatan Sosial</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
@endsection