<div class="container my-5" id="services">
<div class="row g-0">
    <div class="col-6 col-md-9 py-5" style="border-radius: 15px; background: var(--bs-gray-100);">
        <h2 class="text-center textheader fw-bold" data-aos="fade-in" data-aos-duration="1100">OUR SERVICES PRODUCTS</h2>
        <hr class="divider"  data-aos="fade-in" data-aos-duration="1200">
        <div class="row mt-5 justify-content-center">
            <div class="col-6 text-center hov">
                <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal1">
                    <div class="mb-2"><i class="fa-solid fa-hand-holding-dollar fs-1"  data-aos="fade-in" data-aos-duration="1500"></i></div>
                    <hr class="divider" data-aos="fade-in" data-aos-duration="1600">
                    <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="1700">PEMBIAYAAN SISTEM GRAMEEN BANK</h3>
                </div>
            </div>
            <div class="col-6 text-center hov">
                <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal2">
                    <div class="mb-2"><i class="fa-solid fa-hand-holding-dollar fs-1" data-aos="fade-in" data-aos-duration="1500"></i></div>
                    <hr class="divider" data-aos="fade-in" data-aos-duration="1600">
                    <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="1700">PEMBIAYAAN KHUSUS</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-6 text-center hov">
                <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal3">
                    <div class="mb-2"><i class="fa-solid fa-coins fs-1"  data-aos="fade-in" data-aos-duration="1500"></i></div>
                    <hr class="divider" data-aos="fade-in" data-aos-duration="1600">
                    <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="1700">SIMPANAN BERJANGKA (SIMBA)</h3>
                </div>
            </div>
            <div class="col-6 text-center hov">
                <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal4">
                    <div class="mb-2"><i class="fa-solid fa-coins fs-1" data-aos="fade-in" data-aos-duration="1500"></i></div>
                    <hr class="divider" data-aos="fade-in" data-aos-duration="1600">
                    <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="1700">SIMPANAN SUKARELA</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-6 text-center hov">
                <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal5">
                    <div class="mb-2"><i class="fa-solid fa-person-dress fs-1" data-aos="fade-in" data-aos-duration="1500"></i></div>
                    <hr class="divider" data-aos="fade-in" data-aos-duration="1600">
                    <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="1700">PELAYANAN KESEHATAN UNTUK PEREMPUAN</h3>
                </div>
            </div>
            <div class="col-6 text-center hov">
                <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal6">
                    <div class="mb-2"><i class="fa-solid fa-person-dress fs-1"  data-aos="fade-in" data-aos-duration="1500"></i></div>
                    <hr class="divider" data-aos="fade-in" data-aos-duration="2600">
                    <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="1700">PELAYANAN PENGEMBANGAN WIRAUSAHA PEREMPUAN</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3" id="services">
        @foreach ($article as $article)    
        <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2200">
        <img src="{{ asset("storage/$article->image") }}" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <div class="card-body px-3">
                <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                <p class="card-text desc">{{ Str::limit($article->description, 150, '...') }}</p>
                <!-- Button trigger modal -->
                <a type="button" class="btn btn-primary" href="/article/index/{{ $article->id }}">
                    <div class="wrapper">
                        <span>More</span>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

{{-- MODAL --}}
<div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="ModalLabel1">Pembiayaan Sistem Grameen Bank</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Metode Grameen Bank merupakan program penyaluran kredit mikro yang ditujukan bagi golongan masyarakat miskin di pedesaan.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="ModalLabel2">Pembiayaan Khusus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="ModalLabel3">Simpanan Berjangka(SIMBA)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p> Simpanan Berjangka adalah simpanan di koperasi yang penyetorannya dilakukan sekali dan penarikannya hanya dapat dilakukan pada waktu tertentu menurut perjanjian antara penyimpan dengan koperasi yang bersangkutan.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="ModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="ModalLabel4">Simpanan Sukarela</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Simpanan sukarela adalah iuran yang dibayar oleh anggota koperasi secara sukarela atau tidak ada paksaan dimana besarnya iuran sesuai dengan kemampuan masing-masing anggota. Simpanan ini bisa diambil sewaktu-waktu sesuai dengan jumlah simpanan anggota yang bersangkutan.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="ModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="ModalLabel5">Pelayanan Kesehatan Untuk Perempuan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="ModalLabel6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-light" id="ModalLabel6">Pelayanan Pengembangan Wirausaha Perempuan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- END MODAL --}}
