<?php

namespace App\Http\Controllers;

use App\Models\MembersModel;
use Illuminate\Http\Request;
use App\Http\Resources\MemberResource;
use App\Http\Resources\MemberWithLoansResource;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membersModel = MembersModel::withCount('loans')->get();
        return MemberResource::collection($membersModel);
    }

    public function memberWithLoans()
    {
        $membersModel = MembersModel::with('loans')->withCount('loans')->get();
        return MemberWithLoansResource::collection($membersModel);
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
    public function show(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $membersModel = MembersModel::with('loans')->withCount('loans')
            ->where('email', $request->email)
            ->where('phone', $request->phone)
            ->firstOrFail();

        return new MemberWithLoansResource($membersModel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MembersModel $membersModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MembersModel $membersModel)
    {
        //
    }
}
