@extends('k3')
@section('head')
<title>Login</title>
    <body>
        <div align="center">
        <form action="{{url('login_ke_halaman')}}" id="formlogin" method="POST">
            {{ csrf_field() }}
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                {{$error}}
                @endforeach
            </ul>
        </div>
        @endif
            <h4><b>Harap Login Terlebih Dahulu</b></h4>
            <label for="id">Username</label><br>
            <input type="text" name="usname" placeholder="Masukkan Username" required><br>
            <label for="pw">Password</label><br>
            <input type="password" name="pw" placeholder="Masukkan Password" required><br><br>
            <button type="submit">Log-in</button><br><br>
            <h5>Belum Punya Akun? Daftar Dulu</h5> <a href="{{url('form_regist')}}" class="btn btn-success" style="">Daftar</a>
        </form>
        <br><br>
@endsection