<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('keyword');
        $movies  = Movie::where('name', 'LIKE', '%' . $searchTerm . '%')->paginate(4);
        $rated  =  Movie::avg('rating');
        return view('backend.movies.index',compact('movies','rated'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.movies.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('movies', $imageName, 'public');
        }
        else{
            $imagePath = null;
        }

         Movie::create([
            'name' => $request->name,
            'description'=> $request->description,
            'image'=> $imagePath,
            'year'=> $request->year,
            'rating'=> $request->rating,
        ]);
        return redirect()->route('movies.index')->with('success','Data Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        $rated  =  Movie::avg('rating');
        return view('backend.movies.show',compact('movie','rated'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('backend.movies.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $movie  = Movie::findOrFail($id);
//        $CurrentImage = 'storage/movies';
        if (Storage::exists('public/'.$movie->image))
        {
            Storage::delete('public/'.$movie->image);
        }

            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('movies', $imageName, 'public');


        $movie->update([
            'name' => $request->name,
            'description'=> $request->description,
            'image'=> $imagePath,
            'year'=> $request->year,
            'rating'=> $request->rating,
        ]);
        return redirect()->route('movies.index')->with('success','Updated Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        if (Storage::exists('public/'.$movie->image))
        {
            Storage::delete('public/'.$movie->image);
        }
        $movie->delete();
        return  redirect()->route('movies.index');
    }
}
