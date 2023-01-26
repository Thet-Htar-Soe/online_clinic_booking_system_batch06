<?php

namespace App\Models;

use App\Enums\GenderType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['is_active'];

    public function doctorDetail()
    {
        return $this->hasOne(DoctorDetail::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
