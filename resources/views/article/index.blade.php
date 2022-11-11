@extends('layout.main')

@section('page')
    <!--Section Article-->
    <div class="container px-4 px-lg-5 py-5 my-5" id="services">
        <div class="row g-0">
            <div class="col-md-9 py-5 px-5" style="border-radius: 15px; background: var(--bs-gray-100);">
                <div class="card mb-3">
                    @foreach ($article as $article)
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <img src="{{ asset("storage/$article->image") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $article->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="col-md-3" id="article">
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2200">
                    <img src="/assets/media/img/artikel/1.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="article.html">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2200">
                    <img src="/assets/media/img/artikel/2.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="article.html">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    @endsection