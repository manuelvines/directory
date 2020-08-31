@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('content')




<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Actualizar mi foto</h4>
                                            <p class="text-muted m-b-30 font-14">
                                            Una foto de perfil que muestre tu cara puede ayudar a que los friends te conozcan mejor.
             Hostfriend requiere que todos los anfitriones tengan una foto de perfil. 
                                            </p>
            
                                            <div class="m-b-30">
                                            <form action="{{  route('change-update')  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">

                        <input type="file" name="avatar" id="avatar" class="form-control">

             
                        <small>Cargue una foto cuadrada de entre: 100x100px y 500x500px</small>
       
                    </div>

                    <div class="row">
                                                
                                                <input type="submit" value="GUARDAR" class="btn btn-block btn-naranja">

                                                <a href="http://localhost:8000/home" class="btn btn-block btn-danger waves-effect waves-light">CANCELAR</a>
                                            </div>
                
                </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>


@endsection
