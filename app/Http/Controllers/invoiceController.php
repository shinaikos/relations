<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;

class invoiceController extends Controller
{
    //

    public function index(Request $request)
    {
        $invoice = invoice::all();

        return $invoice;
    }

    public function create(Request $request)
    {
        $rawData = $request->only('value', 'description', 'address_id', 'user_id');

        $invoice = invoice::create($rawData);

        $invoice->save();

        return $invoice;
    }
}
