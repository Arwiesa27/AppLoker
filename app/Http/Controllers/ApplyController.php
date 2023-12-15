<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    function buat(Request $req){
        Loker::create([
            'name' => $req->name,
            'nohp' => $req->nohp,
            'namaP' => $req->namaP,
            'posisi' => $req->posisi,
            'persyaratan' => $req->persyaratan,
            'tglbuka' => $req->tglbuka,
            'tgltutup' => $req->tgltutup,
            'fotolowongan' => $req->file('fotolowongan')->store('foto'),
            'status' => $req->status,
        ]);
        return redirect('more');
    }
}
