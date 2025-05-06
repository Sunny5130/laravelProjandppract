<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DiscountController;

use App\Http\Middleware\Test1Middleware;
use App\Http\Middleware\Test2Middleware;
//use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckCountry;
use App\Http\Middleware\Countrycheck;

use App\Http\Controllers\ProdController;

use App\Http\Controllers\CookieController;
use App\Http\Controllers\CookieController2;
use App\Http\Controllers\CookieController1;


use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionController1;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadController1;

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\EmailController;






//use Illuminate\Support\Facades\Route;
 




// Route::get('/', function () {
//     return view('welcome');
// });


///////////////////////////////////////////////////////
 Route::get('/control',[HomeController::class,'index'])
 ->middleware('midgroup');


// Route::get('/control1/{name}',[ItemsController::class,'index']);

// Route::get('/item1/{name?}',[ItemsController::class, 'index1']);
// Route::get('/item2/{name?}',[ItemsController::class, 'index2']);
// Route::get('/item3/{name?}',[ItemsController::class, 'index3']);
// Route::get('/home1', [HomeController1::class, 'index']);


// Route::get('/calculate-discount/{price}/{discount}',
//  [DiscountController::class, 'calculateDiscount']);
//Route::get('/calculate-discount1/{price}/{discount}', [DiscountController1::class, 'calculateDiscount']);
//Route::get('/calculate-discount2/{price}/{discount}', [DiscountController2::class, 'calculateDiscount']);





// Route::prefix('admin')->group(function () {
//     Route::get('/custos', function () {
//         // Matches The "/admin/custos" URL
//         echo 'Hey custo';
//     });
//  });
 
 Route::get('/testmiddle0/{num}', function(){
       
    return " hi I am from Middleware route";
    //return view('welcome');
 })->middleware([Test1Middleware::class, Test2Middleware::class]);


 //aliases (check code in bootstrap/app.php)
Route::get('/testmiddle1', function(){
    return view('welcome');
 })->middleware(['Test1', 'Test2']);

 
  
Route::get('/restricted/{age}/{con}', function () 
     {
         return "You are allowed!";
     })->middleware(CheckAge::class);
 
 
 Route::get('/testa', function () {
    return view('testA');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/country/{con}/{age}', function(){
       
    return " hi I am from Middleware";
    //return view('welcome');
 })->middleware([Countrycheck::class,CheckAge::class]);

 //aliases (check code in bootstrap/app.php)
Route::get('/testmiddle1', function(){
    return "hello";
 })->middleware(['Test1', 'Test2']);

 //middleware advanced routing
Route::middleware(['Test1', 'Test2'])->group(function () {
    Route::get('/emp', function () {
        
    });
    Route::get('/emp/profile', function () {
        
    });
    Route::get('/emp/salary', function () {

   })->withoutMiddleware(['Test1', 'Test2']);
 });


 //Middleware group(check code in bootstrap/app.php)
Route::get('/testmiddle2', function () {
    return "This works";
})->middleware('midgroup');
 
Route::middleware(['midgroup'])->group(function () {
    Route::get('hellog', function () {
        return "hellog";
    });
    Route::get('hellothere', function () {
        return "hellothere";
    });
});


//////////////////////////////////////////////
Route::get('/home', function () {
         return view('welcome');
     })->name('dashboard');

Route::get('/home1', function () {
        return view('test');
    });

Route::get('/control',[HomeController::class,'index'])
    ->middleware('midgroup');

Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard1');

Route::get('/profile/{id}', [HomeController::class,'index'])->name('profile');

Route::get('/dashboard1', [HomeController::class,'index'])->name('secure-page');

/*------------------------------------ORM-------------------------------------*/
//you need to set DB_DATABASE= database_name in .env file in Laravel folder and 
//then run "php artisan migrate" in the terminal. 
//Your database will be created. 


//After this you need to create table by running the command 
//"php artisan make:migration create_products_table". 
//Then check migrations folder in database directory. 
//You will see a file called "...._create_products_table". In that include new fields.

// Then use "php artisan migrate". 

//Then run you Xampp MySQL and then go to "http://localhost:8080/phpmyadmin" to see the table columns.

// Then make a model with "php artisan make:model Product". 
//Then create resource controller using 
//"php artisan make:controller ProdController --resource"


