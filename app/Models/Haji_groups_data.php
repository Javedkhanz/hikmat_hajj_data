<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haji_groups_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_name',
        'created_id',
        'group_name',
        'group_cnic',
        'total_group_member'
    ];
}
