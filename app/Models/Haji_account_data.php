<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haji_account_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_name', 'created_id', 'haji_account_name', 'haji_id', 'money_type', 'cheque_number', 'responsible', 'account_balance', 'total_balance_remaining'
    ];
}
