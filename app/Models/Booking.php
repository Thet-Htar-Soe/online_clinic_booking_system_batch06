<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['book_date','doctor_id','patient_id','status'];
    protected $casts = [
        'book_date' => 'array'
    ];
}
