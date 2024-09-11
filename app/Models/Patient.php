<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_birth',
        'address',
        'city',
        'country',
        'phone',
        'email',
        'family_info',
        'blood_type',
        'allergies',
        'dietary',
        'medications',
        'medical_cond',
        'surgeries',
        'accidents',
        'fm_history',
        'ref_name',
        'hdyh_about_us',
        'goal',
    ];
}
