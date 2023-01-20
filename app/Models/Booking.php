<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['book_date','doctor_id','patient_id','status'];
    protected $casts = [
        'book_date' => 'array'
    ];
    public function doctors()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
