<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

      <div class="logo text-center">
       <!--  <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a> -->
        <img src="{{asset('img/logo_min.png')}}">

      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="material-icons">home</i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('paciente.index') }}">
              <i class="material-icons">person</i>
              <p>Pacientes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">calendar_today</i>
              <p>Citas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">account_circle</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">assessment</i>
              <p>Estadisticas</p>
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">settings</i>
              <p>Ajustes</p>
            </a>
          </li>


           <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault(); 
              document.getElementById('logout-form').submit();" >
              <i class="material-icons">login</i>
              <p>Salir</p>
            </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
             </form>
          </li>

         
        </ul>
      </div>
    </div>
