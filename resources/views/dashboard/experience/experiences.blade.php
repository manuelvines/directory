@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('title-page','Mis experiencias')
@section('content')

<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            


               @foreach($experiences as $experience)
               <div class="row shadow-lg p-3">
                   <div class="col-xs-12 col-sm-12 col-md-4 mb-3 text-center">
                      <img src="{{  $experience->experience_thumbnail }}" class="img-fluid">
                      <a href="{{  route('experience', $experience->slug )   }}" target="_blank">Ver experiencia</a>

                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-8">
                    <h3>{!! $experience->title  !!}</h3> 
                  
                    
                  
                    <div class="mt-3 text-center"> 
                    <a href="{{  route('experience.edit', $experience->id ) }}" class="btn btn-warning btn-block">Editar experiencia</a>
                    
                    
                    <form action="{{ route('experience.destroy', $experience->id ) }}" class="pt-3" method="POST">
                      @csrf
                      @method('DELETE')

                      <input  type="submit" class="btn btn-warning btn-block btn-danger" value="Eliminar experiencia"> 

                    </form>
                    
                    
                    </div>


                    </div>    
               </div>

               @endforeach

       
</div>
</div>
</div>
</div>
@endsection
