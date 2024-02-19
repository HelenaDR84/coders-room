<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TypeController extends Controller
{
   
    public function index():View
    {
      $types=Type::all();
      return view('typeIndex', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('typeCreate');
    }

    public function store(TypeRequest $request)
    {
        Type::create($request->all());
        return redirect()->route('type.index');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
