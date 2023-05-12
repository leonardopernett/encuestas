<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha384-R334r6kryDNB/GWs2kfB6blAOyWPCxjdHSww/mo7fel+o5TM/AOobJ0QpGRXSDh4" crossorigin="anonymous">
</head>
<style>
   .error {
      border:2px solid red
   }
   .encuestas {
    
   }
</style>
<body>
  <div class="container">
    <div class="row" >
       <h4 class="mt-5 text-center encunesta">Encuesta Konecta </h4>
      <div class="col-md-4 mx-auto">
      
          <div class="card">
             <div class="card-body">
                 <form action="{{ route('encuestas') }}" method="POST">
                  @csrf
                   <div class="mb-2">
                     <input 
                        type="text" 
                        name="documento"
                        class=" form-control @if('documento') 'error' @endif" 
                        placeholder="Ingrese documento"
                      >
                      
                        @error('documento')
                          <small class="text-danger"> 
                            <b>{{ $message }}</b>
                          </small>
                        @enderror
                      
                   </div>
                   <button class="btn btn-primary">Acceder encuesta</button>
                 </form>
             </div>
          </div>
      </div>

      <div class="col-md-6">

      </div>
   </div>

  </div>
  <script src="https://www.google.com/recaptcha/api.js?hl={{__('en')}}" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous" ></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha384-Si3HKTyQYGU+NC4aAF3ThcOSvK+ZQiyEKlYyfjiIFKMqsnCmfHjGa1VK1kYP9UdS" crossorigin="anonymous"> </script>

   @if (session()->has('message'))
       <script>
         toastr.error('El usuario no se encuentra registrado')
       </script>
   @endif
</body>
</html>