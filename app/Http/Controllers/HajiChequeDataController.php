<?php

namespace App\Http\Controllers;

use App\Models\Haji_cheque_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HajiChequeDataController extends Controller
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
    public function show(Haji_cheque_data $haji_cheque_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Haji_cheque_data $haji_cheque_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Haji_cheque_data $haji_cheque_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Haji_cheque_data $haji_cheque_data)
    {
        //
    }
}
