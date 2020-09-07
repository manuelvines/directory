@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('title-page','Perfil')
@section('content')


<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <p class="text-muted m-b-30 font-14">
                                             Contar con un perfil descriptivo de tus habilidades, intereses y gustos ayuda a los friends a contratar tus experiencias, trata de ser muy descriptivo.
                                            </p>
                                                
                                              <form  method="POST" action="{{ route('profile.store') }}">
                                              @csrf
                                              @method('POST')

                                              <div class="form-group row">
                                                  <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Genero:</label>

                                                  <div class="col-sm-10">
                                                      <select name="gender" id="gender" class="form-control" required>
                                                             <option value="">Selecciona una opción</option>

                                                              <option @if(old('gender') == 0 ) selected :  @endif  value="0">Mujer</option>
                                                              <option @if(old('gender') == 1 ) selected :  @endif  value="1">Hombre</option>
                                                              <option @if(old('gender') == null ) selected :  @endif  value="">Prefiero no especificar</option>
                                                           
                                                      </select>
                                                  </div>
                                              </div>


                                              
                                              <div class="form-group row">
                                                  <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span> País de Ubicación:</label>
               
                                                  <div class="col-sm-10">
                                                      <select name="country_id" id="country_id" class="form-control" required>
                                                               <option value="">Selecciona una opción</option>

                                                               @foreach($countries as $country)
                                                                  @if($country->id == old('country_id'))
                                                                        <option selected value="{{ $country->id }}">{{ $country->name }}</option>
                                                                        @else
                                                                        <option  value="{{ $country->id }}">{{ $country->name }}</option>
                                                                    @endif                                                                 
                                                               @endforeach
                                                           
                                                      </select>
                                                  </div>
                                              </div>


                                              <div class="form-group row">
                                                  <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Estado de Ubicación:</label>

                                                  <div class="col-sm-10">
                                                      <select name="state_id" id="state_id" class="form-control">
                                                               <option value="">Selecciona una opción</option>

                                                            
                                                           
                                                      </select>
                                                  </div>
                                              </div>



                                              <div class="form-group row">
                                                  <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Ingrese un correo alternativo:</label>

                                                  <div class="col-sm-10">
                                                   <input type="email" class="form-control"  name="alternative_email" id="alternative_email" value="{{ old('alternative_email') }}">
                                                  </div>
                                              </div>

                                              <div class="form-group row">
                                                  <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Ingrese su fecha de nacimiento:</label>

                                                  <div class="col-sm-10">
                                                  <input type="date"  class="form-control" name="birth" id="birth"  value="{{ old('birth') }}">
                                                  </div>
                                              </div>

                                              <div class="form-group row">
                                                  <label for="bio" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Ingrese su biografía:</label>
                                                  <div class="col-sm-10">
                                                    <textarea id="bio"  name="bio" class="editor">{!!  old('bio') !!}</textarea>
                                                  </div>
                                              </div>



                                              <div class="row">
                                              <label for="" class="col-sm-2 col-form-label">Idiomas que hablas:</label>

                                                <div class="col-sm-10">

                  
                                                  @foreach($languajes as $languaje)

                                     
                                                                <div class="checkbox my-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                      <input type="checkbox"
                                                                      class="custom-control-input"  id="customCheck{{ $languaje->id }}" name="languajes[]" value="{{ $languaje->id }}">
                                                                      <label class="custom-control-label" for="customCheck{{ $languaje->id }}" >{{ $languaje->name }} </label>
                                                                    </div>
                                                                </div>


                                                  @endforeach
                                                </div>    
                                              </div> 
                                              <div class="row">
                                                
                                                <input type="submit" value="GUARDAR" class="btn btn-block btn-naranja">

                                                <a href="{{ route('home') }}" class="btn btn-block btn-danger waves-effect waves-light">CANCELAR</a>
                                            </div>
                                            
                                            </form>
                                    
                
 
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
       

@push('scripts')
    <script src="{{ asset('dashboard/js/statesByCountry.js') }}"></script>
@endpush
@endsection
