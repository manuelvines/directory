@extends('layouts.dashboard')
@section('title','HostFriends')
@section('content')




       
       <div class="row">
          <div class="col-xs-12">
              <h4>Actualizar foto</h4>
         </div>  
       </div>

       <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">

             <p>
             Una foto de perfil que muestre tu cara puede ayudar a que los friends te conozcan mejor.
             Hostfriend requiere que todos los anfitriones tengan una foto de perfil. 
           
             </p>
         
         </div>
       </div>



       <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">

                <form action="{{  route('change-update')  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">

                        <input type="file" name="avatar" id="avatar" class="form-control">

             
                        <small>Cargue una foto cuadrada de entre: 100x100px y 500x500px</small>
       
                    </div>

                        <div class="form-group">
                
                        <input type="submit" value="Actualizar avatar" class="btn btn-primary">

                        </div>
                
                </form>

         </div>
       </div>


   


@endsection
