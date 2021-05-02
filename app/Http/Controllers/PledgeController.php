<?php

namespace App\Http\Controllers;

use App\Models\Pledge;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class PledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }


    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "address" => "required|string",
            "city_state" => "required",
            "phone" => "required|numeric",
            "email" => "required|email",
            "total_pledge" => "required|numeric",
            "weekly" => "nullable|numeric",
            "monthly" => "nullable|numeric",
            "other" => "nullable|numeric",
            "description" => "nullable",
            "total" => "required|numeric",
        ]);

        try {
            Pledge::create([
                "name" => $request->name,
                "address" => $request->address,
                "city_state" => $request->city_state,
                "phone" => $request->phone,
                "email" => $request->email,
                "total_pledge" => $request->total_pledge,
                "weekly" => $request->weekly,
                "monthly" => $request->monthly,
                "other" => $request->other,
                "description" => $request->description,
                "total" => $request->total,
            ]);
        }catch (\Exception $exception){
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pledge  $pledge
     * @return \Illuminate\Http\Response
     */
    public function show(Pledge $pledge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pledge  $pledge
     * @return \Illuminate\Http\Response
     */
    public function edit(Pledge $pledge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pledge  $pledge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pledge $pledge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pledge  $pledge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pledge $pledge)
    {
        //
    }
}
