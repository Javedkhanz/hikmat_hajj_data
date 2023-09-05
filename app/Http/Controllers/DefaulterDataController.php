<?php

namespace App\Http\Controllers;

use App\Models\Defaulter_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefaulterDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $c_id = Auth::user()->id;
         $c_name =  Auth::user()->name;
    }

    /**
     * Display the specified resource.
     */
    public function show(Defaulter_data $defaulter_data)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Defaulter_data $defaulter_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Defaulter_data $defaulter_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Defaulter_data $defaulter_data)
    {
        //
    }
}
