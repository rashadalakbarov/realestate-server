<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.parts.style')

        <!-- Vectormap -->
        @yield('css')
        <link href="{{asset('/')}}omah/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="{{asset('/')}}omah/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>

        <div id="main-wrapper">
            <div class="nav-header">
                <a href="{{route('admin.index')}}" class="brand-logo">
                    <img class="logo-abbr" src="{{asset('/')}}omah/images/logo.png" alt="/">
                    <img class="logo-compact" src="{{asset('/')}}omah/images/logo-text.png" alt="/">
                    <img class="brand-title" src="{{asset('/')}}omah/images/logo-text.png" alt="/">
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
        </div>

        @include('backend.parts.chatbox')

        @include('backend.parts.header')

        @include('backend.parts.aside')

        <div class="content-body">
            <div class="container-fluid">
                <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
					<div class="me-auto d-lg-block d-block">
						<h2 class="text-black font-w600">@yield('title')</h2>
						<p class="mb-0">Welcome to Omah Property Admin</p>
					</div>
					<button onclick="" class="btn btn-primary rounded light">Refresh</button>
				</div>
                
                @yield('content')
            </div>
        </div>

        @include('backend.parts.script')
        
        @yield('js')
        <script src="{{asset('/')}}omah/js/custom.min.js"></script>
        <script src="{{asset('/')}}omah/js/deznav-init.js"></script>

        @yield('script')
    </body>
</html>