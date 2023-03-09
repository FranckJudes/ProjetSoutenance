<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>Aceuil</title>

    <!-- ====indexF====== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/lineicons.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/materialdesignicons.min.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/fullcalendar.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/fullcalendar.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/main.css'}}" />
  </head>
 <body>
    <main>
        <nav class="navbar navbar-light p-2 bg-primary-subtle shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="container">
              <a  href="" class="navbar-brand">BABILLARD NUMERIQUE</a>
              <form class="d-flex">
                @guest
                  <a href="" class="btn btn-outline-primary me-4" type="submit">Se Connecter</a>
                  <a  href="" class="btn btn-outline-success me-4" type="submit">S'inscrire</a>
                @else
                  <a  href="" class="btn btn-outline-primary me-4" type="submit">Se Deconnecter</a>
                @endguest
              </form>
            </div>
            
      </nav>

      <div class="container text-center">
        <div class="container">
          <H1 class="text-center m-2"><i class="lni lni-nodepad"></i>UNIVERSITE DE YAOUNDE I</H1>
        </div>
        <div class="container p-3">
          <p> DEPARTEMENT INFORMATIQUE - FACULTES DES SCIENCES</p>
        </div>
      </div>

    <div class="container-fluid">
        @yield('content')
    </div>

    <footer class="bg-primary-subtle text-center p-3 text-lg-start">
      
    
      <div class="text-center p-3" style="background-color: rgba(212, 206, 206, 0.2);">
        © 2023 Copyright:
        <a class="text-dark" href="#">Departement Informatique</a>
      </div> 
     
    
    </footer>   
        
    </main>



  <script src="{{'assets/js/bootstrap.bundle.min.js'}}"></script>
  <script src="{{'assets/js/Chart.min.js'}}"></script>
  <script src="{{'assets/js/dynamic-pie-chart.js'}}"></script>
  <script src="{{'assets/js/moment.min.js'}}"></script>
  <script src="{{'assets/js/fullcalendar.js'}}"></script>
  <script src="{{'assets/js/jvectormap.min.js'}}"></script>
  <script src="{{'assets/js/world-merc.js'}}"></script>
  <script src="{{'assets/js/polyfill.js'}}"></script>
  <script src="{{'assets/js/main.js'}}"></script>

</body>
</html>