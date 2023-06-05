<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowances extends Model
{
    use HasFactory;

    protected $table = 'allowances';
    
    protected $fillable = [
        'allowanceID',
        'memberID',
        'yearlevel',
        'semester',
        'month',
        'date_received'
    ];
}
