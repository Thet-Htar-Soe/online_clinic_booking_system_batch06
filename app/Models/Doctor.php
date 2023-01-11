<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['is_active'];
    public function doctorDetail()
    {
        return $this->hasMany(DoctorDetail::class);
    }
}
