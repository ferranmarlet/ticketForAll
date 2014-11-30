<!DOCTYPE html>
<html lang="es" ng-app='ticketforall'>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticket For All!</title>

    <!-- Styles -->
    <link href="frontEnd/fonts/Lato.css" rel="stylesheet">
    <link rel="stylesheet" href="frontEnd/css/bootstrap.css" media="screen">
    <link href="frontEnd/css/bootswatch.min.css" rel="stylesheet">
  </head>
  
  <body>
    <!-- Top navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#/inici" class="navbar-brand"><img src = "frontEnd/img/icon.png" width ="25" height"25" ></a>
          <a href="#/inici" class="navbar-brand">Ticket For All!</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="#/ticket">Consultar Tiquet</a>
            </li>
            <li><a href="#/periodesAbsencia">Gestionar periodes d'abs�ncia</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="" id="A1">Consultes <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="">Diaris bescanviats</a></li>
                <li><a href="">Quioscs Propers</a></li>
                <li><a href="">Tutorial d'utilitzaci�</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href=""><img src = "frontEnd/img/usr.png" width ="25" height"25" > Paco Martinez </a></li>
            <li><a href=""><img src = "frontEnd/img/logout.png" width ="15" height"15" ></a></li>
          </ul>

        </div>
      </div>
    </div>
    
    <!-- Content -->
    <div ng-view></div>
    
    <!-- Footer -->
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled">
                        <li><a href="#/avisLegal" >Avis legal</a></li>
                        <li><a href="#privacitat" >Politica de privacitat</a></li>
                        <li><a href="#/cookies" >Politica de cookies</a></li>
                        <li><a href="#/contactar">Contactar</a></li>
                        <li><a href="#/faq">Consultar FAQ</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <!-- Libs -->
    <script src="frontEnd/js/libs/jquery-1.11.1.min.js"></script>
    <script src="frontEnd/js/libs/bootstrap.min.js"></script>
    <script src="frontEnd/js/libs/bootswatch.js"></script>
    <script src="frontEnd/js/libs/angular.min.js"></script>
    <script src="frontEnd/js/libs/angular-route.min.js"></script>
    <script src="frontEnd/js/libs/angular-translate.min.js"></script>

    <!-- App scripts -->
    <script src="frontEnd/js/app.js"></script>
    <script src="frontEnd/js/controllers.js"></script>
    <script src="frontEnd/js/directives.js"></script>
    <script src="frontEnd/js/services.js"></script>

  </body>
</html>