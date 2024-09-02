@extends('k3')
@section('head')
<div id="tabel428">
    <h3 align="center">Data Karyawan</h3>
    <a href="{{url('form_add428')}}" class="btn btn-success" style="float:right;width:12%;">Tambah</a>
    <!-- <div>
        <form method="POST">
            <input name="katakunci428"  id="cari" type="text" placeholder="Masukkan Kata Kunci">
            <button name="searching428" type="submit">Enter</button>
        </form>
    </div> -->
    <table class="table table-bordered" width="60%">
        <tr>
            <th>No</th>
            <th>ID Karyawan</th>
            <th>Kode Jabatan </th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        @php
            $no = 1; 
        @endphp
        @foreach($data as $row)
            <tr>
            <td>{{$no++}}</td>
            <td>{{$row->id_karyawan}}</td>
            <td>{{$row->kd_jabatan}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->umur}}</td>
            <td>{{$row->gender}}</td>
            <td>
            <form action="{{url('hapus_data428/'.$row->id_karyawan)}}" method="POST">
                {{method_field('delete')}}
                {{csrf_field()}}
            <button class='btn btn-danger' type="submit" onclick="return confirm('Yakin untuk hapus data ini?')">Del</button>
            </form>
            </td>
            </tr>
        @endforeach
    </table>
    {{$data->links('pagination::bootstrap-5')}}
    </div>
@endsection