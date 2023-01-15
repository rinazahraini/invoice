<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $table = "invoice_details";
    protected $fillable = ['invoice_detail_id','item_type','description','quantity','unit_price'];
}
