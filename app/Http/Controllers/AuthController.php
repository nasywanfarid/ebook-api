<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis'=>3103119138,
            'name'=>'Nasywan',
            'phone'=>'6282138135246',
            'class'=>'XII RPL 4'
        ];
    }
}