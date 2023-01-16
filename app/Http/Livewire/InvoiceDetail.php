<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice as ModelInvoice;
use App\Models\InvoiceDetail as ModelInvoiceDetail;

class InvoiceDetail extends Component
{
    public $invoice_id, $invoice_detail_id, $issue_date, $due_date, $subject, $origin, $destination, $item_type, $description, $quantity, $unit_price;

    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
        // $this->inputs[$i] = null;
        // $this->filters = [
        //     'province' => null,      
        //     'district' => null,    
        //     'sub_district' => null,    
        // ];
    }

    public function render()
    {
        return view('livewire.invoice-detail');
    }

    public function save()
    {
        $invoice = ModelInvoice::create([
            'issue_date' => $this->issue_date,
            'due_date' => $this->due_date,
            'subject' => $this->subject,
            'origin' => $this->origin,
            'destination' => $this->destination,
        ]);
        // ModelInvoiceDetail::create([
        //     'invoice_detail_id' => $invoice->invoice_id,
        //     'item_type' => $this->item_type,
        //     'description' => $this->description,
        //     'quantity' => $this->quantity,
        //     'unit_price' => $this->unit_price,
        // ]);
        if ($this->item_type && $this->description && $this->quantity && $this->unit_price) {
            foreach ($this->item_type as $key => $value) {
                ModelInvoiceDetail::create([
                    'invoice_detail_id' => $invoice->invoice_id,
                    'item_type' => $this->item_type[$key],
                    'description' => $this->description[$key],
                    'quantity' => $this->quantity[$key],
                    'unit_price' => $this->unit_price[$key],
                ]);
            }
        }
    }
}
