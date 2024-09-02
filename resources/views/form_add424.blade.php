@extends('k3')
@section('head')
<div id="contadd424" class="container">
  <div class="card">
    <div style="background-color: #164564; color: white; width: 100%; height: 10%; " id="cheadadd424"class="card-header">
      <h3>Tambah Absensi Karyawan</h3>
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
        <form action="{{url('add424')}}" method="post">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="kd_a" class="col-sm-2 col-form-label">Kode Absen</label>
          <div class="col-sm-10">
            <input type="text" name="kd_a424" class="form-control" placeholder="Contoh : ABS001">
          </div>
        </div>
        <div class="form-group row">
          <label for="id" class="col-sm-2 col-form-label">Id Karyawan</label>
          <div class="col-sm-10">
            <input type="text" name="id424" class="form-control" placeholder="AYU390">
          </div>
        </div>
        <div class="form-group row">
          <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="date" name="tgl424" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="jam_m" class="col-sm-2 col-form-label">Jam Masuk</label>
          <div class="col-sm-10">
            <input type="time" name="jam_m424" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="jam_k" class="col-sm-2 col-form-label">Jam Keluar</label>
          <div class="col-sm-10">
            <input type="time" name="jam_k424" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <input type="submit" name="tambah" class="btn btn-warning" value="Tambah +" style="float:right;width:30%;margin-top:1%">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection