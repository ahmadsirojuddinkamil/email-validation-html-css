<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.blog.blog', [
            'title' => 'Blog',
            'blogs' => Blog::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.blog.create', [
            'title' => 'Create Blog'
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
            'slug' => 'required|unique:blogs',
            'imageBlog' => 'image|file|max:1024',
            'date' => 'required',
            'comment' => 'required|max:155',
            'nameBlog' => 'required|max:255',
            'deskripsi' => 'required|max:255',
        ]);

        if ($request->file('imageBlog')) {
            $validateData['imageBlog'] = $request->file('imageBlog')->store('blog-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Blog::create($validateData);

        return redirect('/dashboard/blog')->with('success', 'New blog has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // return $categorie;

        return view('layouts.dashboard.blog.blogShow', [
            'title' => 'Detail Blog',
            'detail' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        // return $g;

        if (
            $blog->penjual->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.blog.edit', [
            'title' => 'Edit Blog',
            'blogEdit' => $blog,
            // 'categories' => Categorie::all(),
            // 'boxList' => Product::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            // 'slug' => 'required',
            'imageBlog' => 'image|file|max:1024',
            'date' => 'required',
            'comment' => 'required|max:155',
            'nameBlog' => 'required|max:255',
            'deskripsi' => 'required|max:255',
        ];

        if ($request->slug != $blog->slug) {
            $rules['slug'] = 'required|unique:blogs';
        }

        $validateData = $request->validate($rules);

        if ($request->file('imageBlog')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['imageBlog'] = $request->file('imageBlog')->store('blog-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Blog::where('id', $blog->id)->update($validateData);

        return redirect('/dashboard/blog')->with('success', 'New blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog) {
            Storage::delete($blog->imageBlog);
        }

        Blog::destroy($blog->id);

        return redirect('/dashboard/blog')->with('success', 'blog has been deleted!');
    }



    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->nameBlog);
        return response()->json(['slug' => $slug]);
    }
}
