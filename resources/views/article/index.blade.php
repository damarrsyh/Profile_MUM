@extends('layout.main')

@section('page')
    <!--Section Article-->
    <div class="container px-4 px-lg-5 py-5 my-5" id="services">
        <div class="row g-0">
            <div class="col-md-9 py-5 px-5" style="border-radius: 15px; background: var(--bs-gray-100);">
                <div class="card mb-3">
                    @foreach ($article as $key => $article)
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <img src="{{ asset('storage/'. $article->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $article->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection