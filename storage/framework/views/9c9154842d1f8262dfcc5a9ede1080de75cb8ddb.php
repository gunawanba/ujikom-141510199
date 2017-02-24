<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Gaji">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miminium</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/bootstrap.min.css')); ?>">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/font-awesome.min.css')); ?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/simple-line-icons.css')); ?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/animate.min.css')); ?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/fullcalendar.min.css')); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/animate.min.css')); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/nouislider.min.css')); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/select2.min.css')); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/ionrangeslider/ion.rangeSlider.css')); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css')); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets2/asset/css/plugins/bootstrap-material-datetimepicker.css')); ?>"/>
  <link href="<?php echo e(url('assets2/asset/css/style.css')); ?>" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo e(url('assets2/asset/img/logomi.png')); ?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>GILA GAJI</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                  
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo e(Auth::user()->name); ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo e(url('assets2/asset/img/avatar.jpg')); ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                    
                     
                     <li role="separator" class="divider"></li>
                     
                      <ul>
                      
                        <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="fa fa-power-off ">Logout</span>
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                        </li>
                        <li><a href="<?php echo e(url('logout')); ?>"></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                 
                    <?php if(Auth::user()->permession=='Admin'): ?>
                    
                    <a href="<?php echo e(url('golongan')); ?>" >
                    <li class="ripple"><span class="fa fa-table"></span> Golongan  </span> 
                    
                    </li>
                    </a>
                       <a href="<?php echo e(url('jabatan')); ?>">
                    <li class="ripple"><span class="fa fa-table"></span> Jabatan  </span> 
                    
                    </li>
                    </a>
                     </a>
                       <a href="<?php echo e(url('pegawai')); ?>">
                    <li class="ripple"><span class="fa fa-table"></span> Pegawai  </span> 
                    
                    </li>
                    </a>
                    </a>
                     </a>
                       <a href="<?php echo e(url('kategori_lembur')); ?>">
                    <li class="ripple"><span class="fa fa-table"></span> Kategori Lembur  </span> 
                    
                    </li>
                    </a>
                      <a href="<?php echo e(url('lembur_pegawai')); ?>">
                    <li class="ripple"><span class="fa fa-table"></span> Lembur Pegawai  </span> 
                    
                    </li>
                    </a>
                    <a href="<?php echo e(url('tunjangan')); ?>" >
                    <li class="ripple"><span class="fa fa-table"></span> Tunjangan  </span> 
                    
                    </li>
                    </a>
                          </li>
                    </a>
                    <a href="<?php echo e(url('tunjangan_pegawai')); ?>" >
                    <li class="ripple"><span class="fa fa-table"></span> Tunjangan Pegawai  </span> 
                    
                    </li>
                    </a>
                    <a href="<?php echo e(url('penggajian')); ?>" >
                    <li class="ripple"><span class="fa fa-table"></span> Penggajian Pegawai  </span> 
                    
                    </li>
                    </a>
                    <?php elseif(Auth::user()->permession=='Hrd'): ?>
                   
                     <a href="<?php echo e(url('pegawai')); ?>">
                    <li class="ripple"><span class="fa fa-table"></span> Pegawai  </span> 
                    
                    </li>
                    </a>
                    <?php elseif(Auth::user()->permession=='Keuangan'): ?>
                      <a href="<?php echo e(url('lembur_pegawai')); ?>">
                    <li class="ripple"><span class="fa fa-table"></span> Lembur Pegawai  </span> 
                    
                    </li>
                    </a>
                     </a>
                    <a href="<?php echo e(url('tunjangan_pegawai')); ?>" >
                    <li class="ripple"><span class="fa fa-table"></span> Tunjangan Pegawai  </span> 
                    
                    </li>
                    </a>
                    <a href="<?php echo e(url('penggajian')); ?>" >
                    <li class="ripple"><span class="fa fa-table"></span> Penggajian Pegawai  </span> 
                    
                    </li>
                    </a>

                     
               <?php else: ?>
               <label> <h3>Lihat Penggajian</h3></label>
                    <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penggajians): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <?php if(Auth::user()->id ==$pegawais->user_id): ?>
                    <?php if($penggajians->tunjangan_pegawai->pegawai_id == $pegawais->id): ?>
                   <?php if($penggajians->tanggal_pengambilan==""): ?>

                    <?php else: ?>

                    <a href="<?php echo e(url('/gaji/'.$penggajians->id)); ?>"><li class="ripple"><span class="fa fa-table"></span><?php echo e($penggajians->tanggal_pengambilan); ?> </span> 
                    
                    </li></a>
                   <?php endif; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                     
                   
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

      
          <!-- start: content -->
         

            
