<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTranslationRequest;
use App\Http\Requests\UpdateTranslationRequest;
use App\Models\Translation;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $translations = Translation::all();
        return view('translations.index', compact('translations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('translations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTranslationRequest $request)
    {
        Translation::create($request->validated());
        return redirect()->route('translations.index')
            ->with('success', 'Translation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Translation $translation)
    {
        return view('translations.show', compact('translation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Translation $translation)
    {
        return view('translations.edit', compact('translation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTranslationRequest $request, Translation $translation)
    {
        $translation->update($request->validated());
        return redirect()->route('translations.index')
            ->with('success', 'Translation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Translation $translation)
    {
        $translation->delete();
        return redirect()->route('translations.index')
            ->with('success', 'Translation deleted successfully.');
    }
}
