<html>
 Hello world
@yield('judul')
@if(Auth::user()->username=='2213010427')
<a class="nav-link" href="{{url('t2')}}">T2</a>
@endif
</html>