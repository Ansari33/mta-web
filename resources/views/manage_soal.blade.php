
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Managemen Soal</title>
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
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/d_admin">
                        <i class="fas fa-th-large"></i>
                        Dashboard Admin
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
                        <h5>Managemen Soal</h5>
                    </div>
                    <!-- Search-from -->

                    <!--// Search-from -->
                  
                </div>
            </nav>
            <section class="forms-section">
            <div class="container-fluid">
                    <div class="row">

                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-xl mt-3" style=" margin-top: 10px;">
            <h4 class="tittle-w3-agileits mb-4">Input Data Soal</h4>
             <form action="/inputsoal" method="POST" enctype="multipart/form-data" id="form_input_soal">
                                @csrf
                                <div class="form-group row">
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
                                        <select name="tipe" id="tipe" class="form-control" onchange="ambilsoal();">
                                        <option value="1">Pilihan Ganda ( Pilih Satu ) </option>
                                        <option value="2">Pilih Banyak</option>
                                        <option value="3">Pilih Yes or No</option>
                                        <option value="4">List Box</option>
                                         </select>
                                    </div>
                                </div>
                                
                                <div id="details">

                                    <div class="form-group row">
            <div class="col-md-2">
                <label> Soal </label>    
            </div>
            <div class="col-md-10">
                <textarea class="form-control" name="soal" required>
                    
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan A </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_a"  id="opsi_a"class="form-control"  onkeyup="set_opsi('a')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan B </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_b" id="opsi_b" class="form-control" onkeyup="set_opsi('b')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan C </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_c" id="opsi_c" class="form-control" onkeyup="set_opsi('c')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan D </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_d" id="opsi_d" class="form-control" onkeyup="set_opsi('d')" value="-">
            </div>
        </div><div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan E </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_e" id="opsi_e" class="form-control" onkeyup="set_opsi('e')" value="-">
            </div>
        </div>
        <div id="pilihan" class="form-group row">
            <!-- <div class="form-group row"> -->
                <div class="col-md-2">
                    <label>
                        Jawaban Pilihan
                    </label>
                </div>
                <div class="col-md-10">
                   <div class="form-group row">
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_a"> <span id="j_a"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_b"> <span id="j_b"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_c"> <span id="j_c"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_d"> <span id="j_d"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_e"> <span id="j_e"></span></div>   
                   </div>     
                </div>
            <!-- </div> -->
            
        </div>
            
                                </div>

                                <div class="form-group row text-center" >
                                    
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success" type="">Input Soal</button>
                                    </div>
                                </div>
                            </form>
          
        </div>
                        <!--// Forms-1 -->
                        <!-- Forms-2 -->

                        <!--// Forms-2 -->
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- tipe soal 1 -->
    <div id="soal_1" style="display: none;">
        <div class="form-group row">
            <div class="col-md-2">
                <label> Soal </label>    
            </div>
            <div class="col-md-10">
                <textarea class="form-control" name="soal" required>
                    
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan A </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_a"  id="opsi_a"class="form-control"  onkeyup="set_opsi('a')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan B </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_b" id="opsi_b" class="form-control" onkeyup="set_opsi('b')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan C </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_c" id="opsi_c" class="form-control" onkeyup="set_opsi('c')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan D </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_d" id="opsi_d" class="form-control" onkeyup="set_opsi('d')" value="-">
            </div>
        </div><div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan E </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_e" id="opsi_e" class="form-control" onkeyup="set_opsi('e')" value="-">
            </div>
        </div>
        <div id="pilihan" class="form-group row">
            <!-- <div class="form-group row"> -->
                <div class="col-md-2">
                    <label>
                        Jawaban Pilihan
                    </label>
                </div>
                <div class="col-md-10">
                   <div class="form-group row">
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_a"> <span id="j_a"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_b"> <span id="j_b"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_c"> <span id="j_c"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_d"> <span id="j_d"></span></div>
                    <div class="col-md-12"><input type="radio" value="-" name="jawaban" id="jawaban_e"> <span id="j_e"></span></div>   
                   </div>     
                </div>
            <!-- </div> -->
            
        </div>
    </div>

    <!-- tipe soal 2 -->
    <div id="soal_2" style="display: none;">
        <div class="form-group row">
            <div class="col-md-2">
                <label> Soal </label>    
            </div>
            <div class="col-md-10">
                <textarea class="form-control" name="soal" required>
                    
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan A </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_a"  id="opsi_a"class="form-control"  onkeyup="set_opsi('a')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan B </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_b" id="opsi_b" class="form-control" onkeyup="set_opsi('b')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan C </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_c" id="opsi_c" class="form-control" onkeyup="set_opsi('c')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan D </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_d" id="opsi_d" class="form-control" onkeyup="set_opsi('d')" value="-">
            </div>
        </div><div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan E </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_e" id="opsi_e" class="form-control" onkeyup="set_opsi('e')" value="-">
            </div>
        </div>
        <div id="pilihan" class="form-group row">
            <!-- <div class="form-group row"> -->
                <div class="col-md-2">
                    <label>
                       Centang Pilihan Jawaban 
                    </label>
                </div>
                <div class="col-md-10">
                   <div class="form-group row">
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_a"> <span id="j_a"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_b"> <span id="j_b"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_c"> <span id="j_c"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_d"> <span id="j_d"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_e"> <span id="j_e"></span></div>   
                   </div>     
                </div>
            <!-- </div> -->
            
        </div>
        
    </div>

    <!-- tipe soal 3 -->
    <div id="soal_3" style="display: none;">
        <div class="form-group row">
            <div class="col-md-2">
                <label> Soal </label>    
            </div>
            <div class="col-md-10">
                <textarea class="form-control" name="soal" required>
                    
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan A </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_a"  id="opsi_a"class="form-control"  onkeyup="set_opsi('a')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan B </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_b" id="opsi_b" class="form-control" onkeyup="set_opsi('b')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan C </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_c" id="opsi_c" class="form-control" onkeyup="set_opsi('c')" value="-">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan D </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_d" id="opsi_d" class="form-control" onkeyup="set_opsi('d')" value="-">
            </div>
        </div><div class="form-group row">
            <div class="col-md-2">
                <label> Pilihan E </label>    
            </div>
            <div class="col-md-10">
                <input type="text" name="pilihan_e" id="opsi_e" class="form-control" onkeyup="set_opsi('e')" value="-">
            </div>
        </div>
        <div id="pilihan" class="form-group row">
            <!-- <div class="form-group row"> -->
                <div class="col-md-2">
                    <label>
                     Centang Pilihan Yes
                    </label>
                </div>
                <div class="col-md-10">
                   <div class="form-group row">
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_a"> <span id="j_a"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_b"> <span id="j_b"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_c"> <span id="j_c"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_d"> <span id="j_d"></span></div>
                    <div class="col-md-12"><input type="checkbox" value="-" name="jawaban[]" id="jawaban_e"> <span id="j_e"></span></div>   
                   </div>     
                </div>
            <!-- </div> -->
            
        </div>
        
    </div>


    <!-- Required common Js -->
    <script src="{{asset('tampilan/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //Required common Js -->

 <script type="text/javascript">
    function set_opsi(a) {
        var id = '#j_'+a;
        var jawaban = '#jawaban_'+a;
        var opsi = '#opsi_'+a;

        $(id).html($(opsi).val());
        $(jawaban).val($(opsi).val());
        console.log($(jawaban).val());
    }
    function tambah_pilihan(argument) {
       // $('#form_input_soal').preventDefault();
       var no=0;
        $('#pilihan').append(
          '<div class="form-group row" id="nomor'+no+'">'+
            '<div class="col-md-2">'+
                '<label> Pilihan Jawaban </label>'+    
            '</div>'+
            '<div class="col-md-8">'+
                '<input type="text" name="pilihan[]" class="form-control">'+
            '</div>'+
            '<div class="col-md-2">'+
                '<button type="button" class="btn btn-danger" onclick=hapus('+no+')><i class="fa fa-trash"></i> Hapus</button>'+
            '</div>'+
          '</div>'
        );
        no++;
    }

    function hapus(arg) {
        $('#nomor'+arg).remove();
    }


     function ambilsoal(argument) {
         // body...
         var tp = document.getElementById('tipe').value;
         if (tp == 1) {
            console.log($('#soal_1'));
            document.getElementById('details').innerHTML=$('#soal_1').html();
         }else if(tp == 2){
            document.getElementById('details').innerHTML=$('#soal_2').html();
         }else if(tp == 3){
            document.getElementById('details').innerHTML=$('#soal_3').html();
         }
            
         if (tp == 4) {
            $.ajax({
                type : "GET",
                url : "/ambil4",
                success :function(data){
                    document.getElementById('details').innerHTML=data;
                }
            });
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
