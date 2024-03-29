<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{('assets/css/widgets/chat.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.rtl.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/vendors/toastify/toastify.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/choices.js/choices.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/email.css')}}">

</head>

<body>
    <input id="APP_URL" type="hidden" value="{{ url('/')}}">
    @if (auth()->user()->hasRole('admin'))
    @include('layouts.AdminSidebar')
    @elseif (auth()->user()->hasRole('advisor'))
    @include('layouts.AdvisorSidebar')
    @else
    @include('layouts.sidebar')
    @endif
    <div id="main" class='layout-navbar' style="overflow-x:hidden !important">
        @yield('header')
        <div id="main-content">
            <div class="page-heading">
                <div class="page-title">
                    @yield('page_title')
                </div>

                @yield('content')
            </div>
        </div>


        <!-- Script -->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <!-- <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script> -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendors/ckeditor/ckeditor.js')}}"></script>
        {{-- <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script> --}}


        <script src="{{asset('assets/js/leaderduty.js')}}"></script>
        <script src="{{asset('assets/js/extrawork.js')}}"></script>
        <script src="{{asset('assets/js/pages/form-element-select.js')}}"></script>
        <script src="{{asset('assets/js/mazer.js')}}"></script>
        <script src="{{asset('assets/vendors/choices.js/choices.min.js')}}"></script>
        <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
        <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
        <script src="{{asset('assets/vendors/jquery/jquery.min.js'
        )}}"></script>
        <script src="{{asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js0'
    )}}"></script>
        <script src="{{asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js0'
    )}}"></script>
        <script src="{{asset('assets/vendors/fontawesome/all.min.js0'
    )}}"></script>


        <!-- <script src="{{asset('assets/js/main.js')}}"></script> -->



</body>

</html>