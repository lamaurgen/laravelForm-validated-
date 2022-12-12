<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RegistrationController;

class RestrationController extends Controller
{
    public function style(){
        return view ('form');
    }
}
