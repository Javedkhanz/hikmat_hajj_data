<?php

namespace App\Http\Controllers;

use App\Models\Haji_data;
use App\Models\Haji_groups_data;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HajiDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $groups = Haji_groups_data::select('group_name', 'id')->get();
        return view('hajji_data.add_haji', compact('groups'));
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

        // Check if the request has a group parameter
        if ($request->group) {
            // Find the group record by id
            $group = Haji_groups_data::find($request->group);

            if ($group) {

                $group->increment('total_group_member');

                $group->save();
            } else {

            }
        }



        if ($request->image) {



            $imageName = $request->image->getClientOriginalName();
            $extension = $request->image->extension();
            $newName =  $request->full_name . '_' . time() . '.' . $extension;
            $request->image->move(public_path('images'), $newName);


            Haji_Data::create([
                'created_name' => $c_name,
                'created_id' => $c_id,
                'image' => $newName,
                'full_name' => $request->full_name,
                'father_name' => $request->father_name,
                'gender' => $request->gender,
                'husband_name' => $request->husband_name,
                'cnic_number' => $request->cnic_number,
                'cnic_expiry_date' => $request->cnic_expiry_date,
                'passport_number' => $request->passport_number,
                'passport_expiry_date' => $request->passport_expiry_date,
                'dob' => $request->dob,
                'blood_group' => $request->blood_group,
                'phone' => $request->phone,
                'email' => $request->email,
                'district' => $request->district,
                'tehsil' => $request->tehsil,
                'address' => $request->address,
                'hajj_badal' => $request->hajj_badal,
                'total_money' => $request->total_money,
                'group' => $request->group,
                'account_type' => $request->account_type,
                'heir_name' => $request->heir_name,
                'heir_relation' => $request->heir_relation,
                'heir_number' => $request->heir_number,
                'heir_cnic' => $request->heir_cnic,
                'emergency_number' => $request->emergency_number
            ]);



            return redirect()->route('add_hajji.index')->with('success', 'Hajji Data submitted successfully!with image');
        }
        // Haji_Data::create($request->all());
        Haji_Data::create([
            'created_name' => $c_name,
            'created_id' => $c_id,
            'image' => 'NULL',
            'full_name' => $request->full_name,
            'father_name' => $request->father_name,
            'gender' => $request->gender,
            'husband_name' => $request->husband_name,
            'cnic_number' => $request->cnic_number,
            'cnic_expiry_date' => $request->cnic_expiry_date,
            'passport_number' => $request->passport_number,
            'passport_expiry_date' => $request->passport_expiry_date,
            'dob' => $request->dob,
            'blood_group' => $request->blood_group,
            'phone' => $request->phone,
            'email' => $request->email,
            'district' => $request->district,
            'tehsil' => $request->tehsil,
            'address' => $request->address,
            'hajj_badal' => $request->hajj_badal,

            'total_money' => $request->total_money,
            'group' => $request->group,
            'account_type' => $request->account_type,
            'heir_name' => $request->heir_name,
            'heir_relation' => $request->heir_relation,
            'heir_number' => $request->heir_number,
            'heir_cnic' => $request->heir_cnic,
            'emergency_number' => $request->emergency_number
        ]);
        return redirect()->route('HajiData.index')->with('success', 'Hajji Data submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Haji_data $haji_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Haji_data $haji_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Haji_data $haji_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Haji_data $haji_data)
    {
        //
    }
}
