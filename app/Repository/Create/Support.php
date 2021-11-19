<?php

namespace App\Repository\Create;

use App\Models\support as SupportModel;
use Ghasedak\GhasedakApi;
use Illuminate\Http\Request;

trait Support
{
    public $data;
    public function createSupport(Request $request)
    {
        $this->data = SupportModel::create([
            'text' => $request->text,
            'sender' =>(isset($request->id)) ? $request->id : auth()->user()->id,
            'status' =>(isset($request->id)) ? 1 : 0,
            'view_admin' =>(isset($request->id)) ? 0 : 1,
        ]);
        return $this;
    }

    public function sendSMS(GhasedakApi $ghasedakApi)
    {
        $ghasedakApi->SendSimple($this->data->user->mobile , 'از تیم پشتیبانی پیامی دارید . با احترام تیم Parla' ,env('GHASEDAKAPI_LINENUMBER', '30005006006771'));
        return $this;
    }
}
