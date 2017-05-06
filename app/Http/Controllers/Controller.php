<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Captcha;

class Controller extends BaseController
{
    public function getCaptcha()
    {
        return Captcha::create();
    }
}
