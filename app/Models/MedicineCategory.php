<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    use HasFactory;
    protected $table = "medicines_categories";
    protected $fillable = ['medicine_id','category_id'];
}
