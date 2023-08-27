<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class MovieController extends Controller
{
    function __construct()
    {
//        $this->middleware(['auth']);
        $this->middleware('permission:movies-list|movies-create|movies-edit|movies-delete', ['only' => ['index','show']]);
        $this->middleware('permission:movies-create', ['only' => ['create','store']]);
        $this->middleware('permission:movies-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:movies-delete', ['only' => ['destroy']]);
    }
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
        $categories = Category::get();
        if (session('success_message')){
            Alert::success('Success!',session('success_message'));
        }

        $title = 'Delete Movie!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('backend.movies.index',compact('movies','rated','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id')->toArray();
        return view('backend.movies.index',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('movies', $imageName, 'public');
        }
        else{
            $imagePath = null;
        }


        $movie =  Movie::create([
            'name' => $request->name,
            'description'=> $request->description,
            'image'=> $imagePath,
            'year'=> $request->year,
            'rating'=> $request->rating,
        ]);
        $selectedCategories = $request->input('categories');
        $movie->categories()->sync($selectedCategories);


        return redirect()->route('movies.index')->withSuccessMessage('Successfully Added');
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
        $categories       = Category::all();
        return view('backend.movies.show',compact('movie','rated','categories'));
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
        $categories       = Category::all();
        $selectedCategories = $movie->categories->pluck('id')->toArray();
        return view('backend.movies.edit',compact('movie','categories','selectedCategories'));
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
        $selectedCategories = $request->input('categories');
        $movie->categories()->sync($selectedCategories);

        return redirect()->route('movies.index')->withSuccessMessage('Successfully Updated');

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

//        return response()->json(['message' => 'Movie deleted successfully']);


    }
}
