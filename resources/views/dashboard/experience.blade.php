@extends('layouts.dashboard')
@section('title','HostFriends')
@section('content')

<div class="container">

       
               <div class="row">
                    <div class="col-xs-12">
                      <h4>Publicar Experiencia</h4>
                    </div>  
               </div>


               <form  method="POST" action="{{ route('experience.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')


               
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <input  class="form-control" type="text" name="title" id="title" placeholder="Crea un título atractivo para tus futuros Friends">
                        </div>
                    </div>


                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                     
                      <label for="experience_thumbnail">Agregue una imagen destacada</label>
                      <input type="file" name="experience_thumbnail" id="experience_thumbnail" class="form-control">
                      <span>Medida de 1920x720 o foto en formato horizontal</span>
                      
                      </div>
                    </div>


                     <div class="row pt-2">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                           <p>Ingrese el horario que tienes disponible</p>
                         </div>
                     </div>
                     <div class="row">
                      
                       <div class="col-xs-12 col-sm-12 col-md-6 form-group">

                            <label for="">Desde:</label>
                            <input  class="form-control" type="time" name="initial_schedule" id="initial_schedule">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">

                            <label for="">Hasta:</label>
                            <input  class="form-control" type="time" name="final_schedule" id="final_schedule">
                        </div>
                    </div>


                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                           <p>¿Dónde ofreceras la experiencía?</p>
                         </div>
                     </div>
                     <div class="row">
                      
                       <div class="col-xs-12 col-sm-12 col-md-6 form-group">

                            <label for="">País:</label>
                            <select name="country_id" id="country_id" class="form-control">
                                  @foreach($countries as $country)

                                   <option value=" {{  $country->id }}">
                                      {{  $country->name }}
                                   </option>

                                  @endforeach

                            </select>   

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        
                            <label for="">Estado:</label>

                            <select name="state_id" id="state_id" class="form-control">
                                

                            </select> 

                        </div>
                    </div>
                    

                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                         <label for="">Número máximo de personas</label>
                         <input class="form-control" type="number" name="max_people" min="1" title="max_people">
                       </div>
                    </div>


                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                         <label for="description">Describe tu experiencía</label>
                         <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Explica de forma clara y atractiva la experiencia que ofreces"></textarea>
                      
                      </div>
                    </div>
                 


                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                         <label for="description">¿La experiencia tiene restricciones? Agregalas en forma de lista</label>
                         <textarea class="form-control"  name="restrictions" id="restrictions" cols="30" rows="10" placeholder="Tu experiencia puede estar restringida puede ser por edad, condición física, salud, mascotas, cámaras profesionales, etc."></textarea>
                      
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                         <label for="description">Agrega algunos tips de tu experiencia</label>
                         <textarea class="form-control"  name="tips" id="tips" cols="30" rows="10" placeholder="Ahora regálale consejos a tus Friends como: no llevar una mochila muy pesada, usar bloqueador solar, llevar calzado adecuado, "></textarea>
                      
                      </div>
                    </div>
                 
                 
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                         <label for="description">Agrega gatos extras</label>
                         <textarea class="form-control" name="extra_expenses" id="extra_expenses" cols="30" rows="10"
                          placeholder="Describe los gastos que puedan ocurrir durante la experiencia por ejemplo: Transporte……….$120MXN, Éstos datos son únicamente informativos para el Friend y deberán llevar el dinero necesario el día de la experiencia"></textarea>
                      
                      </div>
                    </div>
                 
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="estimated_price_per_person">Precio estimado por persona</label>
                         <input class="form-control" type="number" step="any" name="estimated_price_per_person" id="estimated_price_per_person">
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
   
@endpush
@endsection