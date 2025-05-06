<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class JewelryController extends Controller{
    private $jewelryList = [
        1 => ['name' => 'Gold Necklace', 'price' => 15000, 'description' => 'A beautiful gold necklace.'],
        2 => ['name' => 'Diamond Ring', 'price' => 25000, 'description' => 'A dazzling diamond ring.'],
        3 => ['name' => 'Silver Earrings', 'price' => 3000, 'description' => 'Elegant silver earrings.'],
        4 => ['name' => 'Bracelet', 'price' => 8000, 'description' => 'Gold-plated bracelet with intricate patterns.'],
        5 => ['name' => 'Ruby Pendant', 'price' => 12000, 'description' => 'A stunning ruby pendant.'],
    ];
    // Function to display all jewelry items

    public function __construct()
    {
        // Middleware can be applied here if needed
    }
    public function index()
    {
        return view('jewelry.index', ['jewelry' => $this->jewelryList]);
    }
    // Function to display a single jewelry item
    public function show($id)
    {
        if (!isset($this->jewelryList[$id])) {
            abort(404);
        }
        return view('jewelry.show', ['item' => $this->jewelryList[$id]]);
    }
}



// you need to display details about a specific blog post title. content and author name need to be passes to the view using the with() method_existsinstruction:
//     1. create a route for displaying a single post('/post/{id}')
//     2. create a controller method that retrive the blog datat by id and passes it to the viewusing with()
//     3.create the blade view(resource/views/post/show.blade.php) to display the post title,context,and author
//     expected output when vissit on url like /post/1 the blog will diplay
//     title: post title
//     author: author name :
//     context : the context of the post



// Use compact('variable') for clean and simple code.
// Use with() when you want to pass multiple individual values.
// Use View::share() for global variables.
// Use View::composer() for dynamic data shared across multiple views.

//  Single Action Controller in Laravel
// A Single Action Controller in Laravel is a controller that has only one method (__invoke). It is useful when you only need to handle a single route with a dedicated controller.

// What is a Controller in Laravel?
// A controller in Laravel is a PHP class that handles HTTP requests and processes the logic for your application. It acts as a middleman between the routes and the views/models.

// What is Middleware?
// Middleware in Laravel is a filter that sits between the request and response. It is used to modify or inspect HTTP requests before they reach the controller or after the response is sent back to the client.


// 🔹 Function to Validate Route Parameters in Laravel
// 1️ Route Model Binding (Best for database models)
// 2️ Regular Expressions (where())
// 3️ Request Validation (Form Request or $request->validate())

//     1. Using Cookie::forget()

// What is an Artisan Command in Laravel?
// Artisan is Laravel’s built-in command-line interface (CLI) that helps automate repetitive tasks like database migrations, cache clearing, route listing, and more. It is powered by Symfony Console.










