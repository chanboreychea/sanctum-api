<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductResource(Product::all());
        // return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $p = Product::create($request->all());

        return [
            'data'=>$p
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $product)
    {
        Product::find($product)->update($request->all());

        return ['message'=>'updated'];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $product)
    {
        Product::find($product)->delete();
        return ['message'=>'deleted'];
    }
}
