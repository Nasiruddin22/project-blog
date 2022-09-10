<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.includes.head')
    </head>
    <body class="sb-nav-fixed">
        @include('backend.includes.nav')
        <div id="layoutSidenav">
            @include('backend.includes.sidevar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('page_title')</h1>
                        @yield('content')
                    </div>
                </main>
                @include('backend.includes.footer')
            </div>
        </div>
        @include('backend.includes.script')

        @stack('script')
    </body>
</html>
