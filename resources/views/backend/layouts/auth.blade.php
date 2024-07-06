<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.parts.style')

        <!-- Vectormap -->
        <link href="{{asset('/')}}omah/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="fix-wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>

        @include('backend.parts.script')
        
        <script src="{{asset('/')}}omah/js/custom.min.js"></script>
        <script src="{{asset('/')}}omah/js/deznav-init.js"></script>

    </body>
</html>