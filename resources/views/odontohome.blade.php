
<!--
=========================================================
Material Dashboard PRO - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard-pro
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

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

 
  <!-- End Google Tag Manager -->
</head>

<body class="off-canvas-sidebar">

  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('img/login.jpg') }}'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
               <form method="POST" action="{{ route('login') }}">
                        @csrf

              <div class="card card-login card-hidden">
                <div class="card-header  card-header-primary text-center">
                  <h4 class="card-title">Inicio de Sesión</h4>
                  
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">
                    <img src="{{asset('img/logo_min.png')}}">
                  </p>
                 
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" class="form-control " name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
            
                    </div>
                  </span>
                  <br>
                  <span class="bmd-form-group">
                    <div class="input-group ">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control"  name="password" placeholder="Contraseña">

                    </div>

                                
                  </span>
                  <br>

                   <span class="bmd-form-group">
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                           <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Recordarme') }}
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-primary btn-link btn-lg">Ingresar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

 
  <script type="text/javascript">

 
@if ($errors->any())
 Swal.fire({
  title: 'Validación',
  icon: 'error',
  html:'<ul>@foreach ($errors->all() as $error)<li class="pull-left">{{ $error }}</li>@endforeach</ul>'
 });
 @endif
  </script>
 
  <!-- Sharrre libray -->

  
</body>

</html>