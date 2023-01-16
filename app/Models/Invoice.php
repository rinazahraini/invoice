<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Invoice extends Model
{
    use HasFactory;
    use AutoNumberTrait;

    protected $table = "invoices";
    protected $fillable = ['invoice_id','issue_date','due_date','subject','origin','destination'];

    public function getAutoNumberOptions()
    {
        return [
            'invoice_id' => [
                'format' => '?',
                'length' => 4
            ]
        ];
    }
}
