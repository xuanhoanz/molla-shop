<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
@include('sweetalert::alert')
<body>
    <div class="page-wrapper">
        @include('frontend.includes.header')
        <hr>
            <main class="main">
                <div>
                    @yield('content')
                    </div>
            </main>
        @include('frontend.includes.footer')
    </div>
    @include('frontend.includes.js')
</body>
</html>
