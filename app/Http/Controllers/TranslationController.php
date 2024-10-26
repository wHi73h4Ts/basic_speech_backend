<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTranslationRequest;
use App\Http\Requests\UpdateTranslationRequest;
use App\Http\Resources\Translation\TranslationCollection;
use App\Http\Resources\Translation\TranslationResource;
use App\Models\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): TranslationCollection
    {
        return new TranslationCollection($request->query());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTranslationRequest $request): TranslationResource
    {
        return new TranslationResource(Translation::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Translation $translation): TranslationResource
    {
        return new TranslationResource($translation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTranslationRequest $request, Translation $translation): void
    {
        $translation->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Translation $translation): void
    {
        $translation->delete();
    }
}
