<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mulai Tes | Silahkan Menjawab Soal</title>
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
                <h5>Selamat Mengerjakan, Selesaikan Semua Soal dengan Benar Tepat Waktu!</h5>
            </nav>
                <div class="container-fluid">
                    <div class="row">
                        <div class="outer-w3-agile col-md-9" style="">
                            <form action="/goresult" method="post" name="soal" id="myform">
                                @csrf
                                 @php
                                 $no = 1;
                                @endphp
                                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                @foreach($soal2 as $s)
                                <!-- jika no samadengan 1 --> 
                                @if($no  ==  1)
                                     @if($s->tipe == 1)
                                        <div class="carousel-item active">
                                <div style="float: right;">
                                    <div class="form-group">
                                    <input type="checkbox" name="" id="c{{$no}}"  onclick="tanda({!!$no!!});" >
                                <label for="c{{$no}}">Tandai</label>
                                    </div>
                                </div>
                                <h6 class="tittle-w3-agileits mb-4" style="text-align: center;">Soal No {{$no}} </h6>
                                    <p style="margin-bottom: 20px;">
                                        <strong>{{$s->soal}}</strong>
                                    </p>
                                
                                <input type="hidden" name="soal[]" value="{{$s->id}}">
                                <input type="hidden" name="{{$s->id}}" value="{{$s->soal}}">
                                    <div class="custom-group">
                                        <input  type="radio" id="opa" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][0]}}" required="" >
                                        <label class="" for="opa">{{$op['x-'.$s->id][0]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][1]}}" id="opb" required="" >
                                        <label class="" for="opb">{{$op['x-'.$s->id][1]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][2]}}" required="" id="opc">
                                        <label class="" for="opc">{{$op['x-'.$s->id][2]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][3]}}" required="" id="opd">
                                        <label class="" for="opd" >{{$op['x-'.$s->id][3]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][4]}}" required="" id="opd">
                                        <label class="" for="opd" >{{$op['x-'.$s->id][4]}}</label>
                                    </div>
                                </div>
                                

                                @elseif($s->tipe == 2)
                                    <div class="carousel-item active">
                                        <div style="float: right;">   
                                            <input type="checkbox" name="" id="c{{$no}}"  onclick="tanda({!!$no!!});" >    
                                            <label for="c{{$no}}">Tandai</label>
                                        </div>
                                        <h6 class="tittle-w3-agileits mb-4" style="text-align: center;">Soal No {{$no}} </h6>
                                        <p style="margin-bottom: 20px;"> <strong>{{$s->soal}} </strong> </p>
                                        
                                        <input type="hidden" name="soal[]" value="{{$s->id}}">
                                        <input type="hidden" name="{{$s->id}}" value="{{$s->soal}}">

                                        <div class="form-group">
                                            <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][1]}}" required="" >
                                            <label class="" >{{$op['x-'.$s->id][1]}}</label>
                                        </div>

                                        <div class="form-group">
                                            <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][2]}}"  >
                                            <label class="" >{{$op['x-'.$s->id][2]}}</label>
                                        </div>

                                        <div class="form-group">
                                            <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][3]}}"  >
                                            <label class="" >{{$op['x-'.$s->id][3]}}</label>
                                        </div>

                                        <div class="form-group">
                                            <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][0]}}"  >
                                            <label class="" >{{$op['x-'.$s->id][0]}}</label>
                                        </div>

                                        <div class="form-group">
                                            <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][4]}}"  >
                                            <label class="" >{{$op['x-'.$s->id][4]}}</label>
                                        </div>
                                    </div>
                                @elseif($s->tipe == 3)
                                <div class="carousel-item active">
                                    <div style="float: right;">   
                                            <input type="checkbox" name="" id="c{{$no}}"  onclick="tanda({!!$no!!});" >    
                                            <label for="c{{$no}}">Tandai</label>
                                    </div>

                                    <h6 class="tittle-w3-agileits mb-4" style="text-align: center;">Soal No {{$no}} </h6>
                                    <p style="margin-bottom: 20px;"> <strong>{{$s->soal}} </strong> </p>
                                    
                                    <input type="hidden" name="soal[]" value="{{$s->id}}">
                                    <input type="hidden" name="{{$s->id}}" value="{{$s->soal}}">
                                  <div class="form-group row">
                                    <div class="col-md-10">
                                        <label class="" >{{$op['x-'.$s->id][0]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][1]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][2]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][3]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][4]}}</label>
                                        <br>
                                    </div>
                                    <div class="col-md-2">
                                        
                                    </div>  
                                  </div>
                                </div>
                                @endif
                                  
                                @if($s->tipe == 4)
                                <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">{{$s->soal}}</div>
                                    <div class="col-sm-6"><img src="{{asset('tampilan/images/')}}/{{$s->gambar}}" style="width: 100;"></div>
                                    <div class="col-sm-7">{{$s->soal41}}
                                    </div>
                                    <div class="col-sm-5">
                                        @php
                                        $p1 = explode(',',$s->pilihan1);
                                        @endphp
                                        <select name="pilihan{{$s->id}}[]">
                                            <option value="{{$p1[0]}}">{{$p1[0]}}</option>
                                            <option value="{{$p1[1]}}">{{$p1[1]}}</option>
                                            <option value="{{$p1[2]}}">{{$p1[2]}}</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-7" style="margin-top: 40px;">{{$s->soal42}}
                                    </div>
                                    <div class="col-sm-5" style="margin-top: 40px;">
                                        @php
                                        $p2 = explode(',',$s->pilihan2);
                                        @endphp
                                        <select name="pilihan{{$s->id}}[]">
                                            <option value="{{$p2[0]}}">{{$p2[0]}}</option>
                                            <option value="{{$p2[1]}}">{{$p2[1]}}</option>
                                            <option value="{{$p2[2]}}">{{$p2[2]}}</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                @endif
                            @endif
                                @if($no > 1)
                                     @if($s->tipe == 1)
                                <div class="carousel-item">
                                    <div style="float: right;">
                                    <input type="checkbox" name="" id="c{{$no}}"  onclick="tanda({!!$no!!});" >
                                <label for="c{{$no}}">Tandai</label>
                                </div>
                                    <h6 class="tittle-w3-agileits mb-4" style="text-align: center;">Soal No {{$no}} </h6>
                                    <p style="margin-bottom: 20px;">
                                        <strong>{{$s->soal}}</strong>
                                    </p>
                                    
                                    <input type="hidden" name="soal[]" value="{{$s->id}}">
                                    <input type="hidden" name="{{$s->id}}" value="{{$s->soal}}">
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][0]}}" required="" id="opa" >
                                        <label class="" for="opa">{{$op['x-'.$s->id][0]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][1]}}" required="" id="opb">
                                        <label class="" for="opb" >{{$op['x-'.$s->id][1]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][2]}}" required="" id="opc" >
                                        <label class="" for="opc">{{$op['x-'.$s->id][2]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][3]}}" required="" id="opd">
                                        <label class="" for="opd">{{$op['x-'.$s->id][3]}}</label>
                                    </div>
                                    <div class="custom-group">
                                        <input  type="radio" name="pilihan{{$s->id}}" value="{{$op['x-'.$s->id][4]}}" required="" id="opd">
                                        <label class="" for="opd">{{$op['x-'.$s->id][4]}}</label>
                                    </div>
                                </div>
                              
                                @elseif($s->tipe == 2)
                                <div class="carousel-item">
                                    <div style="float: right;">
                                    <input type="checkbox" name="" id="c{{$no}}"  onclick="tanda({!!$no!!});" >
                                <label for="c{{$no}}">Tandai</label>
                                </div>
                                    <h6 class="tittle-w3-agileits mb-4" style="text-align: center;">Soal No {{$no}} </h6>
                                    <p style="margin-bottom: 20px;">
                                        <strong>{{$s->soal}}</strong>
                                    </p>
                                    
                                    
                                    <input type="hidden" name="soal[]" value="{{$s->id}}">
                                    <input type="hidden" name="{{$s->id}}" value="{{$s->soal}}">
                                    <div class="form-group">
                                        <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][1]}}"  >
                                        <label class="" >{{$op['x-'.$s->id][1]}}</label>
                                    </div>
                                    <div class="form-group">
                                        <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][2]}}"  >
                                        <label class="" >{{$op['x-'.$s->id][2]}}</label>
                                    </div>
                                    <div class="form-group">
                                        <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][3]}}"  >
                                        <label class="" >{{$op['x-'.$s->id][3]}}</label>
                                    </div>
                                    <div class="form-group">
                                        <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][0]}}"  >
                                        <label class="" >{{$op['x-'.$s->id][0]}}</label>
                                    </div>
                                    <div class="form-group">
                                        <input  type="checkbox" name="pilihan{{$s->id}}[]" value="{{$op['x-'.$s->id][4]}}"  >
                                        <label class="" >{{$op['x-'.$s->id][4]}}</label>
                                    </div>
                                </div>
                                @elseif($s->tipe == 3)
                                <div class="carousel-item">
                                    <div style="float: right;">   
                                        <input type="checkbox" name="" id="c{{$no}}"  onclick="tanda({!!$no!!});" >    
                                        <label for="c{{$no}}">Tandai</label>
                                    </div>
                                    <h6 class="tittle-w3-agileits mb-4" style="text-align: center;">Soal No {{$no}} </h6>
                                    <p style="margin-bottom: 20px;"> <strong>{{$s->soal}} </strong> </p>
                                    
                                    <input type="hidden" name="soal[]" value="{{$s->id}}">
                                    <input type="hidden" name="{{$s->id}}" value="{{$s->soal}}">
                                    
                                  <div class="form-group row">
                                    <div class="col-md-10">
                                        <label class="" >{{$op['x-'.$s->id][0]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][1]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][2]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][3]}}</label>
                                        <br>
                                        <label class="" >{{$op['x-'.$s->id][4]}}</label>
                                        <br>
                                    </div>
                                    <div class="col-md-2">
                                        
                                    </div>  
                                  </div>
                                </div>
                                @endif



                                @if($s->tipe == 4)
                                <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-sm-6">{{$s->soal}}</div>
                                    <div class="col-sm-6"><img src="{{asset('tampilan/images/')}}/{{$s->gambar}}" style="width: 200;"></div>
                                    <div class="col-sm-7">{{$s->soal41}}
                                    </div>
                                    <div class="col-sm-5">
                                        @php
                                        $p1 = explode(',',$s->pilihan1);
                                        @endphp
                                        <select name="pilihan{{$s->id}}[]">
                                            <option value="{{$p1[0]}}">{{$p1[0]}}</option>
                                            <option value="{{$p1[1]}}">{{$p1[1]}}</option>
                                            <option value="{{$p1[2]}}">{{$p1[2]}}</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-7" style="margin-top: 40px;">{{$s->soal42}}
                                    </div>
                                    <div class="col-sm-5" style="margin-top: 40px;">
                                        @php
                                        $p2 = explode(',',$s->pilihan2);
                                        @endphp
                                        <select name="pilihan{{$s->id}}[]">
                                            <option value="{{$p2[0]}}">{{$p2[0]}}</option>
                                            <option value="{{$p2[1]}}">{{$p2[1]}}</option>
                                            <option value="{{$p2[2]}}">{{$p2[2]}}</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                @endif

                                @endif
                                
                                @php
                                $no++;
                                @endphp
                                @endforeach
                                </div>

                                </div>
                                            
                                            <div class="container text-center" style="margin: 10px;  bottom: 0">
                                                <button name="btnsubmit" id="selesai"  type="submit" class="btn btn-primary">Selesai</button>
                                <a class="btn btn-success" href="#carouselExampleIndicators1" role="button" data-slide="prev" style="float: left;">
                                    <i class="fa fa-chevron-left"></i> Sebelumnya
                                </a>
                                <a class="btn btn-success" href="#carouselExampleIndicators1" role="button" data-slide="next" style="float: right;">
                                    Selanjutnya <i class="fa fa-chevron-right"></i>
                                </a>
                                            </div>
                                
                            </form>
                            
                        </div>
                        <div class="outer-w3-agile col-md-3">
                            <div class="row">

                            @for($i = 1; $i <= Session()->get('so');$i++)
                            @php
                            if($i <10){
                            @endphp
                            <div class="col-sm-1" style="margin:2px;">
                        <a data-target="#carouselExampleIndicators1" data-slide-to="{{$i-1}}" class="btn btn-sm btn-info" style="" id="s{{$i}}">0{{$i}}</a>
                            </div>
                            @php
                            }else{
                            @endphp
                            <div class="col-sm-1" style="margin:2px;">
                        <a data-target="#carouselExampleIndicators1" data-slide-to="{{$i-1}}" class="btn btn-sm btn-info" style="" id="s{{$i}}">{{$i}}</a>
                            </div>
                            @php
                            }
                            @endphp
                            @endfor
                            
                            </div>

                         <center><h1><span id="wakt"  class="btn btn-success text-center" style="bottom: 5px;"></span></h1></center>
                            
                        </div>
                        <!--// Forms-1 -->
                        <!-- Forms-2 -->

                        <!--// Forms-2 -->
                    </div>
                </div>
            

            <!--// Forms content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© {{date("Y")}} Aplikasi Simulasi Tes MTA 
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>

