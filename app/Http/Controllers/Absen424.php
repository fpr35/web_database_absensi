<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ModelAbsen424;
use App\Models\ModelKaryawan428;
use Illuminate\support\facades\hash;
use Illuminate\Support\Facades\Auth;

class Absen424 extends Controller
{
    public function show424(){
        $data = ModelAbsen424::paginate(3);
        return view('tab_absen424',compact('data'));
    }
    public function delete424($id){
        ModelAbsen424::find($id)->delete();
        return redirect()->back()->with('success','Hapus data sukses');
    }
    public function form_add424(){
        
        return view('form_add424');
    }
    public function add424(Request $requestt){
        $validatorr = Validator::make($requestt->all(),[
            'kd_a424'=>'required|unique:absen424,kd_absen',
            'id424'=>'required',
            'tgl424'=>'required',
            'jam_m424'=>'required',
            'jam_k424'=>'required',

        ],[
            'kd_a424.required'=> 'Kode Absen Wajib Diisi',
            'kd_a424.unique'=> 'Kode Absen Sudah Terpakai',
            'id424.required'=> 'ID Wajib Diisi',
            'tgl424.required'=> 'Tanggal Wajib Diisi',
            'jam_m424.required'=> 'Masukan Jam Masuk',
            'jam_k424.required'=> 'Masukan Jam Keluar',
        ]);
        if ($validatorr->fails()){
            return redirect('form_add424')
            ->withErrors($validatorr)
            ->withInput();
        }else{
            $kd_a424=$requestt->kd_a424;
            $id424=$requestt->id424;
            $tgl424=$requestt->tgl424;
            $jam_m424=$requestt->jam_m424;
            $jam_k424=$requestt->jam_k424;
            $objek=new ModelAbsen424();
            $objek->kd_absen=$requestt->kd_a424;
            $objek->id_karyawan=$requestt->id424;
            $objek->tanggal=$requestt->tgl424;
            $objek->jam_masuk=$requestt->jam_m424;
            $objek->jam_keluar=$requestt->jam_k424;
            $objek->save();
            return redirect('form_add424')->with(['success'=>'Data Berhasil Disimpan!']);
        }
    }
}
