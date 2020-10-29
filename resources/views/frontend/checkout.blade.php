@extends('layouts.frontend')
@section('title','Confirmar y Pagar')
@section('content')

<nav class="secondary_nav sticky_horizontal_2">
			<div class="container">
				<ul class="clearfix">
					<li><a href="#description" class="active">Experiencia en: Mexico, CDMX </a></li>
					<li><a href="#reviews">Reviews</a></li>
				
				</ul>
			</div>
		</nav>

    <div class="container">


     

        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12 col-md-3 text-center p-0">
                 <h4>{{ $appointment[0]->title }}</h4>
                 <div class="text-center">
                    <img src="{{ $appointment[0]->experience_thumbnail   }}" alt="{{ $appointment[0]->experience_thumbnail }}" class="img-fluid">
                 </div>
             
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">
              
            
                 <h4>Tu experiencía</h4>


                 <form action="{{ route('pay')  }}" method="POST" id="paymentForm" class="mt-3">
                            @csrf




                            <div class="form-group">
                                <label for="payment_platform">Plataforma</label>
                                <input type="text" class="form-control" name="payment_platform" value="1">
                            </div>

                          

                            <div class="form-group">
                                <input
                                        type="text"
                                   
                                        class="form-control"
                                        name="value"
                                        value="10"
                                      
                                    >                          
                            </div>

                            <div class="form-group">
                                <input  
                                        type="text"
                                        name="currency"
                                        id="currency"
                                        value="usd"
                                        required
                                    >                          
                            </div>

                    

                    
                            <div class="form-group form-row">
                                <div class="col">
                                    <small class="form-text text-mute"  role="alert" >Te redigiremos a PayPal para pago seguro.</small>
                                </div>
                            </div>


                            <div class="text-center mt-3">
                                <button type="submit" id="payButton" class="btn btn-primary btn-lg btn-block">PAGAR CON PAYPAL</button>
                            </div>
                            
                        </form>
              

            </div>
        
        
        </div>
     
    </div>



@endsection
