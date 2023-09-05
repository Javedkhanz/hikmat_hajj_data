<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haji_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_name',
        'created_id',
        'full_name',
        'image',

        'father_name',
        'gender',
        'husband_name',
        'cnic_number',
        'cnic_expiry_date',
        'passport_number',
        'passport_expiry_date',
        'dob',
        'blood_group',
        'phone',
        'email',
        'district',
        'tehsil',
        'address',
        'hajj_badal',
        'total_money',
        'heir_name',
        'heir_relation',
        'heir_number',
        'heir_cnic',
        'emergency_number',
    ];

}
