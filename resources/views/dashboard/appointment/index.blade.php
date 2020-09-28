@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('title-page','Solicitudes de experiencia')

@section('content')
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">


                                         
                                             <div class="row">
                                                 <div class="col-xs-12 col-sm-12 col-md-2">
                                                   <img src="{{ $experience->experience_thumbnail }}" alt="" class="img-fluid">
                                                 </div>
                                                 <div class="col-xs-12 col-sm-12 col-md-8">
                                                     <h2>{{ $experience->title }}</h2>

                                                     <p>Solicitante: {{ $user_requesting->name }}</p>
                                                     <p>Fecha solicitud: {{ $appointment->date }}</p>
                                                     <p>Número de personas: {{ $appointment->people }}</p>

                                                 </div>
                                                 <div class="col-xs-12 col-sm-12 col-md-2">
                                                      <a href="{{ route('acept-appointment' , $appointment->id )  }}" class="btn btn-block btn-naranja">ACEPTAR</a>    
                                                      <a href="{{ route('reject-appointment' , $appointment->id )  }}" class="btn btn-block btn-danger">RECHAZAR</a>    

                                                 </div>
                                             </div>




                
                                        </div>
                                     </div> <!-- end col -->
                                 </div>
                            </div>
@endsection
