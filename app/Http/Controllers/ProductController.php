<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.product.product', [
            'title' => 'Product',
            'products' => Product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.product.create', [
            'title' => 'Create Product',
            'boxList' => Product::all(),
            'categories' => Categorie::all()
            // 'banners' => Banner::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $validateData = $request->validate([
            'judulProduct' => 'required|max:255',
            'slug' => 'required|unique:products',
            'imageProduct' => 'image|file|max:1024',
            'price' => 'required|unique:products',
            'categorie_id' => 'required',
            'produkBox' => 'required',
            'deskripsi' => 'required|max:255',
            'detail' => 'required|max:2500',
        ]);

        if ($request->file('imageProduct')) {
            $validateData['imageProduct'] = $request->file('imageProduct')->store('product-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Product::create($validateData);

        return redirect('/dashboard/product')->with('success', 'New product has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // return $product;

        return view('layouts.dashboard.product.productShow', [
            'title' => 'Detail Product',
            'detail' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // return $g;

        if (
            $product->penjual->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.product.edit', [
            'title' => 'Edit Product',
            'productEdit' => $product,
            'categories' => Categorie::all(),
            'boxList' => Product::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'judulProduct' => 'required|max:255',
            // 'slug' => 'required|unique:products',
            'imageProduct' => 'image|file|max:1024',
            'price' => 'required',
            'categorie_id' => 'required',
            'produkBox' => 'required',
            'deskripsi' => 'required|max:255',
            'detail' => 'required|max:2500',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validateData = $request->validate($rules);

        if ($request->file('imageProduct')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['imageProduct'] = $request->file('imageProduct')->store('product-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Product::where('id', $product->id)->update($validateData);

        return redirect('/dashboard/product')->with('success', 'New product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product) {
            Storage::delete($product->imageProduct);
        }

        product::destroy($product->id);

        return redirect('/dashboard/product')->with('success', 'Product has been deleted!');
    }



    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->judulProduct);
        return response()->json(['slug' => $slug]);
    }
}
