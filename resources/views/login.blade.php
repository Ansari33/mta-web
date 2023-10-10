<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{asset('tampilan/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="{{asset('tampilan/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="{{asset('tampilan/css/style4.css')}}">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="{{asset('tampilan/css/fontawesome-all.css')}}" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <ul class="collection">
                <li class="collection  d-flex justify-content-between">
                                            <img src="{{asset('tampilan/images/logoumi.png')}}" alt="" class="" style="width: 40px;">
                                            <div class="mid-cn" style="margin-left: 15px; margin-top: 8px;">
                                                
                                                <h6 class=""> <strong>FIKOM UMI</strong></h6>
                                                <h7 class=""> <strong>TES MTA</strong></h7>
                                            </div>
                </li>
                    </ul>
                
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>

                <li class="active">
                    <a href="/login">
                        <i class="fa fa-lock"></i>
                        Login
                    </a>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <h5>Simulasi Tes Sertifikasi MTA</h5>
                    </div>
                    <!-- Search-from -->

                    <!--// Search-from -->
                  
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->

            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                <!-- Inline Form -->

                <!--// Inline Form -->
                <div class="container-fluid">
                    <div class="row">

                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-md-8" style="margin-left :120px;">
                            <h4 class="tittle-w3-agileits mb-4">Silahkan Login!</h4>
                            
                            <form action="/golog" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="user" name="user" class="form-control" id="" placeholder="Username" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="pass" class="form-control" id="" placeholder="Password" required="">
                                    </div>
                                </div>

                                <div class="form-group row text-center" >
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Login</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" style="" onmouseenter=""  data-toggle="modal" data-target="#exampleModal" class="btn btn-success" >Daftarkan Akun Baru! </a>
                                    </div>
                                </div>
                                @if(session()->has('info'))
                            <p class="btn btn-danger btn-sm">{{session('info')}}</p>
                            @endif
                            </form>
                        </div>
                        <!--// Forms-1 -->
                        <!-- Forms-2 -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Registrasi User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                    <div class="">
                           <!-- <form action="#" method="POST"> --> 
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="nama" placeholder="Nama Lengkap" required="">
                                        <input type="hidden" name="" class="form-control" id="token" placeholder="" required="" value="{{csrf_token()}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="user" id="user" class="form-control" placeholder="Username" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="pass" id="pass" class="form-control" id="inputPassword3" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tgl"  class="form-control" id="ttl" placeholder="email" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="kelamin" class="form-control" id="kelamin">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" id="email" class="form-control" id="inputEmail3" placeholder="email" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="number" id="phone" name="phone" class="form-control" id="inputEmail3" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                    <textarea name="address" id="alamat" cols="100" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" id="inputEmail3" placeholder="Pekerjaan" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="tetxt" id="perusahaan" name="perusahaan" class="form-control"  placeholder="Perusahaan" required="">
                                    </div>
                                </div>
                                <div class="form-group row text-center" >
                                    <div class="col-sm-2">
                                        <button   id="simpan" onclick="input();" class="btn btn-primary"><i class="fa fa-save"></i> Create Account</button>
                                    </div>
                                    <script type="text/javascript">
                                        function input() {
                                            var token = document.getElementById('token').value;
                                            var nama = document.getElementById('nama').value;
                                            var user = document.getElementById('user').value;
                                            var pass = document.getElementById('pass').value;
                                            var email = document.getElementById('email').value;
                                            var phone = document.getElementById('phone').value;
                                            var alamat = document.getElementById('alamat').value;
                                            var pekerjaan = document.getElementById('pekerjaan').value;
                                            var perusahaan = document.getElementById('perusahaan').value;
                                            var ttl = document.getElementById('ttl').value;
                                            var kelamin = document.getElementById('kelamin').value;

                                            console.log(kelamin);
                                            if (nama == '' || user == '' || pass == '' || email  == '' || ttl  == '' || pekerjaan  == '' || perusahaan  == '') {
                                                //document.getElementById('simpan').disabled=true;
                                                document.getElementById('info').innerHTML=" Silahkan Melengkapi Form!";
                                                    $('#info').fadeIn();
                                                setTimeout(function(){ 
                                                    $('#info').fadeOut(); }, 3000);
                                            }else{
                                            $.ajax({
                                                type :"POST",
                                                url :"/regacc",
                                                data :  {_token:token,name:nama,user:user,pass:pass,email:email,phone:phone,address:alamat,kelamin:kelamin,ttl:ttl,perusahaan:perusahaan,pekerjaan},
                                                success :function(er){
                                                    console.log(er);
                                                    document.getElementById('info').innerHTML=er;
                                                    $('#info').fadeIn();
                                                    setTimeout(function(){ 
                                                    $('#info').fadeOut(); }, 3000);

                                                }
                                                });    
                                            }
                                            
                                        }
                                    </script>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali Ke Login</button>   
                                    </div>
                                </div>
                                    <div id="info" class="badge bg-primary"></div>
                          <!-- </form> --> 
                        </div>
                                </div>
                                <div class="modal-footer">
                                    
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        <!--// Forms-2 -->
                    </div>
                </div>
                <!-- Forms-3 -->

                <!--// Forms-3 -->
                <!-- Forms-4 -->

                <!--// Forms-4 -->
            </section>

            <!--// Forms content -->

            <!-- Copyright -->

            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src="{{asset('tampilan/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="{{asset('tampilan/js/bootstrap.min.js')}}"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
