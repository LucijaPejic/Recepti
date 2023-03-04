@extends('layouts.frontend')

@section('content')
    

        <!-- Search Wrapper -->
        <div class="search-wrapper">
            <!-- Close Btn -->
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

        <!-- ##### Header Area Start ##### -->

        <!-- ##### Header Area End ##### -->
        <section class="cta-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg4.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Cta Content -->
                        <div class="cta-content text-center">
                            <h2>Recepti</h2>
                            <p>Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accumsan molestie. Vestibulum
                                ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras sed
                                accumsan neque. Ut vulputate, lectus vel aliquam congue, risus leo elementum nibh</p>
                                <div class="text-center">
                                    <a href="/blogpost" class="btn delicious-btn">Više recepata</a>
                                </div>
                                
                    </div>
                </div>
            </div>
        </section>

        <!-- ##### Top Catagory Area Start ##### -->
        <section class="top-catagory-area section-padding-80-0">
            <div class="container">
                <div class="row">
                    <!-- Top Catagory Area -->
                    @foreach($recepti->take(2) as $recept)
                    <div class="col-12 col-lg-6">
                        <div class="single-top-catagory">
                            <img src="{{ asset($recept->slika) }}" alt="">
                            <!-- Content -->
                            <div class="top-cta-content">
                                <h3>{{ $recept->naziv }}</h3>
                                <h6>Simple &amp; Delicios</h6>
                                <a href="{{ route('receipe-post.show', $recept->id) }}" class="btn delicious-btn">Pogledaj cijeli recept</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ##### Top Catagory Area End ##### -->




    
        
    


@endsection
