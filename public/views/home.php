<!DOCTYPE  html>
<!--cargamos nuestro modulo en la etiqueta html con ng-app-->
<html lang="es" ng-app="hangman">
<head>
    <meta charset="UTF-8" />
    <title>Hangman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/app.css"> <!-- load fontawesome -->
</head>
<body ng-controller="main">


 <div class="containerApp">
 	<div class="row-fluid">
 		<div class="col-xs-4 col-xs-offset-4 center">
 			<h1>Hangman</h1>
 		</div>
 	</div>
	<div class="row-fluid">
		<div class="col-xs-4 col-xs-offset-2 center">
			<label for="categories">Categorias</label>
		</div>
		<div class="col-xs-4 center">
			<div class="input-group">
			  <select class="form-control" name="categories" id="categories" ng-model="selectedCategory" ng-change="restart()">
					<option  ng-repeat="category in categories"  value="{{category.id}}">{{category.name}}</option>
			  </select>
		      <span class="input-group-btn">
		        <button class="btn btn-default" ng-click="restart()" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
		      </span>
		    </div>

		</div>
	</div>
	<div class="row-fluid">
		<div class="col-xs-12">
			 <div class="wordContainer">
			 	<div class="wordItem" 
				ng-class="{fullLetterErr: validateMissingIndixes($index), wordLetter: !(isSpace(letter))}" ng-repeat="letter in wordHidden track by $index" >
			 		<h3>{{letter}}</h3>
			 	</div>
			 </div>
			
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-xs-6"  >
			
			<div class="wordContainer" id="letterSpace" ng-keydown="keydownLetter($event)" tabindex="1">
			 	<div class="wordItem wordLetterErr" ng-repeat="letter in errorLetters track by $index" >
			 		<h3>{{letter}}</h3>
			 	</div>
			</div>
			<div ng-hide="typeMgs==''">
				
		  		<div class="alert" ng-class="typeMgs" role="alert">
					<strong>{{titleMsg}}</strong>
					{{bodyMsg}}
		  		</div>
		  		<button type="button" ng-click="restart()" class="btn">Reiniciar</button>
			</div>
		</div>
		<div class="col-xs-6" ng-class="activeAttempt" id="drawSpace">
		</div>
	</div>
 </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!--  <script src="js/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="js/bootstrap.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <!-- <script src="js/angular.min.js"></script> -->
    <script src="js/app.js"></script>
</body>
</html>