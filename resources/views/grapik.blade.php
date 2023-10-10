<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasil Test</title>
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
    <!-- Bars Css -->
    <link rel="stylesheet" href="{{asset('tampilan/css/bar.css')}}">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/css/pignose.calender.css')}}" />
    <!--// Calender Css -->
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
    <div class="se-pre-con"></div>
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
                <li class="">
                    <a href="/">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/prof">
                        <i class="fa fa-user"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="/prep">
                        <i class="fa fa-undo"></i>
                        Retest
                    </a>
                </li>

                <li class="active">
                    <a href="#">
                        <i class="far fa-window-restore"></i>
                        Result
                    </a>
                </li>
                <li>
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
                <h4>Simulator Tes MTA</h4>
            </nav>
            <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-info">
                            <div class="s-l">
                                <h5>Jenis Tes {{Session()->get('soal')}}</h5>

                            </div>
                            <div class="s-r">
                                <h6>{{Session()->get('so')}}
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-info ">
                            <div class="s-l">
                                <h5>Jawaban Benar</h5>

                            </div>
                            <div class="s-r">
                                <h6>{{$data['betul']}}
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-info">
                            <div class="s-l">
                                <h5>Jawaban Salah</h5>

                            </div>
                            <div class="s-r">
                                <h6>{{$data['salah']}}
                                    <i class="fa fa-times-circle" ></i>
                                </h6>
                            </div>
                        </div>
                        
                    </div>
                    <!--// Stats -->
                    <!-- Pie-chart -->
                    
                    <!--// Pie-chart -->
                </div>
            </div>
            <!-- Simple-chart -->

            <!--// Simple-chart -->

            <!--// Bar-Chart -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Score Bar</h4>
                <div id="chart-1"></div>
                @if($score >= 70 )
                <h5 align="center">Hasil : Lulus</h5>
                @endif
                @if($score <70)
                <h5 align="center">Hasil : Gagal</h5>
                @endif
            </div>
            <!--// Bar-Chart -->

            <!--// three-grids -->

            <!--// Countdown -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2020 Aplikasi Simulasi Sertifikasi MTA 
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src="{{asset('tampilan/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //Required common Js -->

    <!-- loading-gif Js -->
    <script src="{{asset('tampilan/js/modernizr.js')}}"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="{{asset('tampilan/js/SimpleChart.js')}}"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6",
                    Y: 300.00
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function () {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="{{asset('tampilan/js/rumcaJS.js')}}"></script>
<script>
$( document ).ready(function() {
    'use strict';

    // Data to charts
    var data = [{
        "name": "Miasta",
        "axisY": ["Min Score", "Your Score"],
        "axisX": ["10%", "20%", "30%", "40%", "50%", "60%", "70%", "80%", "90%", "100%"],
        "bars": [70, {{$score}}]
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
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="{{asset('tampilan/js/moment.min.js')}}"></script>
    <script src="{{asset('tampilan/js/pignose.calender.js')}}"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="{{asset('tampilan/js/script.js')}}"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="{{asset('tampilan/js/simplyCountdown.js')}}"></script>
    <link href="{{asset('tampilan/css/simplyCountdown.css')}}" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src="{{asset('tampilan/js/amcharts.js')}}"></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

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
