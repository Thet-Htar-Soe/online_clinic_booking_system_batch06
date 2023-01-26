<?php

namespace App\Models;

use App\Enums\GenderType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password',
        'phone', 'age', 'gender', 'address'
    ];

    public function getGenderAttribute($value)
    {
        return GenderType::getLabel($value);
    }
    public function setGenderAttribute($value)
    {
        $this->attributes['gender'] = GenderType::getValueFromLabel($value);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
