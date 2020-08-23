@extends('layouts.dashboard')
@section('title','HostFriends')
@section('content')
<div class="container">

       
               <div class="row">
                    <div class="col-xs-12">
                      <h4>Detalles Personales</h4>
                    </div>  
               </div>


                <form  method="POST" action="{{ route('profile.store') }}">
                    @csrf
                    @method('POST')

                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                   <label for="">Genero:</label>
                                   <select name="gender" id="gender" class="form-control">
                                        <option value="">Selecciona una opción</option>
                                        <option value="0">Mujer</option>
                                        <option value="1">Hombre</option>
                                        <option value="">Prefiero no especificar</option>
                                   </select>
                         </div>
                    </div>

                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="">Ingrese un correo alternativo:</label>
                            <input type="email" name="alternative_email" id="alternative_email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="nationality">Seleccione una nacionalidad:</label>

                            <select name="nationality" id="nationality" class="form-control">
                                    <option value="">Selecciona una nacionalidad</option>
                               @foreach($countries as $country)
                                    <option value="{{  $country->nationality }}">{{  $country->nationality }}</option>
                               @endforeach
                        </select>
                        </div>
                    
                    </div>


                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="">Ingrese su fecha de nacimiento:</label>
                            <input type="date" name="birth" id="birth">
                        </div>
                    </div>


                 
                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                              <label for="">Biografía</label>
                              <textarea name="bio" id="bio" class="form-control" placeholder="Agregar una descripción sobre ti ayuda a los friends a contratar tus experiencias."></textarea>
                         </div>
                    </div>

                    <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <p> ¿Qué idiomas hablas? </p>
                          </div>
                    </div>


                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <div class="row">
                        @foreach($languajes as $languaje)
                           
                                 <div class="col-xs-3 col-sm-3 col-md-4">
                                        <label class="checkbox-inline">
                                        <input type="checkbox" name="languajes[]" value="{{ $languaje->id }}">
                                        {{ $languaje->name }}
                                        </label>
                                 </div>
                             
                         @endforeach
                         </div>
                      </div>    
                    </div> 
                          
                              

                   <div class="row mt-3 mb-5">
                     <div class="col-xs-12 col-sm-12 col-md-12 mt-12">
                            <input type="submit" class="btn btn-lg btn-block" style="background-color:#eb4d32; color:white;" value="GUARDAR INFORMACIÓN">
                     </div>
                   </div>  
               

                </form>
  
</div>

@push('scripts')
    <script src="{{ asset('dashboard/js/statesByCountry.js') }}"></script>

    <script>
    // Replace the <textarea> with a CKEditor
    
    CKEDITOR.editorConfig = function( config ) {
      config.language = 'es';
      config.uiColor = '#F7B42C';
      config.height = 300;
      config.toolbarCanCollapse = true;
    };
    
    CKEDITOR.replace('bio');
  
   

    </script>


@endpush





@endsection
