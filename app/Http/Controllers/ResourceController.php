<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceRequest;
//use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Type;
use App\Models\Category;
use App\Models\ExtraResource;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $resources= Resource::all();
        return view('resourceIndex', compact('resources'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $types = Type::all();
        $categories= Category::all();
        $extraResources= ExtraResource::all();
        return view('resourceCreate', compact('types','categories','extraResources'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResourceRequest $request): RedirectResponse
    {
        $resource = Resource::create($request->all());
        if($request -> has('extra_resource_id1')){
            $resource -> extraResource1()-> associate($request->input('extra_resource_id1'))->save();
        }
        if($request -> has('extra_resource_id2')){
            $resource -> extraResource2()-> associate($request->input('extra_resource_id2'))->save();
        }
        if($request -> has('extra_resource_id3')){
            $resource -> extraResource3()-> associate($request->input('extra_resource_id3'))->save();
        }
        return redirect()->route('resource.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($resource):View
    {
        $resource = Resource::find($resource);
        return view('resourceShow', compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($resource):View
    {
        $types = Type::all();
        $categories= Category::all();
        $extraResources= ExtraResource::all();
        $resource = Resource::find($resource);
        return view('resourceEdit', compact('types','categories','extraResources','resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResourceRequest $request, string $id): RedirectResponse
    {
        return redirect()->route('resource.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        return redirect()->route('resource.index');
    }
}
