
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

     <title>{{ config('app.name', 'Laravel') }}</title>
  
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/material-dashboard.min.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

</head>

<body class="">
  <div class="wrapper ">
      <!-- Navbar left -->
     @include('layouts.nav_left')
      <!-- End Navbar -->
    <div class="main-panel">
       <!-- Navbar top-->
     @include('layouts.nav_top')
      <!-- End Navbar -->
      <div class="content">
    
 
       <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
               <select class="js-example-basic-single form-control" name="state">
                <option value="" disabled="" selected="">Seleccione paciente</option>

               </select>
                  <h4 class="card-title"></h4>
                  <p class="card-category"></p>
                </div>
               
              </div>
         
      
    
    </div>
 
        @yield('content')
      </div>

    <footer class="footer">
        <div class="container">

        
          <div class="copyright float-right">
           
            Copyright, 
            <script>
              document.write(new Date().getFullYear())
            </script>
              &copy; Todos los derechos reservados
           
          </div>
        </div>
      </footer>
    </div>
  </div>
    <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery_rut.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


  <script type="text/javascript">

   $(".rut" ).change(function() {

      var format= formateaRut($(this).val())
      $(this).val(format);
   });

   
    function formateaRut(rut) {

    var actual = rut.replace(/^0+/, "");
    if (actual != '' && actual.length > 1) {
        var sinPuntos = actual.replace(/\./g, "");
        var actualLimpio = sinPuntos.replace(/-/g, "");
        var inicio = actualLimpio.substring(0, actualLimpio.length - 1);
        var rutPuntos = "";
        var i = 0;
        var j = 1;
        for (i = inicio.length - 1; i >= 0; i--) {
            var letra = inicio.charAt(i);
            rutPuntos = letra + rutPuntos;
            if (j % 3 == 0 && j <= inicio.length - 1) {
                rutPuntos = "." + rutPuntos;
            }
            j++;
        }
        var dv = actualLimpio.substring(actualLimpio.length - 1);
        rutPuntos = rutPuntos + "-" + dv;
    }
    return rutPuntos;
}

$(document).ready(function() {
    $('.js-example-basic-single').select2();
     $(".js-example-basic-single" ).change(function() {
      url="{{url('paciente')}}"
     window.location.href = url+"/"+$(this).val()+"/edit";
     })
});
  </script>
  <script type="text/javascript">
@foreach(\App\Paciente::all() as $paciente1)
$(".js-example-basic-single").append('<option value={{$paciente1->id}}>{{$paciente1->nombres}}</option>');
@endforeach


</script>
   @yield('scripts')


</body>

</html>


 


                   
                   
 
                
                  
                

