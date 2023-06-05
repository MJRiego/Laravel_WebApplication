<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements_list extends Model
{
    use HasFactory;

    protected $table = 'requirements_list';

    protected $primaryKey = 'reqs_listID';
    protected $fillable = [
        'requirements',
        'notes'
    ];
}
