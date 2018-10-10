<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        <div class="container" style="{{ Auth::check() ? "width: 87%;" : "width: 100%;" }}">
            <div class="col-md-12" id="wrapper">
                <div class="col-md-12" id="content-wrapper">
                    <div class="col-md-12" id="content">
                        @include('partials._messages')
                        @yield('content')
                        @include('partials._footer')
                    </div>
                </div>
            </div>
        </div>
        

        @include('partials._javascript')
        @yield('scripts')
    </body>
</html>
