<?php

namespace App\Http\Controllers;

use App\Models\LoansModel;
use Illuminate\Http\Request;
use App\Http\Resources\LoansResource;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loansModel = LoansModel::with(['member', 'book'])->get();
        return LoansResource::collection($loansModel);
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
    public function show(LoansModel $loansModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoansModel $loansModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoansModel $loansModel)
    {
        //
    }
}
