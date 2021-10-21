<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use App\Repository\FilePay\zarinpal_function;

class PayController extends Controller
{
    public function test(Invoice $invoice){
        $pay = $invoice->amount(1000);
        return Payment::purchase($pay, function($driver, $transactionId) {
        })->pay()->render();
    }
    public function send(){
        try {
            $receipt = Payment::amount(1000)->verify();
            dd($receipt->getReferenceId());
        } catch (InvalidPaymentException $exception) {
            echo $exception->getMessage();
        }
    }
}
