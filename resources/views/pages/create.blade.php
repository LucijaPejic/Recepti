@extends('layouts.frontend')

@section('content')
    
        <!--Znaci ovo sam kopirala sa contact, jer doslovno sta god sam pokusala, nije moglo, doslovno sve drugo ne radi, nak pojavi se al css ne valja -->
        <div class="contact-area section-padding-0-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h3>Novi Recept</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="contact-form-area">
                            <form action="{{ route('saveItem') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="naziv">Naziv</label>
                                            <input type="text" class="form-control" name="naziv">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="vrijeme_pripreme">Vrijeme pripreme</label>
                                            <input type="text" class="form-control" name="vrijeme_pripreme">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="vrijeme_kuhanja">Vrijeme kuhanja</label>
                                            <input type="text" class="form-control" name="vrijeme_kuhanja">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="opis">Opis</label>
                                            <textarea class="form-control" name="opis"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="priprema">Priprema</label>
                                            <textarea class="form-control" name="priprema"></textarea>
                                        </div>
                                    </div>
        
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="sastojci">Sastojci</label>
                                            <textarea class="form-control" name="sastojci"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="slika">Slika</label>
                                            <input type="file" class="form-control-file" name="slika">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-success">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

   
@endsection
