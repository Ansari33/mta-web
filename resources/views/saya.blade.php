<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasil Tes Saya</title>
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
                                                <h7 class=""> {{Session()->get('user')}}</h7>
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
                    <a href="/prof">
                        <i class="fa fa-user"></i>
                        Profile
                    </a>
                </li>
                        <li class="">
                    <a href="/prep">
                        <i class="fa fa-wrench"></i>
                        Preparation Test
                    </a>
                </li>
                <li class="">
                    <a href="/logo">
                        <i class="fa fa-times"></i>
                        Logout
                    </a>
                </li>


            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
               <h5>Simulasi Sertifikasi MTA</h5> 
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->

            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                <!-- Inline Form -->
<!--// three-grids -->

<div class="container-fluid">
    <div class="row">
        <!-- Calender -->
        <div class="outer-w3-agile col-xl-12 mt-3">
            <h5 style="margin-bottom: 10px;">Hasil Tes Saya</h5>
            <table class="table table-hover">
                <tr>
                <th>Jenis Soal</th>
                <th>jumlah Soal</th>
                <th>Benar</th>
                <th>Salah</th>
                <th>Hasil</th>
                </tr>
                @foreach($data2 as $d2)
                <tr>
                    
                    <td>{{$d2->kategori_soal}}</td>
                    <td>{{$d2->jumlah}}</td>
                    <td>{{$d2->benar}}</td>
                    <td>{{$d2->salah}}</td>
                    <td>{{$d2->status}}</td>
                </tr>
                @endforeach
            </table>
            <p>{{$data2->links()}}</p>
        </div>
        
        <!--// Calender -->
        <!-- Profile -->
       
        <!--// Profile -->
        <!-- Browser stats -->
       
        <!--// Browser stats -->
    </div>
</div>
<!--// Three-grids -->

            <section>
                  
                <div class="container-fluid collapse" id="ubah">
    <div class="row">
        <!-- Calender -->
        <div class="outer-w3-agile col-xl-12 mt-3">
            <h5 style="margin-bottom: 10px;">Hasil Tes Saya</h5>
            <table class="table table-responsive">
                <tr>
                <th>Jenis Soal</th>
                <th>jumlah Soal</th>
                <th>Benar</th>
                <th>Salah</th>
                <th>Hasil</th>
                </tr>
                @foreach($data2 as $d2)
                <tr>
                    
                    <td>{{$d2->kategori_soal}}</td>
                    <td>{{$d2->jumlah}}</td>
                    <td>{{$d2->benar}}</td>
                    <td>{{$d2->salah}}</td>
                    <td>{{$d2->status}}</td>
                </tr>
                @endforeach
            </table>
            <p>{{$data2->links()}}</p>
        </div>
        <!--// Calender -->
        <!-- Profile -->
        
        <!--// Profile -->
        <!-- Browser stats -->
       
        <!--// Browser stats -->
    </div>
</div>
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
