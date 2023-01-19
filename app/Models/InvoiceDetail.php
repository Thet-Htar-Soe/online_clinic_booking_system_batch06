<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_id','medicines','doctor_charges','grand_total'];
    protected $casts = [
        'medicines' => 'array'
    ];
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
}
