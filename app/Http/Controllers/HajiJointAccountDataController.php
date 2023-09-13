<?php

namespace App\Http\Controllers;

use App\Models\Haji_joint_account_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HajiJointAccountDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('hajji_data.add_money_to_group');
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
        //use Illuminate\Support\Facades\Auth;
        $c_id = Auth::user()->id;
        $c_name =  Auth::user()->name;
    }

    /**
     * Display the specified resource.
     */
    public function show(Haji_joint_account_data $haji_joint_account_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Haji_joint_account_data $haji_joint_account_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Haji_joint_account_data $haji_joint_account_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Haji_joint_account_data $haji_joint_account_data)
    {
        //
    }
}
