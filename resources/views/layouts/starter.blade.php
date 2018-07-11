<html>
    @include('layouts.site.fulllayout.head')

    <body class="hold-transition skin-blue sidebar-mini fixed">
        <!-- Site wrapper -->
        <div class="wrapper">

            @include('layouts.site.starter.main-menu')

            @include('layouts.site.starter.header')

            @include('layouts.site.fulllayout.content')

            @include('layouts.site.fulllayout.footer')
        </div>
    </body>
</html>
