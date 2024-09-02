@extends('k3')
@section('head')
<div id="contadd427" class="container">
  <div class="card">
    <div id="cheadadd427"class="card-header">
      <h3>Tambah Data Gaji Karyawan</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
      <form action="{{url('add427')}}" id="formadd427" method="post">
        {{csrf_field()}}
      <div class="form-group row">
          <label for="kd_g427" class="col-sm-2 col-form-label">Kode Gaji</label>
          <div class="col-sm-10">
            <input type="text" name="kd_g427" class="form-control" placeholder="Contoh : KDG001"required>
          </div>
        </div>

        <div class="form-group row">
          <label for="id427" class="col-sm-2 col-form-label">ID Karyawan</label>
          <div class="col-sm-10">
            <select name="id427" required>
            @foreach($datakrywn as $row) 
                <option value='{{$row->id_karyawan}}'>{{$row->id_karyawan}}</option>
            @endforeach           
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="kd_j427" class="col-sm-2 col-form-label">Kode Jabatan</label>
          <div class="col-sm-10">
            <select name="kd_j427" required>
            
              @foreach($dataidjbtn as $row) 
                <option value='{{$row->kd_jabatan}}'>{{$row->nama_jabatan}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="kd_a427" class="col-sm-2 col-form-label">Kode Absen</label>
          <div class="col-sm-10">
            <select name="kd_a427" required>
            
              @foreach ($datakdabs as $row) 
                <option value='{{$row->kd_absen}}'>{{$row->kd_absen}}</option>
              @endforeach            
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="tgl427" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="date" name="tgl427" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="gaji427" class="col-sm-2 col-form-label">Gaji</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="gaji427" placeholder="Pastikan Hanya Memasukkan Angka Saja Pada Kolom Ini"required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <button type="submit" name="tambah" class="btn btn-success" style="float:right;width:30%;margin-top:1%">Tambah +</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection