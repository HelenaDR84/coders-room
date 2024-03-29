<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $categories=Category::all();
        return view('categoryIndex', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoryCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($category)
    {
        $category = Category::find($category);
        return view('categoryShow', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category)
    {
        $category = Category::find($category);
        return view('categoryEdit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request,$category)
    {
        $category = Category::find($category);
        $category->update($request->all());
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        $category = Category::find($category);
        $category->delete();
        return redirect()->route('category.index');
    }
}
