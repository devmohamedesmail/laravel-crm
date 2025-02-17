<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.style')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('admin.inc.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
           @include('admin.inc.header')

            <div class="container">
                <div class="page-inner">
                    
                 @yield('content')
               
                 
                    
                </div>
            </div>

        </div>

        <!-- Custom template | don't include it in your project! -->
        @include('admin.inc.setting')
        <!-- End Custom template -->
    </div>
    @include('admin.inc.script')
