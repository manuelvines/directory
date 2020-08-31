@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('title-page','Verificar Identidad')
@section('content')
    
<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">


<div class="row">
          <div class="col-xs-12">
           
         </div>  
       </div>

       <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">

             <p>
             Validar tu identidad sirve para verificar que eres la persona quién dices ser, esto ayudará a incrementar la confianza de los Friends, se te otorgará un distintivo de verificación al realizar este paso. 
           
             </p>
         
         </div>
       </div>



       <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">

                <form action="{{  route('store-document')  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="">Folio</label> 
                        <input type="text" name="folio" id="folio" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="">Foto frontal del documento</label>
                        <input type="file" name="front-doc" id="front-doc" class="form-control">
                        <small>Cargue una foto cuadrada de entre: 100x100px y 500x500px</small>
                    </div>

                    <div class="form-group">
                       <label for="">Foto trasera del documento</label>

                        <input type="file" name="back-doc" id="back-doc" class="form-control">
                        <small>Cargue una foto cuadrada de entre: 100x100px y 500x500px</small>
                    </div>


                    <div class="form-group">
                       <label for="type">Tipo de documento</label>
                       <select name="type" id="type" class="form-control">
                          <option>Seleccione una opción</option>
                          <option value="1">Identificación</option>
                          <option value="2">Pasaporte</option>  
                          <option value="3">Cartilla militar</option>

                          <option value="4">Licencía de conducir</option>
                          <option value="5">Otro</option>

                       </select>
                    </div>


                    <div class="form-group">
                       <label for="other">Especificar tipo de documento</label>
                       <input type="text" name="other" id="other" class="form-control">
                    </div>


                        <div class="form-group">
                
                        <input type="submit" value="Enviar documentos" class="btn btn-block btn-naranja">

                        </div>
                
                </form>

         </div>
       </div>

</div>
</div>
</div>
</div>

@endsection
