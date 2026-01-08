<?php

namespace App\Http\Controllers;

use App\Models\BooksModel;
use Illuminate\Http\Request;
use App\Http\Resources\BooksResource;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booksModel = BooksModel::with('author', 'category')->get();
        return BooksResource::collection($booksModel);
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
    public function show(BooksModel $booksModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BooksModel $booksModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BooksModel $booksModel)
    {
        //
    }
}
