<?php

namespace App\Http\Controllers;

use App\Models\AuthorsModel;
use Illuminate\Http\Request;
use App\Http\Resources\AuthorsResource;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authorsModel = AuthorsModel::withCount('books')->get();
        return AuthorsResource::collection($authorsModel);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AuthorsModel $authorsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AuthorsModel $authorsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuthorsModel $authorsModel)
    {
        //
    }
}
