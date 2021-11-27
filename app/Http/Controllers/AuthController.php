<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103119138,
            'Name' => 'Nasywan Farid',
            'Gender' => 'Male',
            'Phone' => '082134807424',
            'Class' => 'XII RPL 4'
        ];
    }
}
