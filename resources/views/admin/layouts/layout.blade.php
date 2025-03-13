<!DOCTYPE html>
<html lang="en" data-layout="">

@include('admin.layouts.head')

    <body>
        <div class="wrapper">
            @include('admin.layouts.sidebar')
            @include('admin.layouts.header')
            <div class="page-content">
                @yield('content')
                @include('admin.layouts.footer')
            </div>
        </div>
        @include('admin.layouts.footer-script')
    </body>


</html>
