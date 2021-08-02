<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS' => 3103119014,
            'Nama' => 'Alda Clarissa Syahda Nur',
            'Gender' => 'Perempuan',
            'No hp' => '+62 812-2942-2796',
            'Kelas' => 'XI RPL 1'
        ];
    }
}
