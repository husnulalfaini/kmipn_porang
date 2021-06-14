<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;


class MasterController extends Controller
{
    public function login()
    {
        return view ('login');
    }

    public function profile()
    {
        $profil = User::select('users.name','users.email','users.password','users.alamat','users.telepon','users.kelompok')
        // ->where('id', $id)
        ->get();
        return view ('profile', compact('profil'));
    }

    public function riwayat_lahan()
    {
        return view ('riwayat_lahan');
    }

    public function notifikasi()
    {
        return view ('notifikasi');
    }
}
