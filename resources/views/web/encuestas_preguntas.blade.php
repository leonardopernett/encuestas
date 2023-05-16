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
  <section class="vh-100" style="height: 150vh!important;">
  <div class="container-fluid h-custom">
    <div class="row d-flex tabs justify-content-center align-items-center h-100">
      <div class="col-md-12 col-lg-12 col-xl-12 logok">
        <img src="../public/images/logo.png"
          class="img-fluid" alt="Sample image" style="max-width: 16%;">
      </div>
      <div class="col-md-12 col-lg-12 col-xl-12 offset-xl-1">
        <form action="{{ route('respuestas') }}" method="POST" >
          @csrf
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0"></p>
            </div>

            <!-- PREGUNTA 1 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">1. En general qué tan satisfecho(a) estás con el proceso de capacitación siendo 1 'Muy insatisfecho(a)' y 5 'Muy satisfecho</label>
                <select name="preg1" class="form-sl form-select @if('preg1') 'error' @endif">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option> 
                    <option value="5">5</option>                   
                    @error('preg1')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
                <!-- PREGUNTA 2 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label"> 2. ¿Las actividades que realizó el tutor durante la capacitación te ayudaron a aprender fácilmente?</label>
                <select name="preg2" class="form-sl form-select @if('preg2') 'error' @endif">
                    <option value="Si">Si</option>
                    <option value="No">No</option>               
                    @error('preg2')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
               <!-- PREGUNTA 3 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">3. Durante la capacitación ¿se utilizaron diferentes recursos como vídeos, juegos, entre otros?</label>
                <select name="preg3" class="form-sl form-select @if('preg3') 'error' @endif">
                    <option value="Si">Si</option>
                    <option value="No">No</option>               
                    @error('preg3')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
                <!-- PREGUNTA 4 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">4. Cómo calificas el tiempo empleado para la capacitación:</label>
                <select name="preg4" class="form-sl form-select @if('preg4') 'error' @endif">
                    <option value="El tiempo fue justo">El tiempo fue justo</option>
                    <option value="El tiempo fue muy corto">El tiempo fue muy corto</option>   
                    <option value="El tiempo fue más extenso de lo necesario">El tiempo fue más extenso de lo necesario</option>               
                    @error('preg4')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
               <!-- PREGUNTA 5 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">5. ¿El tutor te realizó el acompañamiento necesario en tu proceso de aprendizaje?</label>
                <select name="preg5" class="form-sl form-select @if('preg5') 'error' @endif">
                    <option value="Si">Si</option>
                    <option value="No">No</option>                
                    @error('preg5')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
                  <!-- PREGUNTA 6 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">6. ¿Las condiciones pactadas frente al pago durante el entrenamiento fueron cumplidas?</label>
                <select name="preg6" class="form-sl form-select @if('preg6') 'error' @endif">
                    <option value="Si">Si</option>
                    <option value="No">No</option>                 
                    @error('preg6')
                    <small class="text-danger"> 
                    <b>{{ $message }}</b>
                    </small>
                    @enderror
                </select>           
            </div><br>
                   <!-- PREGUNTA 7 -->
            <div class="form-outline col-md-12 col-lg-12 col-xl-12">
                <label class="form-label">7. Déjanos conocer tus comentarios frente al proceso de capacitación u otro aspecto</label>
                <textarea style="width:40%!important;" name="preg7" class="form-sl form-control @if('preg7') 'error' @endif"></textarea>                  
                    @error('preg7')
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