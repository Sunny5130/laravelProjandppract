<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jewelry', [JewelryController::class, 'index']);
Route::get('/jewelry/{id}', [JewelryController::class, 'show']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/profile/{id}', [UserController::class, 'show']);

// //form validation 
// Route::view('/form', 'user-form');
// Route::post('/adduser', [FormController::class, 'addUser']);

// //middleware 
// Route::middleware('check1')->group(function () {
//     Route::view('about', 'about');
//     Route::view('home', 'home');
// });


// //fetch data
// use App\Http\Controllers\DatbaseController;
// Route::get('users',[DatbaseController::class,'users']);


// // fetch database from query builder
// use App\Http\Controllers\QueryController;
// Route::get('query',[QueryController::class,'query']);
// Route::get('show', [QueryController::class, 'show']);

// //for upload image or fileuse I
// use App\Http\Controllers\UploadController;
// Route::view('upload', 'upload');
// Route::post('upload', [UploadController::class, 'upload']);

// ///
// use App\Http\Controllers\TokenController;

// Route::get('/settoken', [TokenController::class, 'setUserToken']);
// Route::get('/destroytoken', [TokenController::class, 'destroyUserToken']);



// //set cookie for 1 day and delete by button
// use App\Http\Controllers\HomeController;
// Route::get('/cooki', [HomeController::class, 'index']);
// Route::post('/deletecookie', [HomeController::class, 'deleteCookie']);

// // for mail sending 
// use App\Http\Controllers\MailController;
// Route::get('/mail', [MailController::class, 'send']);







use App\Http\Controllers\UploadController;
Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'upload']);



