@extends('layouts.frontend')

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Search Results</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        @if ($recepti->count() > 0)
                            @foreach ($recepti as $recept)
                                <!-- Single Blog Area -->
                                <div class="single-blog-area mb-80">
                                    <!-- Thumbnail -->
                                    <div class="blog-thumbnail">
                                        <img src="{{ asset($recept->slika) }}" style="max-width: 100%;">
                                        <!-- Post Date -->
                                        <div class="post-date">
                                            <a href="#">
                                                <span>{{ date('d', strtotime($recept->date)) }}</span>{{ date('F Y', strtotime($recept->date)) }}
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="blog-content">
                                        <h4><b>{{ $recept->naziv }}</b></h4>
                                        <div class="meta-data">by <a href="#">Maria Williams</a></div>
                                        <p>{{ $recept->opis }}</p><br>
                                        <a href="{{ route('receipe-post.show', $recept->id) }}" class="btn delicious-btn mt-30">Read More</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif <!-- Close the if statement here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

@endsection
