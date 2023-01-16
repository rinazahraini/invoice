<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice as ModelInvoice;
use Jenssegers\Date\Date;

class Invoice extends Component
{
    public function render()
    {
        Date::setLocale('id');
        
        $getInvoice = ModelInvoice::orderBy('created_at','DESC')
        ->get();

        return view('livewire.invoice', compact('getInvoice'));
    }
}
