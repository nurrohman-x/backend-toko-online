<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShaynaAdmin - HTML5 Admin Template</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('includes.style')

    @stack('style')
</head>

<body>
    @include('includes.sidebar')
    <div id="right-panel" class="right-panel">
        @include('includes.navbar')
        <div class="content">
            @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>
    @include('includes.script')

    @stack('script')
</body>

</html>