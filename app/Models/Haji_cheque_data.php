<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haji_cheque_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_name',
        'created_id',
    ];
}
