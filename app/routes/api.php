<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/categories', function () {
	$categoriesObject =DB::table("categories");
    $categoriesData = $categoriesObject->get();
	return Response::json(array(
		"categories"		=>		$categoriesData
	));
});

Route::get('words/{category_id}', function ($category_id) {
    $wordsObject =DB::table("words");
	$wordsObject->where('category_id',$category_id);
	$wordsObject->orderByRaw('Rand()');
	$wordsObject->first();
    $wordsData = $wordsObject->get();
	return Response::json($wordsData);
});