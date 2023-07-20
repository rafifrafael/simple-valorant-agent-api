<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'real_name',
        'codename',
        'origin',
        'race',
        'gender',
        'role',
        'basic_abilities_1',
        'basic_abilities_2',
        'signature_abilities',
        'ultimate_ability',
        'ult_points'        
    ];
}
