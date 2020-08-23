@extends('layouts.dashboard')
@section('title','HostFriends')




@section('content')



       
       <div class="row">
          <div class="col-xs-12">
              <h4>Información Personal</h4>
         </div>  
       </div>

                <form  method="POST" action="{{ route('profile.update' , $profile->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                   <label for="">Genero:</label>
                                   <select name="gender" id="gender" class="form-control">
                                        <option value="">Selecciona una opción</option>

                                        @if($profile->gender === 0)
                                          <option selected value="0">Mujer</option>
                                           <option value="1">Hombre</option>
                                          <option value="">Prefiero no especificar</option>
                                        @endif


                                        @if($profile->gender === 1)
                                           <option  value="0">Mujer</option>
                                           <option selected value="1">Hombre</option>
                                           <option value="">Prefiero no especificar</option>
                                        @endif


                                        @if($profile->gender === null)
                                          <option   value="0">Mujer</option>
                                           <option  value="1">Hombre</option>
                                          <option   selected value="">Prefiero no especificar</option>
                                        @endif
                                      
                                       
                                   </select>
                         </div>
                    </div>

                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="">Ingrese un correo alternativo:</label>
                            <input type="email" value="{{ $profile->alternative_email }}" name="alternative_email" id="alternative_email">
                        </div>
                    </div>

             

                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="">Ingrese su fecha de nacimiento:</label>
                            <input type="date" value="{{  $profile->birth }}" name="birth" id="birth">
                        </div>
                    </div>


                 
                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                              <label for="">Biografía</label>
                              <textarea name="bio" id="bio" class="form-control" placeholder="Agregar una descripción sobre ti ayuda a los friends a contratar tus experiencias.">{!!  $profile->bio !!}</textarea>
                         </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12">
                         <h4>Úbicación</h4>
                      </div>
                    </div> 


                

                  
            
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                      
                      
                       {{ $flag = false }}


                        @foreach($languajes as $languaje)
                                  @foreach($languajes_user as $languaje_user)

                                      @if($languaje->id === $languaje_user->id)

                                      <label class="checkbox-inline">

                                               {{ $languaje->name }} 
                                              
                                                <input type="checkbox" checked name="languajes[]" value="{{ $languaje->id }}">

                                      </label>
                                                <?php $flag = true ?>
                                                @break
                                      @endif
                                   @endforeach


                              @if(!$flag)
                              <label class="checkbox-inline">{{ $languaje->name }}
                            
                              <input type="checkbox" name="languajes[]" value="{{ $languaje->id }}">
                              </label>
                              @else
                              {{ $flag = false }}
                              @endif
                      @endforeach




               
                   
                      </div>    
                    </div> 
                          
                              

                   <div class="row mt-3 mb-5">
                     <div class="col-xs-12 col-sm-12 col-md-12 mt-12">
                            <input type="submit" class="btn btn-lg btn-block" style="background-color:#eb4d32; color:white;" value="GUARDAR INFORMACIÓN">
                     </div>
                   </div>  
               

                </form>
  


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
