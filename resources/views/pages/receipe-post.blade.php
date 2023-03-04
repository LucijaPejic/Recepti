  
@extends('layouts.frontend')
@section('content')
    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="breadcumb-area bg-img bg-overlay">
        <img src="{{ asset($recept->slika) }}" alt="{{ $recept->name }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>{{ $recept->naziv }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="receipe-content-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="receipe-headline my-5">
                        <span>{{$recept->date}}</span>
                        <h2>{{ $recept->naziv }}</h2>
                        <div class="receipe-duration">
                            <h6>Prep: {{ $recept->vrijeme_pripreme }}</h6>
                            <h6>Cook: {{ $recept->vrijeme_kuhanja }}</h6>
                        </div>
                    </div>
    
                    <div class="receipe-headline my-5">
                        <h4>Priprema</h4>
                        <div class="single-preparation-step d-flex">
                            <p>{{ $recept->priprema }} </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-lg-4">
                    <div class="ingredients" style="height: 440px;">
                        <h4>Ingredients</h4>
                        <ul>
                            @foreach(explode(', ', $recept->sastojci) as $sastojak)
                                <li>{{ $sastojak }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <style>
        .recipe-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    
        @media only screen and (max-width: 768px) {
            .recipe-section {
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
            }
        }
    </style>
    
      
     
    @endsection
