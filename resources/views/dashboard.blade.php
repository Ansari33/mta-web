<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selamat Datang!</title>
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
       

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                       <h5><img src="{{asset('tampilan/images/logoumi.png')}}" style=" margin-right: 20px; height: 40px;">UNIVERSITAS MUSLIM INDONESIA</h5>
                       <h6 style="margin-left: 60px;">Fakultas Ilmu Komputer</h6>
                       
                    </div>
                    <!-- Search-from -->
                    <a href="/log_in" class="btn btn-primary"><i class="fa fa-lock"></i> Login</a>

                </div>
            </nav>
            <!--// top-bar -->
 
            <!-- main-heading -->

            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                <!-- Inline Form -->
                <div class="outer-w3-agile mt-3">
                    <h6 class="tittle-w3-agileits mb-4">Selamat Datang, Aplikasi Sumulasi Tes MTA</h6>
                    <div id="carouselExampleIndicators1" class="carousel slide text-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('tampilan/images/ban4.jpg')}}" alt="First Image">
                                <div class="carousel-caption">
                                    <h5>MTA (Microsoft Technical Associate)</h5>
                                    <p class="paragraph-agileits-w3layouts text-white">Merupakan Sertifikasi Tingkat Dasar yag Menyatakan Seseorang Memiliki Pengetahuan Memadai akan Dasar-dasar Teknologi Microsoft. Sertifikasi ini Cocok Untuk Memulai Karir Sebagai Ahli Teknologi yang Memanfaatkan Produk-Produk Microsoft</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('tampilan/images/ban5.jpg')}}" alt="Second Image">
                                <div class="carousel-caption">
                                    <h5>Aplikasi Simulasi Tes MTA</h5>
                                    <p class="paragraph-agileits-w3layouts text-white">Merupakan Aplikasi Berbasis Web Yang Menyediakan Soal-soal dari Tes-tes Sebelumnya Sebagai Pelatihan untuk Mengerjakan Ujian atau Tes Sertifikasi MTA Seperti Ujian Asli</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('tampilan/images/ban6.jpg')}}" alt="Third Image">
                                <div class="carousel-caption">
                                    <h5>SERTIFIKASI MTA FIKOM UMI</h5>
                                    <p class="paragraph-agileits-w3layouts text-white">Fakultas ILmu Komputer Universitas Muslim Indonesia bekerja sam dengan Trust Academi Solution dalam bidang pelatihan dan sertifikasi MTA. MTA adalah sertifikasi awal dari Microsoft untuk Meningkatkan Penilaian Mahasiswa dalam Menyongsong MEA, Mahasiswa akan Mendapatkan Gelar Professional sebagai Teknisi Komputer Berstandar Internasional. </p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <!--// Inline Form -->
               
                <!-- Forms-3 -->

                <!--// Forms-3 -->
                <!-- Forms-4 -->

                <!--// Forms-4 -->
            </section>

            <!--// Forms content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© {{date("Y")}} Aplikasi Simulasi Tes MTA 
                    
                </p>
            </div>
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
