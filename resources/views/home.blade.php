<!DOCTYPE  html>
<!--cargamos nuestro modulo en la etiqueta html con ng-app-->
<html lang="es" ng-app="app">
<head>
    <meta charset="UTF-8" />
    <title>Hangman</title>
</head>
<body>
 <!--creamos el div con la directiva ng-view, aquí será donde
 carguen todas las vistas-->
 <div class="row" ng-view></div>
</body>
</html>