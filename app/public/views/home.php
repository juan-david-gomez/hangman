<!DOCTYPE  html>
<!--cargamos nuestro modulo en la etiqueta html con ng-app-->
<html lang="es" ng-app="hangman">
<head>
    <meta charset="UTF-8" />
    <title>Hangman</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <link rel="stylesheet" href="css/app.css"> <!-- load fontawesome -->
</head>
<body ng-controller="main">


 <div class="container-fluid">
 	<div class="row-fluid">
 		<div class="col-xs-4 col-xs-offset-4 center">
 			<h1>Hangman</h1>
 		</div>
 	</div>
	<div class="row-fluid">
		<div class="col-xs-6 center">
			<h3>Categorias</h3>
		</div>
		<div class="col-xs-6">
			<select id="categories" ng-model="selectedCategory" ng-change="getrRandomWord()">
				<option  ng-repeat="category in categories"  value="{{category.id}}">{{category.name}}</option>
			</select>
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-xs-12">
			 <div class="wordContainer">
			 	<div class="wordItem" ng-class="!(isSpace(letter)) ?'wordLetter':''" ng-repeat="letter in wordHidden track by $index" >
			 		<h3>{{letter}}</h3>
			 	</div>
			 </div>
			
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-xs-6">
			
			<div class="wordContainer">
			 	<div class="wordItem wordLetterErr" ng-repeat="letter in errorLetters track by $index" >
			 		<h3>{{letter}}</h3>
			 	</div>
			</div>
	  
		</div>
		<div class="col-xs-6">
			Dibujo hangman
		</div>
	</div>
 </div>
	 <input type="text" ng-model='letterTry' ng-change="validLetter(letterTry)">


    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>