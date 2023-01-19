<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password','phone','age','gender','address'];

    protected $gender = [
        'm' => 'Male',
        'f' => 'Female',
        'k' => 'Unknown',
        'a' => 'Unapplicable'
    ];

    public function getGender()
    {
        return $this->gender;
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
