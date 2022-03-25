<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('layouts.admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('layouts.admin.movies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     "name" => 'required',
        //     "category_id" => 'required',
        //     "description" => 'required',
        //     "image_url" => "required",
        //     "image_url2" => "required",
        //     "trailer_url" => "required",
        // ]);

        Movie::create([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "image_url" => $request->image_url,
            "image_url2" => $request->image_url2,
            "trailer_url" => $request->trailer_url,
            "day" => $request->day,
            "time" => $request->time,

        ]);

        return redirect()->back()->with(['message' => 'Movie added successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $movie = Movie::find($id);
        // $categories = Category::all();
        // return view('layouts.admin.movie', compact('movie', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movie = Movie::find($id);
        $categories = Category::all();
        return view('layouts.admin.movies.edit', compact('movie', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request);
        $movie = Movie::find($id);
        $movie->update([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "image_url" => $request->image_url,
            "image_url2" => $request->image_url2,
            "trailer_url" => $request->trailer_url,
            "day"=> $request->day,
            "time"=> $request->time
        ]);

        return redirect()->back()->with(['message' => 'Movie updated successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movie = Movie::find($id);
        $movie->deleteOrFail();
        return redirect()->back()->with(['message' => 'Movie Deleted Successfully']);

    }
}
