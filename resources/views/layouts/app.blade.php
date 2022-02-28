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
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.rtl.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    </div>
    
    @yield('content')

    <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p> Developed by <a href="http://osboha180.com">Osboha 180 </a>  Programers  &copy; </p>
                    </div>
                    
                </div>
    </footer>


    <!-- Script -->
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{asset('assets/vendors/ckeditor/ckeditor.js')}}"></script>
    <script>
    ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
    console.error(error);
    });
    </script>
    <script src="assets/vendors/choices.js/choices.min.js"></script>
    <script src="assets/js/pages/form-element-select.js"></script>
    <script src="assets/js/mazer.js"></script>
</body>

</html>