<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test Result</title>
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
            </div>            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li class="">
                    <a href="/prof">
                        <i class="fas fa-th"></i>
                        Profile
                    </a>
                </li>

                <li class="">
                    <a href="/prep">
                        <i class="far fa-envelope"></i>
                        Preparation

                    </a>
                </li>
                <li>
                    <a href="/exam">
                        <i class="far fa-window-restore"></i>
                        Exam
                    </a>
                </li>
                <li>
                    <a href="/rev">
                        <i class="fas fa-table"></i>
                        Review
                    </a>
                </li>

                <li>
                    <a href="/rest">
                        <i class="far fa-map"></i>
                        Result
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
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->

                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge">4</span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">User notifications</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>4 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>6 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>12 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>1 days ago</h6>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">view all notifications</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Shortcuts</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-chart-pie mr-3"></i>Sed feugiat</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-connectdevelop mr-3"></i>Aliquam sed</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-tasks mr-3"></i>Lorem ipsum</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Cras rutrum</h4>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Activity</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-envelope mr-3"></i>Messages</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-question-circle mr-3"></i>Faq</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html">Logout</a>
                            </div>
                        </li>
                    </ul>
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
                        <!-- Stats -->
                        <div class="outer-w3-agile col-xl">
                            <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                                <div class="s-l">
                                    <h5>Kategori Soal Network Fundamental</h5>
                                    <p class="paragraph-agileits-w3layouts text-white">Network Fundamental</p>
                                </div>
                                <div class="s-r">
                                    <h6>340
                                        <i class="far fa-edit"></i>
                                    </h6>
                                </div>
                            </div>
                            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                                <div class="s-l">
                                    <h5>Jawaban Benar</h5>

                                </div>
                                <div class="s-r">
                                    <h6>250
                                        <i class="far fa-smile"></i>
                                    </h6>
                                </div>
                            </div>
                            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                                <div class="s-l">
                                    <h5>Jawaban Salah</h5>

                                </div>
                                <div class="s-r">
                                    <h6>232
                                        <i class="fas fa-tasks"></i>
                                    </h6>
                                </div>
                            </div>
                            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-secondary">
                                <div class="s-l">
                                    <h5>Employees</h5>
                                    <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                                </div>
                                <div class="s-r">
                                    <h6>190
                                        <i class="fas fa-users"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!--// Stats -->
                        <!-- Pie-chart -->
                        <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
                            <div id="chart-1"></div>
                        </div>
                        <!--// Pie-chart -->
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
    <script src="{{asset('tampilan/js/amcharts.js')}}"></script>
    <script src="{{asset('tampilan/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tampilan/js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('tampilan/js/modernizr.js')}}"></script>
    <script src="{{asset('tampilan/js/SimpleChart.js')}}"></script>
    <script src="{{asset('tampilan/js/rumcaJS.js')}}"></script>
    <script src="{{asset('tampilan/js/chart1.js')}}"></script>
    <script>
    $( document ).ready(function() {
        'use strict';

        // Data to charts
        var data = [{
            "name": "Miasta",
            "axisY": ["Manhattan", "Bronx", "Staten Island", "Wyry", "Brooklyn", "Brooklyn", "Gliwice"],
            "axisX": ["10%", "20%", "30%", "40%", "50%", "60%", "70%", "80%", "90%", "100%"],
            "bars": [50, 65, 90, 76, 90, 76, 68]
        },
        {
            "name": "Coca-cola - składniki",
            "axisY": ["Pomidor", "Woda", "Cukier", "Karmel", "Kofeina", "Dwutlenek węgla"],
            "axisX": ["20%", "40%", "60%", "80%", "100%"],
            "bars": [32, 23, 76, 68, 4, 97]
        }];

        // My options
        var options = {
            data: data[0],
            showValues: true,
            showVerticalLines: true,
            showHorizontalLines: true,
            animation: true,
            animationOffset: 200,
        };

        // Defaul chart
        var $myChart = $('#chart-1');

        $myChart.horizontalChart(options);

        //*************************************************************************
        //  Methods
        /**************************************************************************
        $myChart.horizontalChart(options);                             // Initialization horizontal chart.

        $myChart.horizontalChart('resetAll');                          // Remove all data.
        $myChart.horizontalChart('resetBars');                         // Remove all bars.
        $myChart.horizontalChart('resetAxisY');                        // Remove all data from axis Y.
        $myChart.horizontalChart('resetAxisX');                        // Remove all data from axis X.

        $myChart.horizontalChart('removeItem', 4);                     // Remove single item. Prameter: int value (from the top, starting on 1).

        $myChart.horizontalChart('appendAll', data[1]);                // Insert all data. Parameter: object with data.
        $myChart.horizontalChart('appendItem', 'new item', 33);        // Insert an element to the end. Parameters: string value (for axis Y label), int value (for bar).
        $myChart.horizontalChart('appendBars', data[1].bars);          // Insert a bars to the end. Parameter: array with int value.
        $myChart.horizontalChart('appendAxisY', data[1].axisY);        // Insert an axis Y value to the end. Parameter: array with string value.
        $myChart.horizontalChart('appendAxisX', data[0].axisX);        // Insert an axis X value to the ending. Parameter: array with string value.

        $myChart.horizontalChart('prependAll', data[1]);               // Insert all data. Parameter: object with data.
        $myChart.horizontalChart('prependItem', 'new item', 76);       // Insert an element to the beginning. Parameters: string value (for axis Y label), int value (for bar).
        $myChart.horizontalChart('prependBars', data[0].bars);         // Insert a bars on the beginning. Parameter: array with int value.
        $myChart.horizontalChart('prependAxisY', data[0].axisY);       // Insert an axis Y value to the beginning. Parameter: array with string value.
        $myChart.horizontalChart('prependAxisX', data[1].axisX);       // Insert an axis X value to the beginning. Parameter: array with string value.

        $myChart.horizontalChart('updateAll', data[1]);                // Update chart with new data. Parameter: object with new data.
        $myChart.horizontalChart('updateBars', data[0].bars);          // Update a bars. Parameter: array with int value.
        $myChart.horizontalChart('updateAxisY', data[0].axisY);        // Update an axis Y. Parameter: array with string value.
        $myChart.horizontalChart('updateAxisX', data[0].axisX);        // Update an axis X. Parameter: array with string value.

        $myChart.horizontalChart('sortByName', true);                  // Sort by name. Parameter: boolean value (true - descending, false - ascending).
        $myChart.horizontalChart('sortByValue', false);                // Sort by value. Parameter: boolean value (true - descending, false - ascending).

        $myChart.horizontalChart('selectMax');                         // Select bar with maxiumum value.
        $myChart.horizontalChart('selectMin');                         // Select bar with maxiumum value.

        $myChart.horizontalChart('runAnimation');                      // Animation trigger.
        **************************************************************************/
    });

    </script>

    <!-- Required common Js -->

    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        sessionStorage.clear();
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

    <!-- //Js for bootstrap working -->

</body>

</html>
