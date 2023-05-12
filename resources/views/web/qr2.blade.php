<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
             rel="stylesheet" 
             integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
             crossorigin="anonymous"
            >

</head>


<style>
  body {
    margin:0;
    padding: 0;
    font-family:
  }
  header {
    width:50%;
    margin: auto;
    position:relative;
    height: 300px;
   
  }

  .contenedor {
    width:50%;
    margin: auto;
  }

  img {
    width: 100%;
    height: 280px;
    position: absolute;
    top:0;
    left: 0;
    right: 0;
    bottom: 0;
  }
  .details {
    position: absolute;
    left:50px;
    top: 30px;
    color:#fff;
  }

  .details h4 {
    font-size: 50px;
    margin: 0 0 40px 0;
  }

  .details p {
    margin: 0 0 5px 0;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-style: italic

  }

  main {
    background: #1A948D;
    color: #fff;
    right: 0px;
    bottom: -10px;
    width:50%;
    position: absolute;
    height: 100px;
    display: flex;
    align-items: center;
    text-align: center;
    height: 100px;
    justify-content: center;
    flex-direction: column;
   
  }
  main p {
    margin:0;
    text-align: right;
    font-size: 22px;
    font-weight: 600;
    float: left;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  
  }
  .contenido {
    margin-top: 40px;
  }

  .contenido p {
    margin: 0px 5px 0px 0px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    
  }

  .images {
     position: relative;
     width: 100%;
     margin-top: 90px;
  }

  .images .img1{
    position: absolute;
    top: 20px;
    right: 10px;
    width: 50%;
    margin-left: 230px;
  }

  .images .img2{
    position: absolute;
    top: 100px;
    left: 50px;
    width: 50%;
    margin-right: 300px;
  }
  .tarjeta {
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    background: #eee;
    width:100%;
  }

  @media(max-width:500px){
    .contenedor {
      width: 90%;
    }
    header {
      width:100%;
    }
    main {
      display: none
    }

    .images {
      margin-top: -20px;
    }

    .images .img1{
      margin-left: 180px;
    
    }

    .images .img2{
      margin-right: 0px;
    }

    .contenido {
      margin-top: 400px;
      
    }

   
  }


 
  form {
    padding: 50px 40px 20px 40px;
  }
  
  input, select {
    width:100%;
    border:none;
    outline:none;
    border:2px solid #ddd;
    padding: 5px 10px;
    border-radius: 15px;
  }

  .boton {
    text-align: right
  }
  button {
    background: #002855 ;
    color:#fff;
    font-weight: bold;
    border:none;
    outline:none;
    padding: 5px 20px;
    border-radius: 15px
  }

  .autorizacion{
    display: flex;
    gap: 10px
  }

  .autorizacion .checkbox{
    height: 20px;
    width:20px;

  }


  .autorizacion label {
    font-size: 12px;
    text-align: justify; 
    color:#555;
  }

  input::placeholder {
    font-size: 12px;
    color:rgb(165, 164, 164);
  }



</style>