<?php echo $__env->yieldContent('content'); ?>
               
          <!-- end: content -->

    
         
          
      </div>

      <!-- start: Mobile -->
      
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

    <!-- start: Javascript -->
    <script src="<?php echo e(url('assets2/asset/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/jquery.ui.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/bootstrap.min.js')); ?>"></script>
   
    
    <!-- plugins -->
    <script src="<?php echo e(url('assets2/asset/js/plugins/moment.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/plugins/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/plugins/jquery.nicescroll.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/plugins/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/plugins/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/plugins/jquery.vmap.sampledata.js')); ?>"></script>
    <script src="<?php echo e(url('assets2/asset/js/plugins/chart.min.js')); ?>"></script>

<script src="<?php echo e(url('assets2/asset/js/plugins/jquery.knob.js')); ?>"></script>
<script src="<?php echo e(url('assets2/asset/js/plugins/ion.rangeSlider.min.js')); ?>"></script>
<script src="<?php echo e(url('assets2/asset/js/plugins/bootstrap-material-datetimepicker.js')); ?>"></script>
<script src="<?php echo e(url('assets2/asset/js/plugins/jquery.nicescroll.js')); ?>"></script>
<script src="<?php echo e(url('assets2/asset/js/plugins/jquery.mask.min.js')); ?>"></script>
<script src="<?php echo e(url('assets2/asset/js/plugins/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(url('assets2/asset/js/plugins/nouislider.min.js')); ?>"></script>
<script src="<?php echo e(url('assets2/asset/js/plugins/jquery.validate.min.js')); ?>"></script>


<!-- custom -->

    <!-- custom -->
     <script src="<?php echo e(url('assets2/asset/js/main.js')); ?>"></script>
     <script type="text/javascript">
      (function(jQuery){
        // start: Chart =============
        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.customTooltips = function(tooltip) {
            var tooltipEl = $('#chartjs-tooltip');
            if (!tooltip) {
                tooltipEl.css({
                    opacity: 0
                });
                return;
            }
            tooltipEl.removeClass('above below');
            tooltipEl.addClass(tooltip.yAlign);
            var innerHtml = '';
            if (undefined !== tooltip.labels && tooltip.labels.length) {
                for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                    innerHtml += [
                        '<div class="chartjs-tooltip-section">',
                        '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                        '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                        '</div>'
                    ].join('');
                }
                tooltipEl.html(innerHtml);
            }
            tooltipEl.css({
                opacity: 1,
                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                fontFamily: tooltip.fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip.fontStyle
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(21,186,103,0.4)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(66,69,67,0.3)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                 data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }, {
                label: "My Second dataset",
                fillColor: "rgba(21,113,186,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }]
        };
        var doughnutData = [
                {
                    value: 300,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 50,
                    color: "#1AD576",
                    highlight: "#15BA67",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#0F5E36",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }
            ];
        var doughnutData2 = [
                {
                    value: 100,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 250,
                    color: "#FF6656",
                    highlight: "#FF6656",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#FD786A",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }
            ];
        var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(21,186,103,0.4)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(21,186,103,0.2)",
                        highlightStroke: "rgba(21,186,103,0.2)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(21,113,186,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(21,113,186,0.2)",
                        highlightStroke: "rgba(21,113,186,0.2)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };
         window.onload = function(){
                var ctx = $(".doughnut-chart")[0].getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });
                var ctx2 = $(".line-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx2).Line(lineChartData, {
                     responsive: true,
                        showTooltips: true,
                        multiTooltipTemplate: "<%= value %>",
                     maintainAspectRatio: false
                });
                var ctx3 = $(".bar-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx3).Bar(barChartData, {
                     responsive: true,
                        showTooltips: true
                });
                var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
                window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                    responsive : true,
                    showTooltips: true
                });
            };
        
        //  end:  Chart =============
        // start: Calendar =========
         $('.dashboard .calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2015-02-12',
            businessHours: true, // display business hours
            editable: true,
            events: [
                {
                    title: 'Business Lunch',
                    start: '2015-02-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2015-02-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#20C572'
                },
                {
                    title: 'Conference',
                    start: '2015-02-18',
                    end: '2015-02-20'
                },
                {
                    title: 'Party',
                    start: '2015-02-29T20:00:00'
                },
                // areas where "Meeting" must be dropped
                {
                    id: 'availableForMeeting',
                    start: '2015-02-11T10:00:00',
                    end: '2015-02-11T16:00:00',
                    rendering: 'background'
                },
                {
                    id: 'availableForMeeting',
                    start: '2015-02-13T10:00:00',
                    end: '2015-02-13T16:00:00',
                    rendering: 'background'
                },
                // red areas where no events can be dropped
                {
                    start: '2015-02-24',
                    end: '2015-02-28',
                    overlap: false,
                    rendering: 'background',
                    color: '#FF6656'
                },
                {
                    start: '2015-02-06',
                    end: '2015-02-08',
                    overlap: true,
                    rendering: 'background',
                    color: '#FF6656'
                }
            ]
        });
        // end : Calendar==========
        // start: Maps============
          jQuery('.maps').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#fff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });
        // end: Maps==============
      })(jQuery);
     </script>

  <!-- end: Javascript -->
  </body>
</html>