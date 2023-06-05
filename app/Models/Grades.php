<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;
    protected $table = 'grades';
    protected $primaryKey = 'gradeID';

    protected $fillable = [
        'memberID',
        'yearlevel',
        'semester',
        'course',
        'code',
        'unit',
        'grades'
    ];
}
