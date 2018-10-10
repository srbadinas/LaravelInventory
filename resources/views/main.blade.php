<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        @if (Auth::check())
            @include('partials._nav')
        @endif

        <div class="container" style="{{ Auth::check() ? "width: 97%;" : "width: 100%;" }}">
            @if (Auth::check())
                @include('partials._header')
            @endif
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

        @if (Auth::check())
            <script type="text/javascript">

            $('li.navigation-menu a').on('click', function () {
                $('ul.navigation-sub-menu').collapse('hide');
            });

            $('div#navigation-toggle').on('click', function(){
                $nav_width = Math.ceil(($('div#navigation-wrapper').width() / $(window).width()) * 100);
                if ($nav_width == '15')
                {
                    //$('div#navigation-wrapper').hide();
                    $('div#navigation-wrapper #navigation li.navigation-menu').addClass('navigation-hide');
                    $('div#navigation-wrapper #navigation li.navigation-menu a').removeClass('collapsed');
                    $('div#navigation-wrapper #navigation li.navigation-menu a').removeAttr('data-toggle');
                    $('div#navigation-wrapper').animate({ width:'3%' }, 300);
                    $('div.container').animate({ width:'97%' }, 300);
                    //$('li.navigation-hide a').attr('data-toggle', 'dropdown');
                    $('ul.navigation-sub-menu').collapse('hide');
                }
                else 
                {
                    //$('div#navigation-wrapper').show();
                    //$('li.navigation-hide a').attr('data-toggle', 'collapse');
                    $('div#navigation-wrapper #navigation li.navigation-menu').removeClass('navigation-hide');
                    $('div#navigation-wrapper #navigation li.navigation-menu a').addClass('collapsed');
                    $('div#navigation-wrapper #navigation li.navigation-menu a').attr('data-toggle', 'collapse');
                    $('div#navigation-wrapper').animate({ width:'15%' }, 300);
                    $('div.container').animate({ width:'85%' }, 300);
                    $('ul.navigation-sub-menu').collapse('hide');
                }
            });

            $('input#checkbox-header').on('change', function(){
                if ($(this).is(':checked')){
                    $('input[class="checkbox-row"]').prop("checked", true);
                }
                else {
                    $('input[class="checkbox-row"]').prop("checked", false);
                }
            });
        </script>
        @endif

    </body>
</html>
