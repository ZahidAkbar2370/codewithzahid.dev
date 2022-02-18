<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{asset('theme/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />
    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <?php

    use App\Models\Notification;

    $notifications = Notification::where("status","0")->get();
    $totalNotification = count($notifications);

    ?>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
                    <span class="align-middle">Code With Zahid</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-users')}}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-languages')}}">
                            <i class="align-middle" data-feather="hash"></i> <span class="align-middle">Languages</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-lectures')}}">
                            <i class="align-middle" data-feather="film"></i> <span class="align-middle">Lectures</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-documentations')}}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Documentation</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-interviews')}}">
                            <i class="align-middle" data-feather="video"></i> <span class="align-middle">Interviews</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-registrations')}}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Registered Students</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('composer-email')}}">
                            <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Send Email</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('send-sms')}}">
                            <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Send SMS</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-messages')}}">
                            <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Messages</span>
                         </a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">{{ $totalNotification}}</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                   {{ $totalNotification . " New Notifications" ?? "4 New Notifications"}}
                                </div>
                                <div class="list-group">
                                    @if(!empty($notifications))
                                    @foreach($notifications as $notification)

                                    @if($notification->type == "message")
                                        <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="mail"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Message from {{$notification->name}}</div>
                                                <div class="text-muted small mt-1">{{$notification->message}}</div>
                                                <div class="text-muted small mt-1">{{$notification->created_at->diffForHumans()}}</div>
                                            </div>
                                        </div>
                                    </a>
                                    @elseif($notification->type == "new_registration")
                                        <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New Registration</div>
                                                <div class="text-muted small mt-1">{{$notification->name}} Register at Your Website. Please Active Account.</div>
                                                <div class="text-muted small mt-1">{{$notification->created_at->diffForHumans()}}</div>
                                            </div>
                                        </div>
                                    </a>
                                    @elseif($notification->type == "notification")
                                        <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Alert</div>
                                                <div class="text-muted small mt-1">{{$notification->message}}</div>
                                                <div class="text-muted small mt-1">{{$notification->created_at->diffForHumans()}}</div>
                                            </div>
                                        </div>
                                    </a>
                                    @endif



                                    @endforeach
                                    @endif
                                    
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="{{asset('app/images/profileImage/zahid.jpg')}}" class="avatar img-fluid rounded me-1" /> <span class="text-dark">{{Auth::user()->name  ?? 'Zahid'}}</span>
              </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i>Profiles</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="lock"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a><form action="#" method="post">@csrf <button type="submit" style="background: none;border: none"><i class="align-middle me-1" data-feather="power"></i>Log out</button></form></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            

<main class="content" style="padding: none !important">
<div class="container-fluid ">

    @yield("content")


    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="#" target="_blank"><strong>Online Layyah</strong></a> &copy;
                    </p>
                </div>
                
                <div class="col-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Support</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Help Center</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->
            <!-- End Footer -->
</div>
</main>
</div>

<script rel="stylesheet" src="{{asset('theme/js/app.js')}}"></script>
<script rel="stylesheet" src="{{asset('theme/js/search.js')}}"></script>


</body>

</html>