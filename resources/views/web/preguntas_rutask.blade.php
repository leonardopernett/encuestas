<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="../public/images/experience_favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Encuesta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha384-R334r6kryDNB/GWs2kfB6blAOyWPCxjdHSww/mo7fel+o5TM/AOobJ0QpGRXSDh4" crossorigin="anonymous">
</head>
<style>
    .form-sl{
        width:20%;
    }
    .tabs{
        display: flex!important;
        align-content: center;
        height: 100%!important;
    }
    .logok{
        display: flex;
    justify-content: space-around;
    }
    }
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
  <section class="vh-100" style="height: 113vh!important;">
  <div class="container-fluid h-custom">
    <div class="row d-flex tabs justify-content-center align-items-center h-100">
      <div class="col-md-12 col-lg-12 col-xl-12 logok">
        <img src="../public/images/logo.png"
          class="img-fluid" alt="Sample image" style="max-width: 16%;">
      </div>
      <div class="col-md-12 col-lg-12 col-xl-12 offset-xl-1">
        <form action="{{ route('respuestas_rutask') }}" method="POST" >
          @csrf
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0"></p>
            </div>
            <p><b>Selecciona de 1 a 5, donde cinco (5) es la calificación más alta y uno (1) la calificación más baja.</b></p>
            <!-- PREGUNTA 1 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">¿Cuál es tu satisfacción general de la Ruta K de aprendizaje para tu rol?</label>
                <select name="preg8" class="form-sl form-select @if('preg8') 'error' @endif">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option> 
                    <option value="5">5</option>                   
                    @error('preg8')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
                <!-- PREGUNTA 2 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">De acuerdo con los temas expuestos y la experticia del facilitador(a) ¿Cuál es tu nivel de satisfacción de los espacios sincrónicos?</label>
                <select name="preg9" class="form-sl form-select @if('preg9') 'error' @endif">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option> 
                    <option value="5">5</option>                   
                    @error('preg9')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
               <!-- PREGUNTA 3 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">¿Qué  tan útiles consideras fueron los recursos virtuales de aprendizaje, para el rol que vas a desempeñar?</label>
                <select name="preg10" class="form-sl form-select @if('preg10') 'error' @endif">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option> 
                    <option value="5">5</option>                   
                    @error('preg10')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
                   <!-- PREGUNTA 7 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">Cuéntanos si tienes algún comentario o sugerencia.</label>
                <textarea style="width:40%!important;" name="preg11" class="form-sl form-control @if('preg11') 'error' @endif"></textarea>                  
                    @error('preg11')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror                       
            </div><br>
            <input name="documento" type="hidden" value="{{$user->documento}}">
            <div class="text-center text-lg-start mt-4 pt-2">
                <button style="background-color: #002856;" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Registar</button>           
            </div>

        </form>
      </div>
    </div>
  </div>
  <script src="https://www.google.com/recaptcha/api.js?hl={{__('en')}}" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous" ></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha384-Si3HKTyQYGU+NC4aAF3ThcOSvK+ZQiyEKlYyfjiIFKMqsnCmfHjGa1VK1kYP9UdS" crossorigin="anonymous"> </script>
</body>
</html>