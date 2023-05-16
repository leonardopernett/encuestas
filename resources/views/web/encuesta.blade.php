<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="../public/images/experience_favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha384-R334r6kryDNB/GWs2kfB6blAOyWPCxjdHSww/mo7fel+o5TM/AOobJ0QpGRXSDh4" crossorigin="anonymous">
</head>
<style>
   .error {
      border:2px solid red
   }
   .encuestas {
    
   }
   .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>
<body>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../public/images/logo.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{ route('encuestas') }}" method="POST" >
          @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3"><b>Encuesta Konecta</b></p>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Documento</label>
            <input type="text" name="documento" class="form-control-lg form-control @if('documento') 'error' @endif"
              placeholder="Ingrese documento" />            
            @error('documento')
            <small class="text-danger"> 
              <b>{{ $message }}</b>
            </small>
            @enderror
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button style="background-color: #002856;" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>           
          </div>

        </form>
      </div>
    </div>
  </div>
  <div style="background-color: #002856!important;" class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. Todos los derechos reservados.
    </div>
    <!-- Copyright -->
  </div>
  <script src="https://www.google.com/recaptcha/api.js?hl={{__('en')}}" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous" ></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha384-Si3HKTyQYGU+NC4aAF3ThcOSvK+ZQiyEKlYyfjiIFKMqsnCmfHjGa1VK1kYP9UdS" crossorigin="anonymous"> </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   @if (session()->has('message'))
       <script>
         toastr.error('El usuario no se encuentra registrado')
       </script>
   @endif   
  @if(session('message2'))
  <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Registrado Exitosamente',
        showConfirmButton: false,
        timer: 1500
        })
      })
  </script>
  @endif
</body>
</html>