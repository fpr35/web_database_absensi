@extends('k3')
@section('head')
<div id="divdatabase" align="center">
    <h1>Database Absensi Karyawan</h1><br>
    <a href="{{url('tab_karyawan')}}" class='btn' id="btndatbase">Tabel Karyawan</a><br>
    <a href="{{url('tab_absen')}}" class='btn' id="btndatbase">Tabel Absen</a><br>
    <a href="{{url('tab_gaji')}}" class='btn' id="btndatbase">Tabel Gaji</a><br>
</div>
@endsection