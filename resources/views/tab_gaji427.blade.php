@extends('k3')
@section('head')
<div id="tabel427">
    <h3 align="center">Data Gaji Karyawan</h3>
    <a href="{{url('form_add420')}}" class="btn btn-success" style="float:right;width:12%;">Tambah +</a>
    <div class="cari427">
        <form method="POST">
            <input name="cari427"  id="cari" type="text" placeholder="Type to Find Something" style="width:30%;height:6%;">
        </form>
    </div>

    <table class="table table-bordered" width="60%">
        <tr id="tr427">
            <th>No</th>
            <th>Kode Gaji</th>
            <th>ID Karyawan</th>
            <th>Kode Jabatan</th>
            <th>Kode Absen</th>
            <th>Tanggal</th>
            <th>Gaji</th>
            <th>Delete Data</th>
        </tr>
        @php $no = 1; @endphp

        @foreach($data as $row)
        <tr class='tbl427'>
            <td>{{$no++}}</td>
            <td>{{$row->kd_gaji427}}</td>
            <td>{{$row->id_karyawan}}</td>
            <td>{{$row->kd_jabatan}}</td>
            <td>{{$row->kd_absen}}</td>
            <td>{{$row->tanggal}}</td>
            <td>{{$row->gajian}}</td>
            <td>
            <form action="{{url('hapus_data427/'.$row->kd_gaji427)}}" method="POST">
                {{method_field('delete')}}
                {{csrf_field()}}
            <button id="btnlogout" type="submit" onclick="return confirm('Anda yakin untuk hapus data ini?')"><img src="{{asset('image/del.png')}}" width="45%"></button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->links('pagination::bootstrap-5')}}
    </div>
@endsection