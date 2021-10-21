<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[ 
            'Status' => '200',
            'Message' => 'Success',
            'Nama' => 'Naia Aulia',
            'Kelas' => 'XII RPL 4',
            'Absen' => '31',
            'TTL' => 'Pemalang, 18 mei 2004'
        ];
    }
}
