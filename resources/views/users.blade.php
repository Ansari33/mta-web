<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Managemen User</title>
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
                <h1>
                    <a href="#">Admin</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/d_admin" class="active">
                        <i class="fas fa-th-large"></i>
                        Dashboard Admin
                    </a>
                </li>
                <li>
                    <a href="/i_soal">
                        <i class="fa fa-plus"></i>
                        Input Soal Baru
                    </a>
                </li>    
                <li class="">
                    <a href="/logo">
                        <i class="fa fa-lock"></i>
                        Logout
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
                        <h5>Daftar User Terdaftar</h5>
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
                        <div class="outer-w3-agile col-xl mt-3" style="">
                          
            
            <button data-toggle="modal" data-target="#exampleModal" style="float: right; margin-bottom: 10px;" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Super User</button>
            
                    <!-- popup content Form tambah User-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                        <div class="form-group">
                                            <form method="POST" action="/tambahu"> 
                                                @csrf
                                            <input type="text" placeholder="Username" class="form-control" name="user" required="" onkeyup="ceku();" id="user">
                                        </div>
                                        <div class="form-group">
                                            <input type="password"  class="form-control" placeholder="Password" name="pass" id="pass" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password"  class="form-control" id="cpass" placeholder="Konfirmasi Password" onkeyup="cek2();" required="">
                                        </div>
                                            <div id="info" class="btn btn-info btn-sm"> </div>
                                        <script type="">

                                            function ceku() {

                                                var p1=document.getElementById('user').value;
                                                if(p1 != ''){
                                                $.ajax({
                                                    type : "GET",
                                                    url : "/ceku/"+p1,

                                                    success :function(data){
                                                        document.getElementById('info').innerHTML=data;
                                                        if(data == 'User Tidak Tersedia'){
                                                            document.getElementById('tambah').disabled=true;
                                                        }else{
                                                            document.getElementById('tambah').disabled=false;
                                                        }
                                                    }
                                                });
                                            }else{
                                                document.getElementById('info').innerHTML='Silahkan Mengisi Form!';
                                            }
                                            }


                                            function cek2(argument) {
                                                var p1=document.getElementById('pass').value;
                                                var p2=document.getElementById('cpass').value;

                                                if (p1 == p2) {
                                                    console.log('pass cock');
                                                    document.getElementById('info').innerHTML="Password Cocok";
                                                    document.getElementById('tambah').disabled=false;
                                                }else{
                                                        console.log('pass tidak cock');
                                                        document.getElementById('info').innerHTML="Password Tidak Cocok";
                                                        document.getElementById('tambah').disabled=true;
                                                }

                                            }
                                        </script>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit"  class="btn btn-primary" id="tambah">Tambahkan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

            <div id="tabel">
                <table class="table table-hover">
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level  User</th>
            <th>Aktif</th>
            
            <th>Aksi</th>

            @foreach($user as $us)
            <tr>
                <td>{{$us->fullname}}</td> 
                <td>{{$us->User}}</td>
                <td>{{$us->Pass}}</td>
                @if($us->Level == 1)
                <td>Super Admin</td>
                @endif
                @if($us->Level == 0)
                <td>User Only</td>
                @endif
                <td>{{$us->aktif}}</td>
                <td>
                    <button onclick="hapusu('{{$us->User}}');" data-us="({{$us->User}})"  class="btn btn-danger btn-sm" title="Hapus User"><i class="fa fa-trash"></i></button>
                    <a href="#" onclick="faktorial();" class="btn btn-info btn-sm" title="Lihat User"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
            </table>
            </div>
            <script type="text/javascript">
                function faktorial() {
                    var ang= document.getElementById('angka').value;
                    console.log(ang);
                    var hasil= 1;
                    for (var i = parseInt(ang); i > 0; i--) {
                        var co = hasil+"x"+i;
                        var co= co+" "+co;
                        var hasil = hasil*i;

                    }
                    console.log(hasil);
                    
                    

                }
                function hapusu(us) {
                    var cx = us;
                    console.log(cx);
                    $.ajax({
                            type : "GET",
                            url : "/hapus_s/"+cx,
                            success :function(data){
                                console.log(cx);
                                document.getElementById('tabel').innerHTML=data;
                                console.log(data);
                                // if(data == 'User Tidak Tersedia'){
                                //     document.getElementById('tambah').disabled=true;
                                // }else{
                                //     document.getElementById('tambah').disabled=false;
                                // }
                            }
                        });
                }
            </script>
        </div>
                        <!--// Forms-1 -->
                        <!-- Forms-2 -->

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
