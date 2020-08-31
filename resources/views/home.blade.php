@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('content')

<div class="row">
<h1 >Hola, {{ Auth::user()->name }} </h1><br>
</div>				  

<div class="row">
   <p>
    Gana dinero ofreciento tu tiempo y alojamiento. 
   </p>
   <a href="">Más información</a>
</div>


<div class="row mt-5">
    <div class="col-xs-12 col-sm-12 com-md-12" >
          <h5>EXPERIENCIAS</h5>
          <ul class="text-left">
             <li class="mt-3"><a href=""><h6>Publica experiencia</h6></a></li>

             <li class="mt-3"><a href=""><h6>¿Cómo ofrecer experiencias?</h6></a></li>
          </ul>
    </div>
</div>


<div class="row mt-5">
    <div class="col-xs-12 col-sm-12 com-md-12">
          <h5>ASISTENCIA</h5>
          <ul class="text-left">
             <li class="mt-3"><a href=""><h6>¿Cómo funciona HOSTFRIENDS?</h6></a></li>

             <li class="mt-3"><a href=""><h6>Obtén ayuda</h6></a></li>
          </ul>
    </div>
</div>


<div class="row mt-5 mb-5">
    <div class="col-xs-12 col-sm-12 com-md-12">
          <h5>TÉRMINOS</h5>
          <ul class="text-left">
             <li class="mt-3"><a href=""><h6>Términos del servicio</h6></a></li>

             <li class="mt-3"><a href="{{ url('/logout') }}"><h6>Cerrar la sessión</h6></a></li>
          </ul>
    </div>
</div>





@endsection
