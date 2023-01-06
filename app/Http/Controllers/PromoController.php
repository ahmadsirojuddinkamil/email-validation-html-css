<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.promo.promo', [
            'title' => 'Promo',
            'promos' => Promo::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.promo.create', [
            'title' => 'Create Promo',
            'categories' => Categorie::all(),
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
            'categorie_id' => 'required',
            'slug' => 'required|unique:promos',
            'imagePromo' => 'image|file|max:1024',
            'namePromo' => 'required|max:100',
            'pricePromo' => 'required|max:155',
        ]);

        if ($request->file('imagePromo')) {
            $validateData['imagePromo'] = $request->file('imagePromo')->store('promo-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Promo::create($validateData);

        return redirect('/dashboard/promo')->with('success', 'New promo has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        // return $promo;

        return view('layouts.dashboard.promo.promoShow', [
            'title' => 'Detail Promo',
            'detail' => $promo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        if (
            $promo->penjual->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.promo.edit', [
            'title' => 'Edit Promo',
            'promoEdit' => $promo,
            'categories' => Categorie::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $promo)
    {
        $rules = [
            // 'slug' => 'required',
            'categorie_id' => 'required',
            'imagePromo' => 'image|file|max:1024',
            'namePromo' => 'required|max:100',
            'pricePromo' => 'required|max:155',
            'slug' => 'required',
        ];

        if ($request->slug != $promo->slug) {
            $rules['slug'] = 'required|unique:promos';
        }

        $validateData = $request->validate($rules);

        if ($request->file('imagePromo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['imagePromo'] = $request->file('imagePromo')->store('promo-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Promo::where('id', $promo->id)->update($validateData);

        return redirect('/dashboard/promo')->with('success', 'New promo has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        if ($promo) {
            Storage::delete($promo->imagePromo);
        }

        Promo::destroy($promo->id);

        return redirect('/dashboard/promo')->with('success', 'promo has been deleted!');
    }



    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Promo::class, 'slug', $request->namePromo);
        return response()->json(['slug' => $slug]);
    }
}
