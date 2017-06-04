<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8">
<![endif]-->

<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    @include('head')

    @yield('css')

</head>
<body class="flat-black">

<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

    <!-- begin #header AND #sidebar-->
    @include('header')
    <!-- end #header AND #sidebar-->

    <!-- begin #sidebar -->
    @include('sidebar')
    <!-- end #sidebar -->


    <!-- begin #content -->
    <div id="content" class="content">
        @yield('content')
    </div>
    <!-- end #content -->

    @yield('js')

<!-- begin #footer -->
    <div id="footer" class="footer">

        <!-- Footer Here -->

    </div>
    <!-- end #footer -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->
</body>
</html>
