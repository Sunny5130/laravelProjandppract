<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('ProductDisplay', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ProductForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect('/products');

        
        // $newName = $request->name;
        // $newDescription = $request->description;
        // $newPrice = $request->price;
        // Product::insert(['name' => $newName, 'description'=>$newDescription, 'price'=> $newPrice]);
        // return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);  
        return view('productParticular', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);  
        return view('updateForm', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);  
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect('/products');

        // $newName = $request->input('name');
        // $newDescription = $request->input('description');
        // $newPrice = $request->input('price');
        // Product::where('id', $id)->update(['name' => $newName, 'description'=>$newDescription, 'price'=> $newPrice]);
        // return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);  
        $product->delete();
        return redirect('/products'); 

        // Product::destroy(1);
        // return redirect('/products');

        // Product::where('id', $id)->delete();
        // return redirect('/products');

    }
}
