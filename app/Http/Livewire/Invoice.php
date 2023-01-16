<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice as ModelInvoice;
use App\Models\InvoiceDetail as ModelInvoiceDetail;
use Jenssegers\Date\Date;

class Invoice extends Component
{
    public $invoice_id, $invoice_detail_id, $issue_date, $due_date, $subject, $origin, $destination, $item_type, $description, $quantity, $unit_price, $detailInvoice;

    public function render()
    {
        Date::setLocale('id');

        $getInvoice = ModelInvoice::orderBy('created_at','DESC')
        ->get();

        return view('livewire.invoice', compact('getInvoice'));
    }

    public function detail($id)
    {
        Date::setLocale('id');

        $invoice = ModelInvoice::select('invoices.*', 'invoice_details.item_type')
        ->leftJoin('invoice_details', 'invoice_details.invoice_detail_id', '=', 'invoices.invoice_id')
        ->findOrFail($id);
        // $idInvoice = $detailInvoice->invoice_id;
        // $invoice = ModelInvoiceDetail::select('invoice_details.*')
        // ->leftJoin('invoices', 'invoices.invoice_id', '=', 'invoice_details.invoice_detail_id')
        // ->where('invoice_detail_id', '=', $detailInvoice->invoice_id)
        // ->findOrFail($detailInvoice);

        $this->selected_id = $id;
        $this->invoice_id = $invoice->invoice_id;
        $this->issue_date = $invoice->issue_date;
        $this->due_date = $invoice->due_date;
        $this->subject = $invoice->subject;
        $this->origin = $invoice->origin;
        $this->destination = $invoice->destination;

        // $detailInvoice = ModelInvoiceDetail::select('invoice_details.*')
        // ->leftJoin('invoices', 'invoices.invoice_id', '=', 'invoice_details.invoice_detail_id')
        // ->where('invoice_detail_id', '=', $invoice->invoice_id)
        // ->findOrFail($id);

        $this->item_type = $invoice->item_type;
        $this->description = $invoice->description;
        $this->quantity = $invoice->quantity;
        $this->unit_price = $invoice->unit_price;
    }

    public function delete($id)
    {
        ModelInvoice::select('invoices.*')
        ->leftJoin('invoice_details', 'invoice_details.invoice_detail_id', '=', 'invoices.invoice_id')
        ->find($id)
        ->delete();
    }
}
