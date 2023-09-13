<?php

namespace App\Http\Controllers;

use App\Models\Haji_groups_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HajiGroupsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('hajji_data.add_group');
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
        //
        $validator = Validator::make($request->all(), [

            'group_name' => 'required|string|unique:Haji_groups_datas',
            'group_cnic' => 'required|string|unique:Haji_groups_datas',
            'total_group_member' => 'nullable|integer',

        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('HajiGroupsData.index')
                ->withErrors($validator)
                ->withInput();
        }
        $c_id = Auth::user()->id;
        $c_name =  Auth::user()->name;


        $group = new Haji_groups_data();

        $group->created_name = $c_name;
        $group->created_id = $c_id;
        $group->group_name = $request->group_name;
        $group->group_cnic = $request->group_cnic;
        $group->total_group_member = $request->total_group_member;
        $group->save();
        return redirect()->route('HajiGroupsData.index')->with('success', 'Group created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Haji_groups_data $haji_groups_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Haji_groups_data $haji_groups_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Haji_groups_data $haji_groups_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Haji_groups_data $haji_groups_data)
    {
        //
    }
}
