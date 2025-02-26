<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.style')
    
</head>

<body data-theme="fantasy">
    <div class="flex h-screen overflow-y-hidden">

        <div class="bg-fuchsia-950 sidebar h-min-screen transition-all duration-500   w-0 lg:w-56 overflow-scroll ">
            @include('admin.inc.sidebar')
        </div>
        <div class="flex-1 overflow-scroll  ">
            <div class="bg-white h-18 sticky top-0 border z-50 border-b-fuchsia-950 ">
                @include('admin.inc.header')
            </div>
            <div class="p-3">
                @yield('content')
            </div>
        </div>


    </div>

    @include('admin.inc.script')
