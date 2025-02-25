<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.style')
</head>

<body data-theme="fantasy">
    <div class="flex ">

        <div class="bg-fuchsia-950 h-screen w-0 overflow-hidden lg:w-64">
            @include('admin.inc.sidebar')
        </div>
        <div class="flex-1  ">
            <div class="bg-white h-18 sticky top-0 border border-b-fuchsia-950">
                @include('admin.inc.header')
            </div>
            <div class="p-3">
                @yield('content')
            </div>
        </div>


    </div>

    @include('admin.inc.script')
