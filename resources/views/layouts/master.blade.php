@include('layouts.head')

<body>
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            @include('sweetalert::alert')
            @include('layouts.navbar')
            @yield('content')

        </div>
    </div>
</body>

@include('layouts.script')



