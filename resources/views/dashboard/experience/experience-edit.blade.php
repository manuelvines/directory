@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('title-page','Mis experiencias')
@section('content')



<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            


               <form  method="POST" action="{{ route('experience.update', $experience->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Título:</label>
                        <div class="col-sm-10">
                            <input  class="form-control" type="text" name="title" id="title" value="{{ $experience->title }}" placeholder="Crea un título atractivo para tus futuros Friends">
                        </div>
                    </div>

                    <div class="form-group row text-center">
                      <img src="{{ $experience->experience_thumbnail }}" alt="" class="img-fluid" style="max-width:350px;">
                    </div>
                    
                    <div class="form-group row">
                    <label for="experience_thumbnail" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Agregue una imagen destacada</label>
                    <div class="col-sm-10">
                       <input type="file" name="experience_thumbnail" id="experience_thumbnail" class="form-control">
                       <span>Medida de 1920x720 o foto en formato horizontal</span>
                      </div>
                    </div>

                  

                     <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                           <p>Disponibilidad para ofrecer tu experiencía</p>
                         </div>
                     </div>


                     <div class="form-group row">
                     <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Desde:</label>
                     <div class="col-sm-10">
                          <input  class="form-control" type="time" name="initial_schedule" value="{{ $experience->initial_schedule }}" id="initial_schedule">
                        </div>
                     </div> 


                     <div class="form-group row">
                     <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Hasta:</label>
                        <div class="col-sm-10">
                            <input  class="form-control" type="time" name="final_schedule" id="final_schedule" value="{{ $experience->final_schedule }}">
                        </div>
                     </div>


                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                           <p>¿Dónde ofreceras la experiencía?</p>
                         </div>
                     </div>
                     
                     <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>País:</label>
                            <div class="col-sm-10">
                              <select name="country_id" id="country_id" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($countries as $country)
                                    <option value=" {{  $country->id }}">
                                      {{  $country->name }}
                                    </option>
                                    @endforeach
                              </select>
                            </div>
                     </div>

                    <div class="form-group row">
                         <label  for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Estado</label>
                            <div class="col-sm-10">
                             <select name="state_id" id="state_id" class="form-control">
                             </select> 
                            </div>   
                      
                    </div>
                    

                    <div class="row">

                         <label  for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Número máximo de personas</label>
                         <div class="col-sm-10">
                          <input class="form-control" type="number" name="max_people" min="1" title="max_people" value="{{ $experience->max_people }}">
                         </div>
                     
                    </div>

                   
                   <div class="form-group row">
                        <label for="description" class="col-sm-12 col-form-label"><span class="text-danger">*</span>Describe tu experiencía:</label>
                        <div class="col-sm-12">
                           <textarea id="description"  name="description" class="editor">{!! $experience->description !!}</textarea>
                        </div>
                    </div>
                  
                 
                    <div class="form-group row">
                        <label for="restrictions" class="col-sm-12 col-form-label"><span class="text-danger">*</span>¿La experiencia tiene restricciones? Agregalas en forma de lista</label>
                        <div class="col-sm-12">
                           <textarea id="restrictions"  name="restrictions" class="editor"> {!! $experience->restrictions !!}</textarea>
                        </div>
                    </div>
                 


                    <div class="form-group row">
                        <label for="tips" class="col-sm-12 col-form-label"><span class="text-danger">*</span>Tips</label>
                        <div class="col-sm-12">
                           <textarea id="tips"  name="tips" class="editor"> {!! $experience->tips !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bio" class="col-sm-12 col-form-label"><span class="text-danger">*</span>Agrega gatos extras</label>
                        <div class="col-sm-12">
                           <textarea class="editor" name="extra_expenses" id="extra_expenses">
                           {!! $experience->extra_expenses !!}
                           </textarea>
                      
                        </div>
                    </div>
                 
               
                    <div class="row">
                       <label  for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Precio estimado por persona</label>
                        <div class="col-sm-10">
                        <input class="form-control" value="{{ $experience->estimated_price_per_person }}" type="number" step="any" name="estimated_price_per_person" id="estimated_price_per_person">

                        </div>
                  </div>

         
                          
                              

                   <div class="row mt-3 mb-5">
                     <div class="col-xs-12 col-sm-12 col-md-12 mt-12">
                            <input type="submit" class="btn btn-lg btn-block" style="background-color:#eb4d32; color:white;" value="GUARDAR INFORMACIÓN">
                     </div>
                   </div>  
               

                </form>


</div>

</div>

</div>
</div>


     @push('scripts')
    <script src="{{ asset('dashboard/js/statesByCountry.js') }}"></script>
   
@endpush


@endsection
