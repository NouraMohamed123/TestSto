@include('layouts.dashboard._header')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            @include('dashboard.partials._sessions')
            @yield('content')
        </div>
    </div>
</div>


@include('layouts.dashboard._footer')
