@include('admin.layouts.header')

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('admin.layouts.navbar')
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    @yield('content')
                </div>
            </div>
        </main>
        @include('admin.layouts.footer')
    </div>
    @include('admin.layouts.script')
</body>
</html>
