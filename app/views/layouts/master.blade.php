<!-- Stored in app/views/layouts/master.blade.php -->

<html>
    <body>
        @section('sidebar')
            這是主要的 sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>