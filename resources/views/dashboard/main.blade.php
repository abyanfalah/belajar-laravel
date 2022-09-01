@include('dashboard.partials.header')

@include('dashboard.partials.navbar')

<div class="container-fluid">
    <div class="row">
        @include('dashboard.partials.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-3">
            @yield('container')
        </main>
    </div>
</div>


@include('dashboard.partials.footer')
