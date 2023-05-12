@extends('layout.app')


@section('styles')
<style>

  .swal2-styled.swal2-confirm {
    background: #21355e !important;
    border:none !important;
  }

     .hide {
       display: none;
     }

     .authorizacion{
        text-align: justify;
        font-size: 10px
     }
    
       .form-control{
         height: 32px;
       }
       .contenido{
           margin-top:30px;
           z-index: 5;
       }
      .btn-primary{
          background: #21355e;
          border:none
      }

      .btn-primary:hover{
          background: #1B2C4D;
          border:none
      }

      .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px
      }
      .hide {
        display:none;
      }


      .autocomplete {
  position: relative;
  display: inline-block;
}

/* input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
} */

input[type=text] {
  background-color: #fff;
  width: 100%;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
.cent{
  font-size:1.6rem;
  text-align: justify
}


.content{
  border:2px dotted #1B2C4D;
  width: 100%;
  height: 80px;
  padding: 10px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.title {
  font-size: 16px;
}

.file{
  width: 100%;
  height: 75px;
  position:absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  opacity: 0
}

@media (max-width: 600px) {
  .cent {
    font-size:1.2rem !important
  }
}

.hide {
  display: none
}
    
    </style>  
@endsection

@section('content')

  <div class="row contenido" >
      <div class="col-md-12 mx-auto">
          <div class="card">
              <div class="card-header p-4"> 
                <h6 class="cent">
                  {{__('Para Konecta es muy importante atender tus solicitudes y PQRS (peticiones, quejas, reclamos o sugerencias) si eres cliente corporativo Konecta Colombia puedes diligenciar el formulario que encontrarás a continuación')}}.
                </h6>
              </div>
             <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        {{-- ../public/contact --}}
                       <form  action="{{route('contact')}}" method="POST" enctype="multipart/form-data" id="form">
                         @csrf
                           <div class="mb-2">
                               <label for=""> <small class="asterisco">*</small> {{__('Tipo de petición')}}: </label>
                               <select name="tipo" class="form-control" value="{{ old('tipo')  }}">
                                   <option value="">{{__('Seleccione')}}</option>
                                   @foreach ($solicitud as $item)
                                     <option value="{{ $item->id }}" {{old('tipo') ==  $item->id ? 'selected':''}} >{{ $item->tipo_de_dato }}</option> 
                                   @endforeach
                               </select>
                               @error('tipo')
                                 <small class="text-danger">{{$message}}</small>  
                               @enderror
                           </div>
                           
                          {{--  <div class="mb-2">
                            <label for=""> <small class="asterisco">*</small> {{__('Areas')}}: </label>
                    
                            <select name="area" id="area" class="form-control">
                              <option value="">Seleccione</option>
                               @foreach ($areas as $area)
                                 <option value="{{ $area->id }}">{{ $area->nombre }}</option> 
                               @endforeach
                            </select>
                         </div>
 --}}

                        {{--  <div class="mb-2 hide" id="principal"> 
                          <label for=""> <small class="asterisco">*</small> {{__('Tipologia')}}:</label>

                            <select name="tipologia" class="form-control" id="tipologias"> </select>
                         </div> --}}
                           <div class="mb-2">
                              <label for=""> <small class="asterisco">*</small> {{__('Nombre Completo')}}:</label>
                              <input type="text" name="nombre" class="form-control  @error('nombre') ? 'is-invalid' : 'is-valid' @enderror }}" placeholder="{{__('Nombre Completo')}}" value="{{ old('nombre') }}">
                                @error('nombre')
                                   <small class="text-danger">{{ $message}}</small>  
                                @enderror
                              
                           </div>

                           <div class="mb-2">
                            <label for=""> <small class="asterisco">*</small> {{__('Identificación')}}:</label>
                            <input type="text" name="identificacion" class="form-control" placeholder="{{__('Identificación')}}" value="{{ old('identificacion') }}">
                                @error('identificacion')
                                   <small class="text-danger">{{ $message}}</small>  
                                @enderror
                         </div>


                         <div class="mb-2">
                            <label for=""> <small class="asterisco">*</small>{{__('Email (Registrado en el formulario tratamiento de datos clientes corporativos)')}}:</label>
                            <input type="email" name="email" class="form-control" placeholder="{{__('Email')}}" value="{{ old('email') }}">
                            @error('email')
                              <small class="text-danger">{{$message}}</small>  
                            @enderror
                         </div>

                         <div class="mb-2">
                            <label for=""> <small class="asterisco">*</small> {{__('Empresa')}}:</label><br>

                            <div class="autocomplete" style="width:100%;">
                              <select name="cliente" id="" class="form-control js-example-basic-single">
                                  @foreach ($jarvis as $j)
                                       <option value="{{$j->cliente}}">{{$j->cliente}}</option>
                                  @endforeach
                              </select>
                            </div>
                       
                            @error('cliente')
                              <small class="text-danger">{{$message}}</small>  
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for=""> <small class="asterisco">*</small> {{__('Mensaje')}}:</label>
                            <textarea name="message" maxlength="255" id="message" class="form-control" style="height: 120px" cols="20" placeholder="{{__('Escribe tu mensaje')}}">{{old('mensaje')}}</textarea>
                            <small class="contador"><span id="contador">0</span> <span>/255</span></small>
                            @error('message')
                              <small class="text-danger">{{$message}}</small>  
                            @enderror
                         </div>

                         <div class="mb-2" style="gap:5px" >
                           
                           <p class="autorizacion" style="text-align: justify; font-size:12px;margin-bottom:0px" >{{__('Autorizo a Konecta (Multienlace S.A.S) para el almacenamiento y gestión de mis datos personales en los términos de la ley 1581 de 2012 para efectos del envío de encuestas, respuesta de solicitudes, invitaciones a eventos corporativos, noticias, felicitaciones y cualquier otro concepto que pueda mejorar el servicio prestado por Konecta y la relación con la compañía. Konecta podrá contactarme a través de correo electrónico, mensaje de texto, WhatsApp, teléfono o mensajería física. Como titular puedo ejercer derechos para conocer, actualizar, rectificar, suprimir y/o revocar el uso de mis datos personales a través del correo electrónico proteccióndedatos@grupokonecta.co o a la dirección de correspondencia Cra 37A No. 8-43 Medellín, Colombia o a los teléfonos (4) 510 57 00 ó (1) 3431920 ​y conocer la política de tratamiento de mis datos en www.grupokonecta.com.co') }} <br>
                            <div class="d-flex align-items-center">
                              <small class="pe-2" style="font-size:12px;">{{__('Acepto las condiciones')}}</small>
                              <input type="checkbox" name="autorizacion" class="form-ckeck-input mr-2" @if(old('autorizacion')) checked @endif>
                            </div>
                          </p>
                          
                          </div>
                           @error('autorizacion')
                              <small class="text-danger" style="">{{$message}}</small>  
                           @enderror
                           <label for="">{{__('cargar archivo')}} 1:</label>
                         <div class="mb-2 content">
                            <label for="" class="title me-2" id="title1">{{__('seleccione o arrastre el archivo')}}</label> <i class="fa fa-upload fa-1x" aria-hidden="true"></i>
                            <input 
                              type="file"
                               id="file1" 
                               class="form-control file" 
                               accept=".pdf, .xlsx,.xls,.doc,.docx,.png,.jpg,.jpeg, .ppt,.rar,.zip" 
                               name="file1"
                              >

                           {{--  <p style="font-size: 11px; margin-bottom:0px">Archivo max 10mb</p>
                          <p  style="font-size: 11px">Archivos permitidos: pdf, xlsx, xls, doc, docx, png, jpg, jpeg</p> --}}
                            @error('file')
                               <small class="text-danger" style="">{{$message}}</small>  
                            @enderror
                         </div>
                        
                        
                       <p style="font-size: 11px; margin-bottom:0px">{{__('File max')}} 10mb</p>
                       <p  style="font-size: 11px">{{__('Files allowed')}}: pdf, xlsx, xls, doc, docx, png, jpg, jpeg</p>

                         <small class="text-danger">
                            @if (Session::has('flash'))
                                {{ Session::get('flash') }}                  
                            @endif
                       </small>
                         <div class="g-recaptcha ml-3 mb-3" data-theme="light" data-sitekey="6LegZbIcAAAAAKBdSmx7yQU0FLRKFSEMAS-ZBdpS"></div>
                         
    
                         <small class="campos">{{__('Los campos')}} <span class="text-danger">( * )</span> {{__('son requeridos')}}</small>
                         <div class="d-grid">
                             <button class="btn btn-primary">{{__('Enviar')}}</button>
                             <div class="spinner"></div>
                         </div>

                       </form>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center mt-3 hidden">
                        <img src="../public/images/send.png" alt="" width="500" class="img-fluid "> 
                     
                    </div>
                </div>
             </div>
          </div>
      </div>
  </div>
 
  

@endsection

{{-- 
 
  --}}


@section('scripts')
    
    @if(session('message'))
    <script>
        toastr.info("Su solicitu fue enviada exitosamente ")
        console.log('eejcutandose')
    </script>
    @endif

    @if(session('rechapcha'))
    <script>
        toastr.error(" "  + @lang('Por favor completar el reCAPTCHA') + " ")
    </script>
    @endif


    @if(session('flash'))
     <script>
        Swal.fire({
          icon: 'error',
          title: 'Ups... no esta registrado en nuestra base de datos de clientes Colombia. Para atenderte escribenos ',
          text: 'experienciadelcliente_colombia@grupokonecta.com',
          
        })
     </script>
    @endif

   <script>

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    let tipologias = document.getElementById('tipologias')
    let principal = document.getElementById('principal')

    document.getElementById('area').addEventListener('change', async (e)=>{
       const response = await fetch('buscar/tipologia/'+e.target.value)
       const data = await response.json()
       tipologias.innerHTML =""
       principal.classList.remove('hide')
       data.forEach(item =>  tipologias.innerHTML +=` <option value="${item.id}">${item.tipologia}</option> `)
    })


    document.getElementById('file1').addEventListener('change',(e)=>{
    console.log(e.target.name)
      document.getElementById('title1').innerHTML=e.target.files[0].name
   })

   document.getElementById('file2').addEventListener('change',(e)=>{
    console.log(e.target.name)
      document.getElementById('title2').innerHTML=e.target.files[0].name
   })
  </script>
  
 
@endsection



