@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('title-page','Geolocalización')

@section('content')




<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <p class="text-muted m-b-30 font-14">
                                              Compartir tu ubicación con HostFriends ayuda a recomendar tus experiencias  los Friends basados en sus lugares de interés
                                            </p>
                                            <p class="alert alert-info">
                                            Esta función esta disponible sólo en celular
                                            </p>
            
                                            <div class="m-b-30 text-center">
                                            <a href="#" id="btn-geolocation" class="btn btn-block btn-naranja">GEOLOCALIZARME</a>        
                                         
                                                  <img src="{{ asset('dashboard/images/geolocation.jpeg') }}" class="img-fluid" alt="">
            

                                           </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>


@push('scripts')
    <script src="{{ asset('dashboard/js/geolocation.js') }}"></script>
@endpush

@endsection
