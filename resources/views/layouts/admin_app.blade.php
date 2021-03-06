<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FRAS System">
    <meta name="author" content="Abdelrahman Elrefai">
    
    <title>@yield('title')</title>
    <link rel="icon" sizes="192x192" href="{{url('/image/logo.png')}}">
    <!-- Bootstrap Core CSS -->
    {!! Html::style('Admin/vendor/bootstrap/css/bootstrap.min.css') !!}
    
    <!-- MetisMenu CSS -->
    {!! Html::style('Admin/vendor/metisMenu/metisMenu.min.css') !!}
    <!-- DataTables CSS  -->
    {!! Html::style('Admin/vendor/datatables-plugins/dataTables.bootstrap.css') !!}
    {!! Html::style('Admin/vendor/datatables-responsive/dataTables.responsive.css') !!}
    
    <!-- Custom CSS -->
    {!! Html::style('Admin/dist/css/sb-admin-2.css') !!}
    
    <!-- Custom Fonts -->
    {!! Html::style('Admin/vendor/font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('Admin.Index')}}">FRASystem Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
          
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{route('Admin.Index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('Course.Index')}}"><i class="fa fa-book fa-fw"></i> Courses</a>
                        </li>
                        <li>
                            <a href="{{route('Student.Index')}}"><i class="fa fa-users fa-fw"></i> Students</a>
                        </li>
                        <li>
                            <a href="{{route('Image.Index')}}"><i class="fa fa-photo fa-fw"></i> Gallary</a>
                        </li>
                        <li>
                            <a href="{{route('Doctor.Index')}}"><i class="fa fa-user fa-fw"></i> Doctors</a>
                        </li>
                        <li>
                            <a href="{{route('Department.Index')}}"><i class="fa fa-building fa-fw"></i> Departments</a>
                        </li>
                        <li>
                            <a href="{{route('Week.Index')}}"><i class="fa fa-calendar fa-fw"></i> Weeks</a>
                        </li>
                        
                        <li>
                            <a href="{{route('CourseStudent.Index')}}"><i class="fa fa-users fa-fw"></i> Students in Courses</a>
                        </li>

                        <li>
                            <a href="{{route('CourseWeek.Index')}}"><i class="fa fa-calendar fa-fw"></i> Weeks in Courses</a>
                        </li>
                        <li>
                            <a href="{{route('StudentWeek.Index')}}"><i class="fa fa-flag fa-fw"></i> Student Week Attended</a>
                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('title')</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @yield('content')
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    {!! Html::script('Admin/vendor/jquery/jquery.min.js') !!}
    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('Admin/vendor/bootstrap/js/bootstrap.min.js') !!}
    <!-- Metis Menu Plugin JavaScript -->
    {!! Html::script('Admin/vendor/metisMenu/metisMenu.min.js') !!}
    <!-- DataTables JavaScript -->
    {!! Html::script('Admin/vendor/datatables/js/jquery.dataTables.min.js') !!}
    {!! Html::script('Admin/vendor/datatables-plugins/dataTables.bootstrap.min.js') !!}
    {!! Html::script('Admin/vendor/datatables-responsive/dataTables.responsive.js') !!}
        <!-- Custom Theme JavaScript -->
    {!! Html::script('Admin/dist/js/sb-admin-2.js') !!}
    <script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

</script>

</body>

</html>
