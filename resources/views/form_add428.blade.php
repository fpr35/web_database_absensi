@extends('k3')
@section('head')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Tambah Data Karyawan</h3>
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
    <form action="{{url('add428')}}" method="post">
    {{csrf_field()}}
      <div class="form-group row">
          <label for="id" class="col-sm-2 col-form-label">ID Karyawan</label>
          <div class="col-sm-10">
            <input type="text" name="id_karyawan428" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="kd_jabatan428" class="col-sm-2 col-form-label">Kode Jabatan</label>
          <div class="col-sm-10">
            <select name="kd_jabatan428" >
            @foreach($dataidjbtn as $row) 
                <option value='{{$row->kd_jabatan}}'>{{$row->nama_jabatan}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="nama428" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" name="nama428" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="umur428" class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-10">
            <input type="number" name="umur428" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="gender428" class="col-sm-2 col-form-label">Gender</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="gender428" >
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <input type="submit" name="tambah" class="btn btn-success" value="Tambah" style="float:right;width:30%;margin-top:1%">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection