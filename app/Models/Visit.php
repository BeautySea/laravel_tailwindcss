<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'energy',
        'pain',
        'where_is_pain',
        'anxiety',
        'main_complaint',
        'general_note',
    ];
}
