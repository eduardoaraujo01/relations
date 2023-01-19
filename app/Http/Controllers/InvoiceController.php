<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function insert(Request $r){
       
        $data = $r->only(['description', 'value', 'address_id', 'user_id']);
        $invoice = Invoice::create($data);
        return $invoice;
        
    }

    public function index() {
        $invoice = Invoice::all();
        return $invoice;
        
    }
    

    public function findOne(Request $r) {
        $invoice = Invoice::find($r->id);
        $invoice['user']= $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }
}
