<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Codigo - QR</title>
  <link href="https://bootswatch.com/5/materia/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
</head>
<style>

  body {
    background: #b7dfeb;
    

  }
  .container-fluid {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 10px;
  
  }
  .card {
    border-radius: 10px 10px 10px 0px;
    margin: 0px 10px !important;
  }
  .card-header {
    background: #10345f;
    color:#fff;
    overflow: hidden;
    border-radius: 10px 10px 10px 0px;
  }

  label, small{
    font-weight: 500
  }

  button {
    background: #10345f !important;

  }

  img {
    width:100%;
    height: 525px;
  }

  .h2 {
    color:#10345f;
    font-size: 80px;
    font-weight: bold
  }
  small{
    font-size: 12px;
    text-align: justify !important;
  }
  span{
    font-weight: 600
  }

  @media (max-width:500px){
    .h2{
      display:none
    }
  }

  .spinner {
    border :3px solid #fff;
    width:20px;
    height: 20px;
    margin-left: 10px;
    border-left-color: #10345f;
    border-radius: 50%;
    display: block;
    animation: spin linear 1s infinite
  }
  .hide {
    display:none;
  }


  @keyframes spin {
    0%{
      transform: rotate(0deg)
    }

    100%{
      transform: rotate(365deg)
    }
  }
  span{
    font-size: 12px;
    margin-bottom: 20px
  }
  small {
    font-weight: bold;
    margin-top: 10px;
  }
  input,
  input::placeholder{
    color:#dddd;
  }
</style>
<body>
  

<div class="container">
<h2 class="text-center pt-5 h2">KONECTA</h2>
</div>

<div class="container mt-5">

  <div class="row">
    <div class="col-md-10 mx-auto px-0">
      <div class="card">
        <div class="card-header">
          <h5 class="">Formulario de encuesta visitantes Konecta</h5>
        </div>
        <div class="card-body">
            {{-- start form --}}
          <form action="{{route('qr')}}" class="row" method="POST">
           @csrf


            <div class="col-md-6">
 
              <div class="mb-2">
                 <input type="text" name="nombre" value="{{old('nombre')}}" placeholder="Nombre Completo *" class="form-control">
               
                   @error('nombre')
                    <small class="text-danger"> {{ $message }}   </small>
                   @enderror
              
              </div>

              <div class="mb-2">
                <input type="text" name="apellido" value="{{old('apellido')}}" placeholder="Apellido Completo *" class="form-control">
                @error('apellido')
                <small class="text-danger"> {{ $message }}   </small>
               @enderror
              </div>

              <div class="mb-2">
                <input type="number" name="cedula" value="{{old('cedula')}}"  placeholder="Cedula y/o Identificacion *" class="form-control">
                   @error('cedula')
                    <small class="text-danger"> {{ $message }}   </small>
                   @enderror
             </div>

              <div class="mb-2">
                <input type="text" name="empresa" value="{{old('empresa')}}" placeholder="Empresa que representa *" class="form-control">
                @error('empresa')
                <small class="text-danger"> {{ $message }}   </small>
               @enderror
             </div>

            




            </div>
           
          
            <div class="col-md-6">

            
       
              <div class="mb-2">
                <input type="text" name="cargo" value="{{old('cargo')}}" placeholder="Cargo *" class="form-control">
                     @error('cargo')
                      <small class="text-danger"> {{ $message }}   </small>
                     @enderror
              </div>
  
            
  
            
  
             <div class="mb-2">
            
            </div>
  
  
            <div class="mb-2">
              <input type="text" name="area" placeholder="Area *" value="{{old('area')}}" class="form-control">
              @error('area')
              <small class="text-danger"> {{ $message }}   </small>
             @enderror
           </div>
  

        
       
          
          <div class="mb-2">
            <input type="text" name="marca" value="{{old('marca')}}" placeholder="Marca *" class="form-control">
               @error('marca')
               <small class="text-danger"> {{ $message }}   </small>
              @enderror
         </div>


          <div class="mb-2">
            <input type="text" name="serial" placeholder="Serial *" class="form-control" value="{{old('serial')}}">
            @error('serial')
            <small class="text-danger"> {{ $message }}   </small>
           @enderror
           </div>


           </div>
          
           <div class="my-2">
            <small>Autorizo a Konecta (Multienlace S.A.S) para el almacenamiento y gestión de mis datos personales en los términos de la ley 1581 de 2012 para efectos del envío de encuestas, respuesta de solicitudes, invitaciones a eventos corporativos, noticias, felicitaciones y cualquier otro concepto que pueda mejorar el servicio prestado por Konecta y la relación con la compañía. Konecta podrá contactarme a través de correo electrónico, mensaje de texto, WhatsApp, teléfono o mensajería física. Como titular puedo ejercer derechos para conocer, actualizar, rectificar, suprimir y/o revocar el uso de mis datos personales a través del correo electrónico proteccióndedatos@grupokonecta.co o a la dirección de correspondencia Cra 37A No. 8-43 Medellín, Colombia o a los teléfonos (4) 510 57 00 ó (1) 3431920 ​y conocer la política de tratamiento de mis datos en www.grupokonecta.com.co</p>
           </small>

           <input  type="checkbox" required> <span>Acepto las condiciones</span>
             <br>
           <small class="text-danger text-bold">Todos los campos (*) son obligatorios</small>
                   
          <div class="my-2">
            <button class="btn btn-primary d-flex align-items-center">Enviar encuesta <div id="spinner" class="spinner hide"></div> </button>
           </div>
          </form>
          {{-- end form --}}
        </div>
      </div>
    </div>
  </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" > </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(Session::has('flash'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Datos enviados exitosamente',
  timer: 1500
})
   
</script>



@endif

</body>
</html>