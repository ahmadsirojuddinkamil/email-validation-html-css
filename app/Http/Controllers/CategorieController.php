<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.categorie.categorie', [
            'title' => 'Categorie',
            'categories' => Categorie::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.categorie.create', [
            'title' => 'Create Categorie',
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
            'judulCategory' => 'required|max:255',
            'slug' => 'required|unique:categories',
            'imageCategory' => 'image|file|max:1024',
        ]);

        if ($request->file('imageCategory')) {
            $validateData['imageCategory'] = $request->file('imageCategory')->store('categorie-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Categorie::create($validateData);

        return redirect('/dashboard/categorie')->with('success', 'New categorie has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        // return $categorie;

        return view('layouts.dashboard.categorie.categorieShow', [
            'title' => 'Detail Categorie',
            'detail' => $categorie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        // return $g;

        if (
            $categorie->penjual->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.categorie.edit', [
            'title' => 'Edit Categorie',
            'categorieEdit' => $categorie,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $rules = [
            'judulCategory' => 'required|max:255',
            // 'slug' => 'required|unique:categories',
            'imageCategory' => 'image|file|max:1024',
        ];

        if ($request->slug != $categorie->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validateData = $request->validate($rules);

        if ($request->file('imageCategory')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['imageCategory'] = $request->file('imageCategory')->store('categorie-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Categorie::where('id', $categorie->id)->update($validateData);

        return redirect('/dashboard/categorie')->with('success', 'New categorie has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        if ($categorie) {
            Storage::delete($categorie->imageCategory);
        }

        Categorie::destroy($categorie->id);

        return redirect('/dashboard/categorie')->with('success', 'Categorie has been deleted!');
    }



    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Categorie::class, 'slug', $request->judulCategory);
        return response()->json(['slug' => $slug]);
    }
}
