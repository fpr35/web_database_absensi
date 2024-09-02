<html>
    <link rel="icon" href="{{asset('image/logoDL.png')}}">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('k3.css')}}">
    <script type="text/javascript" src="{{asset('jquery-3.7.1.js')}}"></script>
    <title>PT. Dan Liris</title>
    <head>
        <div id="headerk3" class="col-12">
            <img src="image/logoDL.png" width="5%">
            <ul>
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a href="{{url('tentangkami')}}">TENTANG KAMI</a></li>
                <li><a href="{{url('spinning')}}">SPINNING</a></li>
                <li><a href="{{url('weaving')}}">WEAVING</a></li>
                <li><a href="{{url('dfp')}}">DYEING, FINISHING & PRINTING</a></li>
                <li><a href="{{url('garmen')}}">GARMEN</a></li>
                <li><a href="{{url('database')}}">DATABASE</a></li>
            </ul>
        </div>
        <div id="header2k3" class="col-12" align="center">
            <br><br><br><br>
            <h4><b>KELEBIHAN KAMI</b></h4>
            <h1>Kami menyediakan solusi custom menyeluruh</h1>
        </div>
    </head>
    @yield('head')
    <footer>
        <div id="footer1k3" class="col-12">
            <div class="row">
                <div class="col-4">
                    <h4>ABOUT US</h4><br>
                    Danliris <br>
                    <p>Established in 1974, Danliris is a fully-integrated Indonesian textile and garment manufacturer providing Spinning, Weaving, Dyeing, Finishing & Printing as well as Garment manufacturing services. We deliver high-quality products to over 20 countries around the world as well as the domestic Indonesian market.</p>
                </div>
                <div class="col-4">
                    <h4>CONTACT</h4><br>
                    <img src="image/phone.png" style="margin-right:1%; margin-bottom:1%;" width="5%"> Phone: +62 271 740 888, +62 21 2903 5388 <br>
                    <img src="image/fax.png" width="7%"> Fax: +62 271 740 777 <br>
                    <img src="image/mail.png" width="7%"> Email: <a href="mailto:email@website.com" target="_blank">info@danliris.com</a> <br>
                    <img src="image/location.png" width="5%"> Address: Jl. Merapi No. 23 Banaran, Grogol, Sukoharjo 57552, Central Java, Indonesia <br><br>
                    <p>For specific enquiries, please contact the Spinning, Weaving, Printing & Finishing and Garment Divisions using their dedicated contact forms.</p>
                </div>
                <div class="col-4">
                    <h4>DAN LIRIS GROUP</h4><br>
                    <p>PT. Dan Liris</p>
                    <p>PT. Efrata Retailindo</p>
                    <p>PT. Multiyasa Abadi Sentosa</p>
                    <p>PT. Tabor Andalan Retailindo</p>
                    <p>PT. Ambassador Garmindo</p>
                </div>
            </div>
        </div>
        <div id="footer2k3" class="col-12">
            &copy Kelompok 3
        </div>
    </footer>
    <script src="{{asset('k3.js')}}"></script>
</html>