<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDetail extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_id', 'name', 'email', 'password', 'degree', 'department', 'experience', 'specialist', 'dob', 'phone', 'gender', 'address', 'about_me', 'profile_img'];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
