<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y condiciones de HOSTFRIENDS</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
            
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-2">
                </div> 
                 <div class="col-xs-12 col-sm-12 col-md-8">
                         <h1 class="text-center">Términos y condiciones de HOSTFRIENDS</h1>
               
                    <p class="text-justify">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi, suscipit voluptas neque iste, optio inventore enim, repellendus nihil dolor dolorem ipsa error blanditiis facilis velit et dolore ea explicabo?
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi, suscipit voluptas neque iste, optio inventore enim, repellendus nihil dolor dolorem ipsa error blanditiis facilis velit et dolore ea explicabo?

                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi, suscipit voluptas neque iste, optio inventore enim, repellendus nihil dolor dolorem ipsa error blanditiis facilis velit et dolore ea explicabo?
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi, suscipit voluptas neque iste, optio inventore enim, repellendus nihil dolor dolorem ipsa error blanditiis facilis velit et dolore ea explicabo?
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi, suscipit voluptas neque iste, optio inventore enim, repellendus nihil dolor dolorem ipsa error blanditiis facilis velit et dolore ea explicabo?
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi, suscipit voluptas neque iste, optio inventore enim, repellendus nihil dolor dolorem ipsa error blanditiis facilis velit et dolore ea explicabo?
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi, suscipit voluptas neque iste, optio inventore enim, repellendus nihil dolor dolorem ipsa error blanditiis facilis velit et dolore ea explicabo?

                    </p>

                    <form action="{{  route('terms')  }}" method="POST">

                        @csrf
                        @method('POST')


                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <input type="checkbox" name="terms"  aria-label="Checkbox for following text input">
                                    </div>


   

                                </div>



                                Acepto los Términos y Condiciones.

                   
                                        </div>


                                        @error('terms')
                    <p class="alert alert-danger error-message">{{ $message }}</p>
                @enderror

                        <input type="submit" class="btn" style="background-color:#ea700b; color:white;" value="CONFIRMAR">

                    </form>
               
                </div>
            </div>
    
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>