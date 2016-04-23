<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Email;
use App\Transaction;
use Illuminate\Http\Request;
use JavaScript;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function saveEmail(Request $request)
    {
        $address = $request->input('address');
        $email = new Email;
        $email->address = $address;
        $email->save();
        return redirect()->back();
    }

    public function makePayment(Request $request)
    {
        $vendor = $request->input('vendor_id');
        $billref = $request->input('bill_ref');
        $amount = $request->input('bill_amount');
        $transaction = new Transaction;
        $transaction->vendor_id = $vendor;
        $transaction->bill_ref = $billref;
        $transaction->bill_amount = $amount;
        $transaction->save();
        return redirect()->back();
    }

}
