<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtraResourceRequest;
use App\Http\Controllers\Controller;
use App\Models\ExtraResource;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ExtraResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $extraResources = ExtraResource::all();
        return view('extraResourceIndex', compact('extraResources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('extraResourceCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExtraResourceRequest $request): RedirectResponse
    {
        ExtraResource::create($request->all());
        return redirect()->route('extraResource.index');
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
    public function edit($extraResource)
    {
        $extraResource = ExtraResource::find($extraResource);
        return view('extraResourceEdit', compact('extraResource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExtraResourceRequest $request, $extraResource): RedirectResponse
    {
        $extraResource = ExtraResource::find($extraResource);
        $extraResource->update($request->all());
        return redirect()->route('extraResource.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($extraResource): RedirectResponse
    {
        $extraResource = ExtraResource::find($extraResource);
        $extraResource->delete();
        return redirect()->route('extraResource.index');
    }
}
