<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- include head page code  --}}
        @include('includes.head')
    </head>
    <body>
        {{-- GO back page button  --}}
        <div>
            <button onclick="history.back()" class="back-btn" style="float: right;">Go Back</button>
        </div>
        {{-- include side bar  --}}
        @include('includes.sidebar')
        {{-- main content --}}
        @yield('content')
        {{-- javascript sidebar page script --}}
        <script src="{{ asset('js/SideBar.js') }}"></script>
    </body>
</html>
