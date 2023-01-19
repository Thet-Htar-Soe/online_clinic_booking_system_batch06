<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['booking_id','invoice_no'];
    public function invoiceDetail()
    {
        return $this->hasOne(InvoiceDetail::class, 'id');
    }
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
