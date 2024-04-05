<?php

namespace App\Http\Controllers\Backend;

use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\User;
use PDF ;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:categories-list|categories-create|categories-edit|categories-delete', ['only' => ['index','show']]);
        $this->middleware('permission:categories-create', ['only' => ['create','store']]);
        $this->middleware('permission:categories-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:categories-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('keyword');
        $categories  = Category::where('name', 'LIKE', '%' . $searchTerm . '%')->paginate(4);

        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return  redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('backend.categories.show',compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
//        $category = Category::findOrFail($id);
//        $category->name = $request->name;
//        $category->save();
        Category::where('id',$id)->update(['name'=>$request->name]);
        return  redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::destroy($id);
        return  redirect()->route('categories.index');
    }

    public function exportExcel()
    {
        $categories = Category::all();
        return Excel::download(new CategoryExport($categories), 'categories.xlsx');
    }

    public function exportPDF()
    {
        $categories = Category::all();
        $pdf = PDF::loadView('backend.categories.pdf', compact('categories'));
        return $pdf->download('categories.pdf');
    }

//    public function deleteSelected(Request $request)
//    {
//        $itemIds = $request->input('itemIds'); // Get the selected item IDs from the request
//
//        Category::whereIn('id', $itemIds)->delete(); // Delete the selected items
//
//        return redirect()->route('items.index')->with('success', 'Selected items deleted successfully');
//    }
}
