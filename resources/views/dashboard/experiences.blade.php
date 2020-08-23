@extends('layouts.dashboard')
@section('title','HostFriends')
@section('content')
<div class="container">

               <div class="row">
                    <div class="col-xs-12">
                      <h4>Mis experiencias</h4>
                    </div>  
               </div>

               <div class="row">
                 <div class="col-xs-12">
                   <a href="{{ route('experience.create') }}" class="btn btn-primary">Publicar experiencía</a>
                 </div>
               </div>

               @foreach($experiences as $experience)
               <div class="row shadow-lg p-3">
                   <div class="col-xs-12 col-sm-12 col-md-4 mb-3 text-center">
                      <img src="{{  $experience->experience_thumbnail }}" class="img-fluid">
                      <a href="º">Ver experiencia</a>

                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-8">
                    <h3>{!! $experience->title  !!}</h3> 
                    <div class="text-justify">
                             {!! substr($experience->description, 0, 250)  !!}
                    </div>
                    
                  
                    <div class="mt-3 text-center"> 
                    <a href="{{  route('experience.edit', $experience->id ) }}" class="btn btn-warning btn-block">Editar experiencia</a>
                    
                    
                    <form action="{{ route('experience.destroy', $experience->id ) }}" class="pt-3" method="POST">
                      @csrf
                      @method('DELETE')

                      <input class="btn btn-danger" type="submit" value="Eliminar experiencia"> 

                    </form>
                    
                    
                    </div>


                    </div>    
               </div>

               @endforeach

       
</div>
@endsection
