<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ModelJabatan;
use App\Models\ModelKaryawan428;
use Illuminate\support\facades\hash;
use Illuminate\Support\Facades\Auth;

class Karyawan428 extends Controller
{
    public function show428(){
        $data = ModelKaryawan428::paginate(3);
        return view('tab_karyawan428',compact('data'));
    }
    public function delete428($id){
        ModelKaryawan428::find($id)->delete();
        return redirect()->back()->with('success','Hapus data sukses');
    }
    public function form_add428(){
        $dataidjbtn = ModelJabatan::all();
        return view('form_add428',compact('dataidjbtn'));
    }
    public function add428(Request $requestt){
        $validatorr = Validator::make($requestt->all(),[
            'id_karyawan428'=>'required|unique:karyawan428,id_karyawan',
            'kd_jabatan428'=>'required',
            'nama428'=>'required',
            'umur428'=>'required',
            'gender428'=>'required',

        ],[
            'id_karyawan428.required'=> 'ID Karyawan Wajib Diisi',
            'id_karyawan428.unique'=> 'Kode Karyawan Sudah Terpakai',
            'kd_jabatan428.required'=> 'Kode Jabatan Wajib Diisi',
            'nama428.required'=> 'Nama Wajib Diisi',
            'umur428.required'=> 'Umur Wajib Diisi',
            'gender428.required'=> 'Gender Wajib Diisi',
        ]);
        if ($validatorr->fails()){
            return redirect('form_add428')
            ->withErrors($validatorr)
            ->withInput();
        }else{
            $id_karyawan428=$requestt->id_karyawan428;
            $kd_jabatan428=$requestt->kd_jabatan428;
            $nama428=$requestt->nama428;
            $umur428=$requestt->umur428;
            $gender428=$requestt->gender428;
            $objek=new ModelKaryawan428;
            $objek->id_karyawan=$requestt->id_karyawan428;
            $objek->kd_jabatan=$requestt->kd_jabatan428;
            $objek->nama=$requestt->nama428;
            $objek->umur=$requestt->umur428;
            $objek->gender=$requestt->gender428;
            $objek->save();
            return redirect('form_add428')->with(['success'=>'Data Berhasil Disimpan!']);
        }
    }
}