<body>
  <header>
     <img src="https://i.ibb.co/F0hNSxS/Header.jpg" alt="">
     <div class="details">
      <h4>Konecta</h4>
     <p>Conectamos empresas</p>
     <p>Conectamos personas</p>
     <p>Conectamos contigo</p>
     </div>
     <main>
      <p>Aliados de más de 300 empresas</p>
      <p> alrededor del mundo</p>
   </main>
  </header>

   <div class="contenedor">
     <div class="row">
        <div class="col-md-6">
          <div class="images">
            <img src="https://i.ibb.co/xLf8WB6/a.jpg" class="img1" alt="">
            <img src="https://i.ibb.co/Fh38sfv/b.jpg" class="img2" alt="">
          </div>
        </div> 

        <div class="col-md-6 contenido col-sm-12">
           <p>Contigo seguiremos creando experiencias superiores.</p>
           <p><strong> Sigamos en contacto:</strong></p>

           <div class="tarjeta">
               <form action="../public/formulario_qr" {{-- action="{{route('qr')}}" --}} method="post">
                @csrf
                  <div class="mb-2">
                    <input type="text" name="nombre" placeholder="Nombre completo" value="{{old('nombre')}}">
                    @error('nombre')
                      <small class="text-danger">
                        {{ $message }}
                      </small>
                    @enderror
                  </div>

                  <div class="mb-2">
                    <input type="text" name="apellido" placeholder="Apellido completo" value="{{old('apellido')}}">
                    @error('apellido')
                    <small class="text-danger">
                       {{ $message }}
                     </small>
                    @enderror
                  </div>

                  <div class="mb-2">
                    <input type="text" name="cedula" placeholder="Cedula y/o Identificacion " value="{{old('cedula')}}">
                    @error('cedula')
                    <small class="text-danger">
                       {{ $message }}
                     </small>
                    @enderror
                  </div>

                  <div class="mb-2">
                    <input type="text" name="empresa" placeholder="Empresa que representa " value="{{old('empresa')}}">
                    @error('empresa')
                    <small class="text-danger">
                       {{ $message }}
                     </small>
                    @enderror
                  </div>

                  <div class="mb-2">
                    <div class="d-flex">
                      <input type="number"  maxlength="10" name="indicativo" placeholder="Indicativo" value="{{old('indicativo')}}">
                      <input type="number"  maxlength="30" name="telefono" placeholder="Celular" value="{{old('telefono')}}">
                    </div>
                    @error('telefono')
                    <small class="text-danger">
                       {{ $message }}
                     </small>
                    @enderror
                  </div>

                 <div class="mb-2">
                  <select name="visitantes"  placeholder="">
                    <option value="">Seleccione</option>
                    <option value="site visit">Site Visit</option>
                    <option value="proveedor">Proveedor</option>
                    <option value="no aplica">No aplica</option>
                  </select>
                  @error('visitantes')
                  <small class="text-danger">
                     {{ $message }}
                   </small>
                  @enderror
                 </div>
            

                  <div class="mb-2">
                    <input type="text" name="cargo" placeholder="Cargo" value="{{old('cargo')}}">
                    @error('cargo')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                   @enderror
                  </div>

                  <div class="mb-2">
                    <input type="text" name="area" placeholder="Area" value="{{old('area')}}">
                    @error('area')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                   @enderror
                  </div>

                  <div class="mb-2">
                    <input type="text" name="marca" placeholder="Marca" value="{{old('marca')}}">
                    @error('marca')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                   @enderror
                  </div>

                  <div class="mb-2">
                    <input type="text" name="serial" placeholder="Serial" value="{{old('serial')}}">
                    @error('serial')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                     @enderror
                  </div>

                  <div class="mb-2 autorizacion">
                    <input type="checkbox" class="checkbox" required>
                     <label>
                       Autorizo a Konecta (Multienlace S.A.S) para el almacenamiento y gestión de mis datos personales en los términos de la ley 1581 de 2012 para efectos del envío de encuestas, respuesta de solicitudes, invitaciones a eventos corporativos, noticias, felicitaciones y cualquier otro concepto que pueda mejorar el servicio prestado por Konecta y la relación con la compañía. Konecta podrá contactarme a través de correo electrónico, mensaje de texto, WhatsApp, teléfono o mensajería física. Como titular puedo ejercer derechos para conocer, actualizar, rectificar, suprimir y/o revocar el uso de mis datos personales a través del correo electrónico proteccióndedatos@grupokonecta.co o a la dirección de correspondencia Cra 37A No. 8-43 Medellín, Colombia o a los teléfonos (4) 510 57 00 ó (1) 3431920 ​y conocer la política de tratamiento de mis datos en www.grupokonecta.com.co</p>
                     </label>
                  </div>

                  <div class="boton">
                    <button>Enviar</button>
                  </div>
               </form>
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
        title: "Encuesta Enviada Exitosamente",
          timer: 1500
      })   

      /* {{ Session::get('flash') }} */

    </script>
    @endif

    @if(Session::has('validator'))
      <script>

      Swal.fire({
        position: 'center',
        icon: 'success',
        title: "Encuesta Enviada Exitosamente",
          timer: 1500
      })   

        
      const messages = [{ 
        "from": "573022311099",
        "to": "{{ Session::get('validator') }}",
        "content": {
                "templateName": "cek_konecta2",
                "templateData": {
                    "body": {
                        "placeholders": []
                    },
                "buttons":[
                  {
                    "type":"QUICK_REPLY",
                    "parameter":"No"
                  }
                ]
                }, 
                "language": "es"
          },
      
    }]

    function data(){
      fetch('https://89zplr.api.infobip.com/whatsapp/1/message/template ',{
          headers:{
            'Authorization': 'App eed8919c952a529d3d209913823f126f-c154349e-a29c-446a-b1d2-83938b60d658',
            'Content-Type' : 'application/json',
            'Accept' : 'application/json',
          },
          method:'POST',
          body:JSON.stringify({ messages })
        }).then(resp => resp.json())
          .then(data   => console.log(data))
          .catch(err =>console.log(err))
      }

      data()
      </script>
    @endif




</body>
</html>

