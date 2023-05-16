<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale('es')) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konecta | Quejas - Reclamos</title>

    
    <link rel="shortcut icon" href="../public/k1.png" type="image/x-icon">
    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
    {{-- style --}}
 
    <link rel="stylesheet" href="../public/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha384-R334r6kryDNB/GWs2kfB6blAOyWPCxjdHSww/mo7fel+o5TM/AOobJ0QpGRXSDh4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('styles')

    <style>

    a {
      text-decoration: none;
      color:#21355e;
      font-weight: 500;
      font-size: 16px
    }
    

    a.active {
      border:2px solid #21355e;
      color:#21355e;
      padding: 2px 10px;
      border-radius: 5px
    }

    </style>
</head>
<body>

{{-- <div class="container ">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="text-end mt-3 me-4">
                <a href="{{ url('locale/es') }}" class="{{ session()->get('locale') == 'es' ? 'active me-2' : 'me-2' }}" >@lang('Spanish')</a>
                <a href="{{ url('locale/en') }}" class="{{ session()->get('locale') == 'en' ? 'active' : '' }}">@lang('English')</a>
              </div>
            
        </div>
     </div>
</div> --}}

  {{-- partial --}}
    @include('partial.navbar')
        

    {{-- content --}}
    <div class="container">
        @yield('content')
    </div>


    <div class="container">
        @yield('footer')
    </div>


    {{-- script --}}

    <script src="https://www.google.com/recaptcha/api.js?hl={{__('en')}}" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha384-Si3HKTyQYGU+NC4aAF3ThcOSvK+ZQiyEKlYyfjiIFKMqsnCmfHjGa1VK1kYP9UdS" crossorigin="anonymous"> </script>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="../public/js/vendor/ckeditor/ckeditor.js"></script>
    <script src="../public/js/main.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   {{-- script --}}    
    @yield('scripts')
   

</body>
</html>