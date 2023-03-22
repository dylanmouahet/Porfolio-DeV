<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo_icon.svg') }}" type="image/x-icon">
    <title>{{ isset($title) ? $title . ' - ' . env('APP_NAME') : env('APP_NAME') }}</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('assets_template/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets_template/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('assets_template/js/vendor/noty/lib/noty.css') }}" id="stylesheet" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .loader {
            border: 5px solid #f3f3f3;
            /* Light grey */
            border-top: 5px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 25px;
            height: 25px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    @livewireStyles
    <!-- /global stylesheets -->



</head>

<body>

    @yield('content')



    <!-- Core JS files -->
    <script src="{{ asset('assets_template/demo/demo_configurator.js') }}"></script>
    <script src="{{ asset('assets_template/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_template/js/vendor/notifications/noty.min.js') }}"></script>
    <script src="{{ asset('asset/js/app.js') }}"></script>
    <script src="{{ asset('assets_template/js/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- /core JS files -->
    @livewireScripts
    <script src="{{ asset('js/script.js') }}"></script>
    @if (session()->has('message'))
        <script>
            $(document).ready(function() {
                notif("{{ session()->get('message') }}", "{{ session()->get('type') }}");
            });
        </script>
    @endif
</body>

</html>
