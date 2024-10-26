<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserTranslationRequest;
use App\Http\Requests\UpdateUserTranslationRequest;
use App\Http\Resources\UserTranslation\UserTranslationCollection;
use App\Http\Resources\UserTranslation\UserTranslationResource;
use App\Models\UserTranslation;
use Illuminate\Http\Request;

class UserTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): UserTranslationCollection
    {
        return new UserTranslationCollection($request->query());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserTranslationRequest $request): UserTranslationResource
    {
        return new UserTranslationResource(UserTranslation::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTranslation $userTranslation): UserTranslationResource
    {
        return new UserTranslationResource($userTranslation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserTranslationRequest $request, UserTranslation $userTranslation): void
    {
        $userTranslation->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTranslation $userTranslation): void
    {
        $userTranslation->delete();
    }
}
