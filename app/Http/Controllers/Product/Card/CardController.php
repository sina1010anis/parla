<?php

namespace App\Http\Controllers\Product\Card;

use App\Http\Controllers\Controller;
use App\Repository\Card\Card;
use App\Repository\Card\DeleteCard;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function saveCard(Request $request , Card $card)
    {
        return $card->setRequest($request)->checkCard();
    }

    public function deleteCard(Request $request , DeleteCard $deleteCard)
    {
        return $deleteCard->setRequest($request)->checkCard()->deleteCard();
    }
}