/*
Resource Controllers
GET /products (index) -- display all the records
GET /products/create (create) -- display the form to enter the data from the user
GET /products/1 (show) -- display a particular prod
POST /products (store) -- store the data into table
GET /products/1/edit (edit) -- open the form to update the data
PATCH /products/1 (update) -- update the record with ID 1
DELETE /products/1 (destroy) -- to delete specific product*/

Route::resource('/products', ProdController::class);
//2,6,8,10,12,13,21,28,29,32,37,40,41,44,45,46,48,49,53,56,57,62,
/*-------------------------------------------------URL generation------------------------------*/
Route::get('/users/{id}', function ($id) {
    $url = request()->url();
    $fullUrl = request()->fullUrl();
    $path = request()->path();
    $routeName = request()->route()->getName();
    $routeParams = request()->route()->parameters();
    $segment = request()->segment(1);

    return "URL: $url, Full URL: $fullUrl, Path: $path, Route Name: $routeName, Params: " . json_encode($routeParams) . ", Segment: $segment";
})->name('user.profile');

// Route::get('/users1/{id}', function ($id) {
//     $absoluteUrl = url('/users/123');
//     $secureAssetUrl = secure_asset('js/app.js');
//     // $currentUrl = URL::current();
//     // $previousUrl = URL::previous();
    
//     return "Absolute URL: $absoluteUrl, Secure Asset: $secureAssetUrl,
//     //  Current: $currentUrl, previous: $previousUrl";
//     })->name('user.profile');

//Setting, getting and  removing cookies using Response. Also add the code "use Illuminate\Http\Response;"
// in CookieController
Route::get('/cookie/set',    [CookieController::class,'setCookie']);
Route::get('/cookie/get',    [CookieController::class,'getCookie']);
Route::get('/cookie/remove', [CookieController::class,'deleteCookie']);

//Setting, getting and  removing cookies using Cookie facade.
// Also add the code "use Illuminate\Support\Facades\Cookie;" 
//in CookieController2
Route::get('/cookie/set2',[CookieController2::class,'setCookie']);
Route::get('/cookie/get2',[CookieController2::class,'getCookie']);
Route::get('/cookie/remove2',[CookieController2::class,'deleteCookie']);


// Cookie using form
Route::get('/cookieset',function(){
    return view('cookie');
 });
 Route::post('/cookieset', [CookieController1::class,'setCookie']);
 Route::get('/cookieget', [CookieController1::class,'getCookie']);



 //session helper function
Route::get('/session/get',[SessionController::class,'getSessionData']);
Route::get('/session/set',[SessionController::class,'storeSessionData']);
Route::get('/session/remove',[SessionController::class,'deleteSessionData']);

//Session facade
Route::get('/session/get1',[SessionController1::class,'getSessionData']);
Route::get('/session/set1',[SessionController1::class,'storeSessionData']);
Route::get('/session/remove1',[SessionController1::class,'deleteSessionData']);

//Session using form
Route::view('/login','login');
Route::post('/login',[LoginController::class,'index']);
Route::view('profile', 'profile');

Route::get('profile', function(){
if(!session()->has('data'))
{
   return redirect('login');
}
return view('profile');
});

Route::get('logout', function(){
   session()->forget('data');
   return redirect('login');
});

////////////////////////////////////////////////////////////////
//form data 
Route::post('/register', [RegisterController::class, 'register']);
Route::view('/register1', 'reqdata');

///////////////////////////////////////////
//file upload
Route::post('/upload', [UploadController1::class, 'upload']);
Route::view('/upload1', 'fileupload');

///////////////////////////////////////////////////

///validation
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'submit']);
////,2,6,12,14,32,42,51,57,61,64



/*----------------------------------Ouery builder----------------------------------*/
//you need to set DB_DATABASE= database_name in .env file in Laravel folder and then run "php artisan migrate" 
//in the terminal. Your database will be created. After this you need to create table by running the command 
//"php artisan make:migration create_posts_table". Then check migrations folder in database directory. 
//You will see a file called "...._create_posts_table". In that include new fields. 
//Then use "php artisan migrate". 
//Then run your Xampp MySQL and then go to "http://localhost:8080/phpmyadmin" to see the table columns. 
//Also add "use Illuminate\Support\Facades\DB;" in PostController

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');//for adding a post
Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');// For inserting the data
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');// for getting all post
Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getById');// for getting particular post
Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');// for editing the post 
Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');// for inserting data of updated post
Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');// for deleting post


Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);
