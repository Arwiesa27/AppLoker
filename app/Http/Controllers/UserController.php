<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Loker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    function show(){
        $data ['user'] = User::all();
        return view('admin.admin', $data);
    }
    function index(){
        $data ['user'] = User::all();
        return view('admin.dataAlumni', $data);
    }
    function dash(){
        $data ['user'] = User::all();
        return view('admin.dashboard', $data);
    }
    function data(){
        $data ['lokers'] = Loker::all();
        return view('admin.dataLoker', $data);
    }
    function auth(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            if(Auth::user()->role == 'admin'){
                return redirect('dashboard');
            }elseif(Auth::user()->role == 'alumni'){
                return redirect('home');
            }else{
                return redirect()->back();
            }
        }
        // return redirect('home');
    }
    function register(){
        return view('register');
    }
    function create(Request $request){
        $validate = $this->validate($request, [
            'nip' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'role' => 'required|in:admin,alumni',
        ]);

        $validate['password'] = bcrypt($request->password);

        User::create($validate);

        return redirect('home');
    }
    function edit($id){
        $data['admin'] = User::find($id);
        $data['action']= url('admin/update').'/'.$data['admin']->id;
        $data['tombol'] = 'Update';
        return view('admin.admin',$data);
    }
    function update(Request $req){
        Loker::where('id',$req->id)->update([
            'status' => $req->status,
        ]);
        return redirect('dataLoker');
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
