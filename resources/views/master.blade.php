<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Biblioteca</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/img/favicon/book-svgrepo-com.svg')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/js/config.js')}}"></script>
    
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="overflow: hidden;">
          <div class="app-brand demo">
            <a href="{{ route('home') }}"  class="app-brand-link">
              <span class="app-brand-logo demo">
              <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path id="book-a" d="M0,0 L2,0 L2,17 L0,17 L0,0 Z M8,2 L13,2 L13,7 L8,7 L8,2 Z"/>
                  <path id="book-c" d="M4,1.9047619 C4,1.4050757 4.44771525,1 5,1 C5.55228475,1 6,1.4050757 6,1.9047619 L6,19.0952381 C6,19.5949243 5.55228475,20 5,20 C4.44771525,20 4,19.5949243 4,19.0952381 L4,1.9047619 Z M16,3.93641057 C16.0013195,3.95743741 16.0019891,3.9786405 16.0019891,4 L16.0019891,9 C16.0019891,9.0213595 16.0013195,9.04256259 16,9.06358943 L16,19 C16,20.1045695 15.1045695,21 14,21 L2,21 C0.8954305,21 0,20.1045695 0,19 L0,2 C0,0.8954305 0.8954305,0 2,0 L14,0 C15.1045695,0 16,0.8954305 16,2 L16,3.93641057 Z M14,3 L14,2 L2,2 L2,19 L14,19 L14,10 L8.00198915,10 C7.06385264,10 6.64208667,8.82459947 7.36619702,8.22813967 L9.4641822,6.5 L7.36619702,4.77186033 C6.64208667,4.17540053 7.06385264,3 8.00198915,3 L14,3 Z M10.7888439,5 L11.6728155,5.72813967 C12.158426,6.12814381 12.158426,6.87185619 11.6728155,7.27186033 L10.7888439,8 L14.0019891,8 L14.0019891,5 L10.7888439,5 Z"/>
                </defs>
                <g fill="none" fill-rule="evenodd" transform="translate(4 1)">
                  <g transform="translate(2 2)">
                    <mask id="book-b" fill="#ffffff">
                      <use xlink:href="#book-a"/>
                    </mask>
                    <use fill="#D8D8D8" xlink:href="#book-a"/>
                    <g fill="#FFA0A0" mask="url(#book-b)">
                      <rect width="24" height="24" transform="translate(-6 -3)"/>
                    </g>
                  </g>
                  <mask id="book-d" fill="#ffffff">
                    <use xlink:href="#book-c"/>
                  </mask>
                  <use fill="#000000" fill-rule="nonzero" xlink:href="#book-c"/>
                  <g fill="#7600FF" mask="url(#book-d)">
                    <rect width="24" height="24" transform="translate(-4 -1)"/>
                  </g>
                </g>
              </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">Biblioteca</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Usuario -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Usuario</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('update') }}" class="menu-link">
                    <div data-i18n="Analytics">Actualizar información</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Libros -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Libros</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a
                    href="{{ route('createLibro') }}" 
                    class="menu-link">
                    <div data-i18n="creaUsuario">Crear Libro</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('show_libros') }}"  class="menu-link">
                    <div data-i18n="Analytics">Mostrar Libros</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Prestamos -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Prestamos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('show_prestamos') }}" class="menu-link">
                    <div data-i18n="mostrarPrestamo">Mostrar Prestamos</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Multas -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Multas</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a
                    href="{{ route('show_multas') }}" 
                    class="menu-link">
                    <div data-i18n="mostrarMultas">Mostrar Multas</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Reservas -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboards">Reservas</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('show_reservas') }}" class="menu-link">
                            <div data-i18n="mostrarReserva">Mostrar Reservas</div>
                        </a>
                    </li>
                </ul>
            </li>

      {{-- <!-- Log out -->
      <li class="menu-item d-flex justify-content-center align-items-center mt-3">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">Log out</button>
        </form>
      </li> --}}

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <div class="container">
            @auth
                <form action="{{ url('/logout') }}" method="POST" class="d-flex justify-content-end mt-3">
                    @csrf
                    <button type="submit" class="btn btn-danger">Log out</button>
                </form>
            @else
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ url('/register') }}" class="btn btn-secondary">Registrarse</a>
                    <a href="{{ url('/login') }}" class="btn btn-secondary mx-2">Login</a>
                </div>
            @endauth

            @yield('content')

          </div>
 
            </div>
            <!-- / Content -->

            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
          <div class="">

          </div>
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/vendor/libs/apex-charts/apex-charts.css')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('public/plantilla-bootstrap/sneat-bootstrap-html-admin-template-free/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
