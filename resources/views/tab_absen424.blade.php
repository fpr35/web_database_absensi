@extends('k3')
@section('head')
<div id="tabel424">
    <h3 align="center" style="background-color: #164564; color: white; width: 100%; height: 10%; ">Data Absensi Karyawan</h3>
    <a href="{{url('form_add424')}}" class="btn btn-warning" style="float:right;width:12%; margin-right: 10%;">Tambah +</a>
    <div class="cari424">

    </div>

    <table style="width: 80%; margin: 20px auto; border-collapse: collapse; box-shadow: 0 2px 3px rgba(0,0,0,0.1);" class="table table-bordered" width="60%">
        <tr id="tr424">
            <th>No</th>
            <th>Kode Absen</th>
            <th>Id Karyawan</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Update/Delete Data</th>
        </tr>
        @php $no = 1; @endphp

        @foreach($data as $row)
        <tr class='tbl424'>
            <td>{{$no++}}</td>
            <td>{{$row->kd_absen}}</td>
            <td>{{$row->id_karyawan}}</td>
            <td>{{$row->tanggal}}</td>
            <td>{{$row->jam_masuk}}</td>
            <td>{{$row->jam_keluar}}</td>
            <td>
            <form action="{{url('hapus_data424/'.$row->kd_absen)}}" method="POST">
                {{method_field('delete')}}
                {{csrf_field()}}
            <button class='btn btn-danger' type="submit" onclick="return confirm('Anda yakin untuk hapus data ini?')">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->links('pagination::bootstrap-5')}}
    </div>
@endsection