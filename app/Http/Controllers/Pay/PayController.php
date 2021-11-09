<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\Controller;
use App\Models\card;
use App\Models\product_order;
use App\Repository\Create\Factor;
use Illuminate\Http\Request;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use \App\Models\factor as factorModel;


class PayController extends Controller
{
    use Factor;

    public function newFactor()
    {
        return $this->total_price()->createFactor()->selectFactor()->createProductOrder()->msgOk();
    }

    public function send(Invoice $invoice)
    {
        $data = factorModel::whereUser_id(auth()->user()->id)->first();
        $pay = $invoice->amount($data->title_price);
        return Payment::purchase($pay, function ($driver, $transactionId) {
            factorModel::whereUser_id(auth()->user()->id)->orderBy('id' , 'DESC')->take(1)->update(['transaction_code' => $transactionId]);
        })->pay()->render();
    }

    public function verify()
    {
        $data = factorModel::whereUser_id(auth()->user()->id)->first();
        $product = product_order::whereFactor_id($data->id)->get();
        try {
            $receipt = Payment::amount($data->title_price)->transactionId($data->transaction_code)->verify();
            $code = $data->transaction_code;
            $tip = 'ok';
            $data->update(['status_buy' => 200]);
            $data->update(['status_order' => 100]);
            card::whereUser_id(auth()->user()->id)->delete();
            return view('user.buy.payment'  , compact('product' ,'tip', 'code'))->with('status' , true);

        } catch (InvalidPaymentException $exception) {
            $tip = $exception->getMessage();
            $code = $data->transaction_code;
            $data->update(['status_buy' => 404]);
            return view('user.buy.payment'  , compact('tip' , 'code'))->with('status' , false);
        }
    }
}
