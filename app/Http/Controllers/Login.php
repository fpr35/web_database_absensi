<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ModelLogin;
use App\Models\ModelJabatan;
use App\Models\ModelAbsen424;
use App\Models\ModelGaji427;
use App\Models\ModelKaryawan428;
use Illuminate\support\facades\hash;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function form_regist(){
        return view('form_regist');
    }
    public function daftar(Request $reqbro){
        $validasi = Validator::make($reqbro->all(),[
            'usname'=>'required|unique:user,username',
            'pw'=>'required',
        ],[
            'usname.required'=> 'Username Wajib Diisi',
            'usname.unique'=> 'Username Sudah Terpakai',
            'pw.required'=> 'Password Wajib Diisi',
        ]);
        if ($validasi->fails()){
            return redirect('form_regist')
            ->withErrors($validasi)
            ->withInput();
        }else{
            $usname=$reqbro->usname;
            $pw=$reqbro->pw;
            $objek=new ModelLogin;
            $objek->username=$reqbro->usname;
            $objek->password=Hash::make($reqbro->pw);
            $objek->save();
            return redirect('form_regist')->with(['success'=>'Data Berhasil Disimpan!']);
        }
    }
    public function login_form(){
        return view('login');
    }
    public function login_ke_halaman(Request $reqbro){
        $validasi = Validator::make($reqbro->all(),[
            'usname'=> 'required',
            'pw' => 'required',
        ],[
            'usname.required' => 'Username Harus Diisi',
            'pw.required' => 'Password Harus Diisi',
        ]);
        if ($validasi->fails()){
            return back()->withErrors($validasi);
        }
        
        if (Auth::attempt(['username'=> $reqbro->usname,'password'=>$reqbro->pw])){
            if($reqbro->usname=='2213010427'&&$reqbro->pw=='2213010427'){
                $reqbro->session()->regenerate();
                return redirect()->intended('/tab_gaji');
            }elseif($reqbro->usname=='2213010428'&&$reqbro->pw=='2213010428')
            {
                $reqbro->session()->regenerate();
                return redirect()->intended('/tab_karyawan');
            }elseif($reqbro->usname=='2213010424'&&$reqbro->pw=='2213010424')
            {
                $reqbro->session()->regenerate();
                return redirect()->intended('/tab_absen');
            }
        }
            return back()->withErrors("Username/Password Salah");
    }
}
