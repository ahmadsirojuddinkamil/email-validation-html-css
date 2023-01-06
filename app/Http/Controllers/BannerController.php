<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.banner.banner', [
            'title' => 'Banner',
            'banners' => Banner::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.banner.create', [
            'title' => 'Create Banner',
            // 'banners' => Banner::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:banners',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('banner-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Banner::create($validateData);

        return redirect('/dashboard/banner')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        // return $banner;

        if (
            $banner->penjual->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.banner.bannerShow', [
            'title' => 'Detail Banner',
            'detail' => $banner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        // return $banner;

        if (
            $banner->penjual->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.banner.edit', [
            'title' => 'Edit Banner',
            'bannerEdit' => $banner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $rules = [
            'title' => 'required|max:255',
            // 'slug' => 'required|unique:banners',
            'image' => 'image|file|max:1024',
        ];

        if ($request->slug != $banner->slug) {
            $rules['slug'] = 'required|unique:banners';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('banner-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Banner::where('id', $banner->id)->update($validateData);

        return redirect('/dashboard/banner')->with('success', 'New banner has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if ($banner) {
            Storage::delete($banner->image);
        }

        Banner::destroy($banner->id);

        return redirect('/dashboard/banner')->with('success', 'Banner has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Banner::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
