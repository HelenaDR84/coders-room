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

    public function create()
    {
    return view('typeCreate');
    }

    public function store(TypeRequest $request)
    {
        Type::create($request->all());
        return redirect()->route('type.index');  
    }

    public function show($type)
    {
        $type = Type::find($type);
        return view('typeShow', compact('type'));
    }


    public function edit($type)
    {
        $type = Type::find($type);
        return view('typeEdit', compact('type'));
    }

    public function update(TypeRequest $request,$type)
    {
        $type = Type::find($type);
        $type->update($request->all());
        return redirect()->route('type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($type)
    {
        $type = Type::find($type);
        $type->delete();
        return redirect()->route('type.index');
    }
}
