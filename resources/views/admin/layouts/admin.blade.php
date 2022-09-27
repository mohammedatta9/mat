@include('admin.layouts.head')
<div class="app">
    @include('admin.layouts.sidebar')
    <div class="main-side">
        <div class="container-fluid">
            @include('admin.layouts.nav')
            <x-messages></x-messages>
            @yield('content')
        </div>
    </div>
</div>
@include('sweetalert::alert')
@include('admin.layouts.footer')