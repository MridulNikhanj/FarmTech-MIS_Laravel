<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;

    protected $fillable = [
        'farmer_photo',
        'fpo_registration_no',
        'associated_fpo',
        'farmer_name',
        'category',
        'father_name',
        'gender',
        'date_of_birth',
        'address',
        'pin_code',
        'state',
        'district',
        'block',
        'aadhar_no',
        'mobile_no',
        'email',
        'area_type',
        'status'
    ];

    protected $dates = [
        'date_of_birth'
    ];
}
