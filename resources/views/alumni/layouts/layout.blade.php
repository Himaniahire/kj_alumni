<!DOCTYPE html>
<html lang="en" data-layout="">

@include('alumni.layouts.head')

    <body>
        <div class="wrapper">
            @include('alumni.layouts.sidebar')
            @include('alumni.layouts.header')
            <div class="page-content">
                @yield('content')
                @include('alumni.layouts.footer')
            </div>
        </div>
        @include('alumni.layouts.footer-script')
    </body>


</html>
