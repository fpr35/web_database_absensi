<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ModelJabatan;
use App\Models\ModelAbsen424;
use App\Models\ModelGaji427;
use App\Models\ModelKaryawan428;
use Illuminate\support\facades\hash;
use Illuminate\Support\Facades\Auth;


class Gaji427 extends Controller
{
    
    public function read427(){
        $data = ModelGaji427::paginate(3);
        return view('tab_gaji427',compact('data'));
    }
    public function delete427($id){
        ModelGaji427::find($id)->delete();
        return redirect()->back()->with('success','Hapus data sukses');
    }
    public function form_add427(){
        $datakrywn = ModelKaryawan428::all();
        $dataidjbtn = ModelJabatan::all();
        $datakdabs = ModelAbsen424::all();
        return view('form_add427',compact('datakrywn','dataidjbtn','datakdabs'));
    }
    public function create427(Request $reqbro){
        $validasi = Validator::make($reqbro->all(),[
            'kd_g427'=>'required|unique:gaji427,kd_gaji427',
            'id427'=>'required',
            'kd_j427'=>'required',
            'kd_a427'=>'required',
            'tgl427'=>'required',
            'gaji427'=>'required',
        ],[
            'kd_g427.required'=> 'Kode Gaji Wajib Diisi',
            'kd_g427.unique'=> 'Kode Gaji Sudah Terpakai',
            'id427.required'=> 'Id Karyawan Wajib Diisi',
            'kd_j427.required'=> 'Kode Jabatan Wajib Diisi',
            'kd_a427.required'=> 'Kode Absen Wajib Diisi',
            'tgl427.required'=> 'Tanggal Wajib Diisi',
            'gaji427.required'=> 'Gaji Wajib Diisi',
        ]);
        if ($validasi->fails()){
            return redirect('form_add427')
            ->withErrors($validasi)
            ->withInput();
        }else{
            $kd_g427=$reqbro->kd_g427;
            $id427=$reqbro->id427;
            $kd_j427=$reqbro->kd_j427;
            $kd_a427=$reqbro->kd_a427;
            $tgl427=$reqbro->tgl427;
            $gaji427=$reqbro->gaji427;
            $objek=new ModelGaji427;
            $objek->kd_gaji427=$reqbro->kd_g427;
            $objek->id_karyawan=$reqbro->id427;
            $objek->kd_jabatan=$reqbro->kd_j427;
            $objek->kd_absen=$reqbro->kd_a427;
            $objek->tanggal=$reqbro->tgl427;
            $objek->gajian=$reqbro->gaji427;
            $objek->save();
            return redirect('form_add420')->with(['success'=>'Data Berhasil Disimpan!']);
        }
    }
}
