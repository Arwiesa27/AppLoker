<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class LokerController extends Controller
{
    function show(){
        return view('lowongan');
    }
    function index(){
        $data ['lokers'] = Loker::all();
        return view('all',$data);
    }
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
        return redirect('lowongan');
    }
    function edit($id){
        $data['lokers'] = Loker::find($id);
        $data['action']= url('loker/update').'/'.$data['loker']->id;
        $data['tombol'] = 'Update';
        return view('admin.edit',$data);
    }
    function update(Request $req){
        User::where('id',$req->id)->update([
            'status' => $req->status,
        ]);
        return redirect('admin.dataLoker');
    }
}

