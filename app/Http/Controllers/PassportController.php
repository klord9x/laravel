<?php

namespace App\Http\Controllers;

use App\Handlers\PassportHandler;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function test()
    {
        $passport = new PassportHandler();
        $passport->test();
    }
}
