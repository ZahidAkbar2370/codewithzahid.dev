<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Panel</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/css/font-awesome.min.css" rel="stylesheet">
    <link href="backend/css/datepicker3.css" rel="stylesheet">
    <link href="backend/css/styles.css" rel="stylesheet">
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>

<!-- Header -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{url('#')}}"><span>User Panel</span></a>
                
            </div>   
        </div>
    </nav>

<!-- Slider -->

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                
                <div class="profile-usertitle-name">Abid</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="{{url('user-dashboard')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

            <li class="parent "><a data-toggle="collapse" href="#sub-item-5">
                <em class="fa fa-navicon">&nbsp;</em>Attendance<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-5">

                    <li><a class="" href="{{url('mark-attendance')}}">                        
                        <span class="fa fa-arrow-right">&nbsp;</span>Add Attendance
                    </a></li>
                </ul>
            
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>Leave Request<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="{{url('service_request')}}">                        
                        <span class="fa fa-arrow-right">&nbsp;</span>Add Request
                    </a></li>
                </ul>
                <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
                <em class="fa fa-navicon">&nbsp;</em>Leave Status<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li><a class="" href="{{url('user-view-status')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span>View Status
                    </a></li>
                </ul>

                <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
                <em class="fa fa-navicon">&nbsp;</em>Profile<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li><a class="" href="{{url('user-view-status')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span>View profile
                    </a></li>
                </ul>

                <li><form action="{{URL::to('logout')}}" method="post">
              @csrf
              <button type="submit">Logout</button>
          </form></li>
          </li> 
          </ul>
      </div>
    <div class="col-sm-12">
        @yield('content')
            <p class="back-link">User Panel <a href="#">Abid Ali</a></p>
    </div>


    <script src="backend/js/jquery-1.11.1.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/chart.min.js"></script>
    <script src="backend/js/chart-data.js"></script>
    <script src="backend/js/easypiechart.js"></script>
    <script src="backend/js/easypiechart-data.js"></script>
    <script src="backend/js/bootstrap-datepicker.js"></script>
    <script src="backend/js/custom.js"></script>


</body>
</html>