<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SistePost</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href={{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }} integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/media.css') }}" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="shortcut icon" href="img/idea_lamp_pencil_graphic_design_icon_142328.png" >
    <style type="text/css">
      .font{
        font-size: 50px;
        color: green;
        font-family:Georgia, 'Times New Roman', Times, serif;
      }
      .nav1{
        border-radius: 10px;
      }
    </style>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="textoNavbar">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
          <a class="nav-link text-white" href="#">SistemPost</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="manager">Minhas Publicações</a> 
    </li>
      <li class="nav-item">
      <a class="nav-link text-white" href="#">Sobre</a> 
      </li>
      <li>
        <div class="btn-group nav-item">
          <button type="button" class="btn text-white btn-dark dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pefil
          </button>
          <div class="dropdown-menu bg-dark">
            <a class="dropdown-item bg-dark text-white" href="#">Meu Perfil</a>
            <a class="dropdown-item bg-dark text-white" href="/loggout">Sair</a>
            
            
        </div>
      </li>
      @foreach($usertable as $i)
      @if($i->id == auth()->user()->id and $i->picture != null)
      <ul class="navbar-nav float-right" style="margin-left: 85vh;">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{$i->picture}}" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="#"><i class="ti-user m-r-5 m-l-5"></i>Meu Perfil</a>
        
                                <a class="dropdown-item" href="/loggout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Sair</a>
                            </div>
                        </li>
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
      </ul>
    <!--</ul>
      <ul class="navbar-nav mr-auto ml-auto">
        <li class="nav-item">
           <span style="color: greenyellow;">Bem vindo {{auth()->user()->name}} <img height="45px" width="70px" src="img/user.png" alt=""><a href="/loggout" style="color: yellowgreen;">Sair</a></span>
       </li>
     
      </ul>
      -->
@else
<ul class="navbar-nav float-right" style="margin-left: 85vh;">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://cybercodeforum.herokuapp.com/img/perfil1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="#"><i class="ti-user m-r-5 m-l-5"></i>Meu Perfil</a>
        
                                <a class="dropdown-item" href="/loggout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Sair</a>
                            </div>
                        </li>
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
      </ul>
@endif
@endforeach 
  </div>
</nav>





  

<!-- Footer -->
<footer class="page-footer bg-secondary font-small teal pt-4" style="margin-top: 92vh;">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Content -->
        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Guilherme</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>