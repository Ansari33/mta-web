<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Soal</title>
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
                    <a href="/d_admin">
                        <i class="fas fa-th-large"></i>
                        Dashboard Admin
                    </a>
                </li>

                <li class="active">
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
                        <h5>Managemen Soal</h5>
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
                        <div class="outer-w3-agile col-xl mt-3" style="margin: 100px; margin-top: 10px;">
            <h4 class="tittle-w3-agileits mb-4">Edit Data Soal</h4>
             <form action="/update_s" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <input type="hidden" name="id" value="{{$soal->id}}">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Soal</label>
                                    <div class="col-sm-10">
                                        <select name="jenis" class="form-control">
                                        <option value="network fundamental">network fundamental</option>
                                        <option value="database fundamental">database fundamental</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tipe Soal</label>
                                    <div class="col-sm-10">
                                        <select name="tipe" id="tipe" class="form-control">
                                        <option value="1">Pilih Satu</option>
                                        <option value="2">Pilih Banyak</option>
                                        <option value="3">Yes Or No</option>
                                        <option value="4">List Box</option>
                                         </select>
                                    </div>
                                </div>
                                @if($soal->tipe == 1)
                                <script type="text/JavaScript">
                                $('#tipe').val({!!$soal->tipe!!});
                                document.getElementById('tipe').value={!!$soal->tipe!!};    
                                </script>
                                @endif
                                @if($soal->tipe == 2)
                                <script type="text/javaScript">
                                  var p = document.getElementById('tipe').value;
                                    console.log(p);
                                 var p = document.getElementById('tipe').value={!!$soal->tipe!!};
                                </script>
                                @endif
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Soal</label>
                                    <div class="col-sm-10">
                                    <textarea name="soal" id="" cols="100" class="form-control" rows="3">{{$soal->soal}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pilihan A</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="a" value="{{$soal->a}}" class="form-control" id="inputEmail3" placeholder="Pilihan A" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pilihan B</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="b" value="{{$soal->b}}" class="form-control" id="inputEmail3" placeholder="Pilihan B" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pilihan C</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="c" value="{{$soal->c}}" class="form-control" id="inputEmail3" placeholder="Pilihan C" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pilihan D</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$soal->d}}" name="d" class="form-control" id="inputEmail3" placeholder="Pilihan D" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jawaban</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jawaban" value="{{$soal->jawaban}}" class="form-control" id="inputEmail3" placeholder="jawaban" required="">
                                    </div>
                                </div>
                                <div class="form-group row text-center" >
                                    
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-warning" type="">Update Soal</button>
                                    </div>
                                </div>
                            </form>
          
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
