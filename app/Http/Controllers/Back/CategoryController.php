<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.category.index',['categories'=>Category::latest()->get()]);
    }

    public function store(Request $request)
    {
        $data =$request->validate(['name'=>'required|min:3']);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);

        return back()->with('success','Categories has been created' );
    }

    public function update(Request $request, string $id)
    {
        $data =$request->validate(['name'=>'required|min:3']);

        $data['slug'] = Str::slug($data['name']);

        Category::find($id)->update($data);

        return back()->with('success','Categories has been updated' );
    }


    public function destroy(string $id)
    {
        //
    }
}
