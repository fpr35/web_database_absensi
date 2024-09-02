@extends('k3')
@section('head')
<title>Login</title>
    <body>
        <div align="center">
        <form action="{{url('register')}}" id="formlogin" method="POST">
            {{ csrf_field() }}
            <h4><b>Daftar Akun</b></h4>
            <label for="id">Username</label><br>
            <input type="text" name="usname" placeholder="Masukkan Username" required><br>
            <label for="pw">Password</label><br>
            <input type="password" name="pw" placeholder="Masukkan Password" required><br><br>
            <button type="submit">Sign-up</button><br>
        </form>
        <br><br>
@endsection