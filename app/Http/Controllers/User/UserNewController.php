<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupportRequest;
use App\Repository\Support\NewSupport;
use Illuminate\Http\Request;

class UserNewController extends Controller
{
    /**
     * @var NewSupport
     */
    private $newSupport;

    public function __construct(NewSupport $newSupport)
    {

        $this->newSupport = $newSupport;
    }

    public function index(SupportRequest $request)
    {
        return $this->newSupport->setRequest($request)->newComment();
    }
}
