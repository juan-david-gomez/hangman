'use strict';


var app = angular.module('hangman',[]);

app.constant('APIURL','http://localhost:8002/hangman/app/public/index.php');

app.controller('main',['$scope','$http','APIURL',mainFunction]);

function mainFunction($scope,$http,APIURL) {
	
	$scope.wordHidden = [];
	$scope.wordReal   = [];

	$scope.selectedCategory = '-1';
	$scope.categories = [];

	$scope.errorLetters = [];
	var attempts = [''];

	var loadCategories = function () {
		$scope.categories.push({id:'-1',name:'Seleccione'});
		$http.get(APIURL+'/api/categories').success(function (data) {
			data.categories.forEach(function (category) {
				var categoryModel = {
					id : category.id,
					name : category.name,
				};
				$scope.categories.push(categoryModel);
			});
		})
	}

	loadCategories();

	var setWord = function (word) {
		var wordArrayHidden = [];
		var wordArrayReal = [];
		for (var i = 0; i < word.length; i++) {
		    var letter = word.charAt(i).toUpperCase();
		    wordArrayReal[i] = letter;
		    wordArrayHidden[i] = isSpace(letter) ? ' ':'';
		}
		$scope.wordHidden = wordArrayHidden;
		$scope.wordReal = wordArrayReal;
	}

	var isSpace = function (letter) {
		return letter == ' ';
	}
	var getAllIndexes = function (arr, val) {
    	var indexes = [], i;
    	var value = val.toUpperCase();
	    for(i = 0; i < arr.length; i++)
	        if (arr[i] === value){
	            indexes.push(i);
	        }
	    return indexes;
	}
	var validLetter = function (letter) {
		
		if (letter.length <= 0)return;

		var indexes = getAllIndexes($scope.wordReal,letter);
		if (indexes.length > 0) {
			successLetter(letter);
			indexes.forEach(function (indexVal) {
				$scope.wordHidden[indexVal] = $scope.wordReal[indexVal]
			})
		}else{
			errorLetter(letter);		
		}
	}
	var errorLetter = function (letter) {
		console.log('error '+letter);
		$scope.errorLetters.push(letter.toUpperCase());
	}
	var successLetter = function (letter) {
		console.log('success '+letter);
	}

	var getrRandomWord = function () {
		
		var category_id = $scope.selectedCategory;
	
		$http.get(APIURL+'/api/words/'+category_id).success(function (data) {
			setWord(data[0].name);
		})
	}
	
	


	$scope.setWord = setWord;
	$scope.isSpace = isSpace;
	$scope.validLetter = validLetter;
	$scope.getrRandomWord = getrRandomWord;
}