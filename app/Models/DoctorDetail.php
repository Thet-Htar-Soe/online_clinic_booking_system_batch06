<?php

namespace App\Models;

use App\Enums\GenderType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id', 'name', 'email', 'password',
        'degree', 'department', 'experience',
        'specialist', 'dob', 'phone', 'gender',
        'address', 'about_me', 'profile_img'
    ];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function getGenderAttribute($value)
    {
        return GenderType::getLabel($value);
    }
    public function setGenderAttribute($value)
    {
        $this->attributes['gender'] = GenderType::getValueFromLabel($value);
    }
}
