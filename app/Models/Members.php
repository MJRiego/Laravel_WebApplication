<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'memberID';

    protected $fillable = [
        'firstname',
        'midinitial',
        'lastname',
        'age',
        'sex',
        'birthdate',
        'civilstatus',
        'religion',
        'mobile',
        'email',
        'address',
        'batchnum',
        'school',
        'college',
        'yearlevel',
        'program',
        'major',
        'acceptdate'
    ];
}
