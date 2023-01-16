<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice as ModelInvoice;
use App\Models\InvoiceDetail as ModelInvoiceDetail;

class InvoiceDetail extends Component
{
    public $invoice_id, $invoice_detail_id, $issue_date, $due_date, $subject, $origin, $destination, $item_type, $description, $quantity, $unit_price;

    public function render()
    {
        return view('livewire.invoice-detail');
    }
}
