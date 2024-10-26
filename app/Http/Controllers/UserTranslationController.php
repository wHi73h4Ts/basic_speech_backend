<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserTranslationRequest;
use App\Http\Requests\UpdateUserTranslationRequest;
use App\Models\UserTranslation;

class UserTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTranslations = UserTranslation::all();
        return view('user_translations.index', compact('userTranslations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_translations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserTranslationRequest $request)
    {
        UserTranslation::create($request->validated());
        return redirect()->route('user_translations.index')->with('success', 'User translation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTranslation $userTranslation)
    {
        return view('user_translations.show', compact('userTranslation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserTranslation $userTranslation)
    {
        return view('user_translations.edit', compact('userTranslation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserTranslationRequest $request, UserTranslation $userTranslation)
    {
        $userTranslation->update($request->validated());
        return redirect()->route('user_translations.index')->with('success', 'User translation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTranslation $userTranslation)
    {
        $userTranslation->delete();
        return redirect()->route('user_translations.index')->with('success', 'User translation deleted successfully.');
    }
}
