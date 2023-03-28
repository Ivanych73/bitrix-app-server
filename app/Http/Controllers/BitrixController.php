<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Bitrix\CRest;

class BitrixController extends Controller
{
    public function view(Request $request)
    {
        return view('start');
    }

    public function install()
    {
        $result = CRest::installApp();
        return view('install', $result);
    }
}