@php
$s = Session()->get('so');
$t = Session()->get('time') - 1;
@endphp
    <!--  common Js -->
    <script src="{{asset('tampilan/js/jquery-3.2.1.min.js')}}"></script>
    <!-- //Required common Js -->
<script>    
var jj =[];

        function isi(arg) {
            console.log(arg);
            jj.push(arg);
            console.log(jj);
            document.getElementById('jjw').value=jj;
        }
        function popo(arg) {
            console.log(arg);
            jj.pop(arg);
            console.log(jj);
            document.getElementById('jjw').value=jj;
        }
   

var ss = document.getElementById("selesai");
        var m = {{$t}};
        var s = 60;

        var waktu = setInterval(function(){
            s--;
                if (s == 0) {
                    m--;
                    s = 59; }

         document.getElementById("wakt").innerHTML = m+" : "+s;
            if (m < 0 ) {
                document.getElementById("wakt").backgroundColor = "red";
                document.getElementById("wakt").innerHTML = "Times Over!";
                document.forms[0].submit();
            }
          }, 1000);
</script>
<script type="text/javascript">
    function tanda(x) {
        var ide ="c"+x;
        var ni =  "s"+x;
        var cek = document.getElementById(ide);
        console.log(ide);
        if (cek.checked == true) {

            var no = document.getElementById(ni);
            console.log(ni);
            no.style.backgroundColor = "red";
        }else{

            var no = document.getElementById(ni);
            console.log(ni);
            no.style.backgroundColor = "#17a2b8";
        }
    }
</script>
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
            $("#carouselExampleIndicators1").carousel({interval:false});
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
    <script type="text/javascript">
        
    </script>

</body>

</html>
