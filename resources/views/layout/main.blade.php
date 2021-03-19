<!doctype html>
<html lang="es">

<head>
  <title>Almacén</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <!-- sidebar -->
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Almacén
        </a>
      </div>
      @include('layout.partials.drawer_menu')
    </div>

    <div class="main-panel">

      <!-- Navbar -->
      @include('layout.partials.nav')
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">

          <!-- your content here -->

          @yield('contenido')

          <!-- End content -->
        </div>
      </div>

      <!-- pie de página -->
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  Mi empresa
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
      function alert(){
          Swal.fire('Mensaje de SweetAlert')
      }



      const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true
      })

      function toast(){
          Toast.fire({
              icon: 'success',
              title: 'Acción realizada correctamente'
          })
      }
      
  </script>
</body>

</html>