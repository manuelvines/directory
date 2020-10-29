@extends('layouts.dasboardvertical')
@section('title','HostFriends')
@section('title-page','Crear Experiencia')
@section('content')

<div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            


               <form  method="POST" action="{{ route('experience.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                   <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Título:</label>
                        <div class="col-sm-10">
                            <input  class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Crea un título atractivo para tus futuros Friends" required>
                        </div>
                    </div>


                    <div class="form-group row">
                    <label for="experience_thumbnail" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Agregue una imagen destacada</label>
                    <div class="col-sm-10">
                       <input type="file" name="experience_thumbnail" id="experience_thumbnail" class="form-control" required>
                       <span>Medida de 1920x720 o foto en formato horizontal (Max: 3 MB)</span>
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="experience_thumbnail" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Tags</label>
                      <div class="col-sm-10">
                                  
                      @foreach($tags as $tag)
                     <div class="checkbox my-2">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox"
                           class="custom-control-input"  id="customCheck{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                           <label class="custom-control-label" for="customCheck{{ $tag->id }}" >{{ $tag->name }} </label>
                        </div>
                     </div>
                     @endforeach       

                      </div>
                    </div>

                    
                   

                  

                     <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                           <p>Disponibilidad para ofrecer tu experiencía</p>
                         </div>
                     </div>


                     <div class="form-group row">
                     <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Desde:</label>
                         
                         <div class="col-sm-5">
                          
                          <select name="initial_schedule_hour" id="initial_schedule_hour" class="form-control">
                          
                                  @for($i = 0; $i <= 23; $i++)
                                       @if($i < 10)
                                       <option value="0{{$i}}">0{{$i}}</option>
                                       @else
                                       <option value="{{$i}}">{{$i}}</option>
                                       @endif
                                  @endfor
                          

                          </select>
                          <span>Horas</span>

                        </div>
                        <div class="col-sm-5">
                        
                          <select name="initial_schedule_minute" id="initial_schedule_minute" class="form-control">
                                 <option value="00">00</option>
                                 <option value="15">15</option>
                                 <option value="30">30</option>
                                 <option value="45">45</option>
                          </select>
                          <span>Minutos</span>

                        </div>
                     </div> 


                     <div class="form-group row">
                     <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Hasta:</label>
                        <div class="col-sm-5">
                          <select name="final_schedule_hour" id="final_schedule_minute" class="form-control">
                                   @for($i = 0; $i <= 59; $i++)
                                       @if($i < 10)
                                       <option value="0{{$i}}">0{{$i}}</option>
                                       @else
                                       <option value="{{$i}}">{{$i}}</option>
                                       @endif
                                  @endfor
                          </select>      
                          <span>Horas</span>
                 
                        </div>
                        <div class="col-sm-5">

                          <select name="final_schedule_minute" id="final_schedule_minute" class="form-control">
                                 <option value="00">00</option>
                                 <option value="15">15</option>
                                 <option value="30">30</option>
                                 <option value="45">45</option>
                          </select>  
                          <span>Minutos</span>
                     
                       </div>
                     </div>

                     <div class="form-group row">
                     <label for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Duración:</label>
                        <div class="col-sm-5 col-md-5 col-lg-5">
                             <select name="hour_duration" id="hour_duration" class="form-control">
                                  @for($i = 0; $i <= 23; $i++)
                                       @if($i < 10)
                                       <option value="0{{$i}}">0{{$i}}</option>
                                       @else
                                       <option value="{{$i}}">{{$i}}</option>
                                       @endif
                                  @endfor
                             </select>
                             <span>Horas</span>
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-5">
                            <select name="minutes_duration" id="minutes_duration" class="form-control">
                                 <option value="00">00</option>
                                 <option value="15">15</option>
                                 <option value="30">30</option>
                                 <option value="45">45</option>

                             </select>
                             <span>Minutos</span>

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
                                       @if($country->id ==  old('country_id') )   
                                         <option selected value=" {{  $country->id }}">{{  $country->name }}</option>
                                       @else
                                       <option value=" {{  $country->id }}">{{  $country->name }}</option>
                                       @endif  
                                    @endforeach
                              </select>
                            </div>
                     </div>

                    <div class="form-group row">
                         <label  for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Estado</label>
                            <div class="col-sm-10">
                              <select name="state_id" id="state_id" class="form-control" required>
                              </select> 
                            </div>   
                      
                    </div>
                    

                    <div class="row">

                         <label  for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Número máximo de personas</label>
                         <div class="col-sm-10">
                          <input class="form-control" type="number" name="max_people" min="1" title="max_people" value="{{ old('max_people') }}">
                         </div>
                     
                    </div>


         
                    
                    <div class="form-group row">
                        <label for="bio" class="col-sm-12 col-form-label"><span class="text-danger">*</span>Describe tu experiencía:</label>
                      
                        <div class="col-sm-12">
                        
                           <div class="alert alert-info">
                           Explica de forma clara y atractiva la experiencia que ofreces
                           </div>

                           <textarea id="description"  name="description" class="editor"> {!!  old('description') !!} </textarea>
                        </div>
                    </div>
                 
                    <div class="form-group row">
                        <label for="bio" class="col-sm-12 col-form-label"><span class="text-danger">*</span>¿La experiencia tiene restricciones? Agregalas en forma de lista</label>
                        <div class="col-sm-12">
                           <div class="alert alert-info">
                           Tu experiencia puede estar restringida puede ser por edad, condición física, salud, mascotas, cámaras profesionales, etc.                           </div>
                           <textarea id="restrictions"  name="restrictions" class="editor">{!!  old('restrictions') !!}</textarea>
                        </div>
                    </div>
                 


                    <div class="form-group row">
                        <label for="bio" class="col-sm-12 col-form-label"><span class="text-danger">*</span>Tips</label>
                        <div class="col-sm-12">
                           <div class="alert alert-info">
                           Ahora regálale consejos a tus Friends como: no llevar una mochila muy pesada, usar bloqueador solar, llevar calzado adecuado. 
                           </div>
                           <textarea id="tips"  name="tips" class="editor">{!!  old('tips') !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bio" class="col-sm-12 col-form-label"><span class="text-danger">*</span>Agrega gatos extras</label>
                        <div class="col-sm-12">
                           
                           <div class="alert alert-info">
                           <p>Describe los gastos que puedan ocurrir durante la experiencia por ejemplo:<br>
                              Transporte……….$120MXN<br>
                              Renta de equipo…$50MXN<br>
                              Alimentos…………$80MXN<br>
                              Entradas……….....$100MXN<br>
                              Éstos datos son únicamente informativos para el Friend y deberán llevar el dinero necesario el día de la experiencia</p>

                           </div>
                           <textarea class="editor" class="form-control" name="extra_expenses" id="extra_expenses" cols="30" rows="10"
                          placeholder="Describe los gastos que puedan ocurrir durante la experiencia por ejemplo: Transporte……….$120MXN, Éstos datos son únicamente informativos para el Friend y deberán llevar el dinero necesario el día de la experiencia"></textarea>
                      
                        </div>
                    </div>
                 
               
                    <div class="row">
                       <label  for="" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Precio estimado por persona</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="number" step="any" name="estimated_price_per_person" id="estimated_price_per_person" value="{{ old('estimated_price_per_person') }}">

                        </div>
                  </div>

         
                          
                              

                   <div class="row mt-3 mb-5">
                     <div class="col-xs-12 col-sm-12 col-md-12 mt-12">
                            <input type="submit" class="btn btn-lg btn-block" style="background-color:#eb4d32; color:white;" value="PUBLICAR EXPERIENCIA">
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
