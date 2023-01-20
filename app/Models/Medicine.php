<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [ 
        'name',
        'classification',
        'symptom',
        'treatment',
        'quantity',
        'price'
    ];

    public function category() {
        return $this->belongsToMany(Category::class,'medicines_categories','medicine_id','category_id');
    }
}
