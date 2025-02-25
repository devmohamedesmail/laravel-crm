<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.style')
</head>

<body data-theme="fantasy">





    <div class="container m-auto">
        <div class="flex flex-col h-screen justify-center items-center">
            <img src="{{ asset('/template/images/not-allowed.jpg') }}" alt="not allowed" class="w-100 h-100" />
            <h3>Not Allowed To Login </h3>
            <a href="{{ route('/') }}" class="btn btn-primary">{{ __('translate.home') }}</a>
        </div>


    </div>
















</body>

</html>
