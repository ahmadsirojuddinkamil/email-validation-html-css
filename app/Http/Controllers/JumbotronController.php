<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.jumbotron.jumbotron', [
            'title' => 'Jumbotron',
            'jumbotrons' => Jumbotron::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.jumbotron.create', [
            'title' => 'Create Jumbotron'
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
            'judulJumbotron' => 'required|max:255|unique:jumbotrons',
            'slug' => 'required|unique:jumbotrons',
            'imageJumbotron' => 'image|file|max:1024',
            'judulUtama' => 'required|max:50|unique:jumbotrons',
            'organic' => 'required|max:50|unique:jumbotrons',
            'deskripsi' => 'required|max:40|unique:jumbotrons',
            'action' => 'required|max:50|unique:jumbotrons'
        ]);

        if ($request->file('imageJumbotron')) {
            $validateData['imageJumbotron'] = $request->file('imageJumbotron')->store('jumbotron-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Jumbotron::create($validateData);

        return redirect('/dashboard/jumbotron')->with('success', 'New jumbotron has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function show(Jumbotron $jumbotron)
    {
        // return $product;

        return view('layouts.dashboard.jumbotron.jumbotronShow', [
            'title' => 'Detail Product',
            'detail' => $jumbotron
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function edit(Jumbotron $jumbotron)
    {
        // return $jumbotron;

        if (
            $jumbotron->penjual->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.jumbotron.edit', [
            'title' => 'Edit jumbotron',
            'jumbotronEdit' => $jumbotron
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jumbotron $jumbotron)
    {
        $rules = [
            'judulJumbotron' => 'required|max:255',
            'slug' => 'required',
            'imageJumbotron' => 'image|file|max:1024',
            'judulUtama' => 'required|max:50',
            'organic' => 'required|max:50',
            'deskripsi' => 'required|max:50',
            'action' => 'required|max:50'
        ];

        if ($request->slug != $jumbotron->slug) {
            $rules['slug'] = 'required|unique:jumbotrons';
        }

        $validateData = $request->validate($rules);

        if ($request->file('imageJumbotron')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['imageJumbotron'] = $request->file('imageJumbotron')->store('jumbotron-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Jumbotron::where('id', $jumbotron->id)->update($validateData);

        return redirect('/dashboard/jumbotron')->with('success', 'New jumbotron has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jumbotron $jumbotron)
    {
        if ($jumbotron) {
            Storage::delete($jumbotron->imageJumbotron);
        }

        Jumbotron::destroy($jumbotron->id);

        return redirect('/dashboard/jumbotron')->with('success', 'jumbotron has been deleted!');
    }



    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Jumbotron::class, 'slug', $request->judulJumbotron);
        return response()->json(['slug' => $slug]);
    }
}
