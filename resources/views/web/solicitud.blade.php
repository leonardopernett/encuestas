

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet" >
  

<style>
    .h2 {
    color:#10345f;
    font-size: 80px;
    font-weight: bold
  }
  p{
    text-align: justify
  }
  label {
    font-weight: 600
  }
  button{
    border:none;
    outline: none;
    background: #10345f;
    color: #fff;
    padding: 5px 15px;
    margin-top: 5px;
    border-radius: 10px
  }
  small{
    font-weight: bold
  }
  .desabilitado{
    cursor:not-allowed
  }
</style>
  
</head>
<body>
  



  <div class="container mt-2">
    <div class="row">
      <h2 class="text-center pt-3 h2">KONECTA</h2>
      <div class="col-md-6 mx-auto">
 
          <div class="card">
             <div class="card-header">
               <p class="text-justify">
                Solicitud de Carnet
                Diligenciando este cuestionario usted solicita la renovación de carnet y/o tarjeta de acceso por pérdida. Tenga en cuenta que los precios son los siguientes:

                Paquete completo (Carné + tarjeta de acceso) : $50.000 COP

                Para que puedas ingresar a solicitar tu carné, debes acercarte a recepción y firmar el documento de descuento de nómina.

                Es importante que tengas en cuenta que una vez diligenciado este formato, se te desactivará la tarjeta actual y solo se te dará la nueva tarjeta de acceso y/o carné, en el momento en el que firmes el descuento de nómina.

                
               </p>
             </div>
            <div class="card-body">
               <form action="{{ route('solicitud') }}" method="POST">
                @csrf
                 <div class="mb-4">
                    <label for=""> <span class="text-danger">*</span> Cedula</label>
                    <input type="text " name="cedula" value="{{old('cedula')}}" class="form-control @error('cedula') is-invalid  @enderror" placeholder="Cedula">
                    @error('cedula')
                     <small class="text-danger">{{$message}}</small>
                    @enderror
                 </div>

                  <div class="mb-4">
                    <label for=""> <span class="text-danger">*</span> Nombre Completo</label>

                    <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control @error('nombre') is-invalid  @enderror" placeholder="Nombre Completo">
                    @error('nombre')
                     <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>

                  <div class="mb-4">
                    <label for=""> <span class="text-danger">*</span> Solicitud</label>
                    <select name="solicitud" class="form-control @error('solicitud') is-invalid  @enderror" value="{{old('solicitud')}}" >
                      <option value="">Seleccione</option>
                      @foreach ($solicitudes as $item)
                      <option value="{{$item->id}}">{{$item->tipo}}</option>
                      @endforeach
                    </select>
                    @error('solicitud')
                    <small class="text-danger">{{$message}}</small>
                     @enderror
                    
                    </div>

                  <div class="mb-4">
                    <label for=""> <span class="text-danger">*</span>RH - Tipo de sangre</label>
                    <input type="text" name="tipo" value="{{old('tipo')}}" class="form-control @error('tipo') is-invalid  @enderror" placeholder="Tipo Sangre">
                    @error('tipo')
                      <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>

                  <div class="mb-4">
                    <label for=""> <span class="text-danger">*</span>Sede</label>
                    <select name="sede" class="form-control" value="{{ old('sede') }} " @error('sede') is-invalid  @enderror">
                      <option value="">Seleccione</option>
                      @foreach ($sedes as $sede)
                           <option value="{{$sede->id}}"  >{{ $sede->nombre }}</option>
                      @endforeach
                    </select>
                    @error('sede')
                    <small class="text-danger">{{$message}}</small>
                     @enderror
                    
                  </div>
                 <small>Todos los campos con <span class="text-danger">(*)</span> son requeridos</small>
                 <br>
                 <button>Enviar</button>
               </form>
            </div>
          </div>
      </div>
    </div>
  </div>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  @if(session('flash'))
  <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{ session('flash') }}" ,
        showConfirmButton: false,
        timer: 1500
      })
  </script>
  @endif
  

</body>
</html>

