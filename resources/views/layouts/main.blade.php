<!DOCTYPE html>
<html lang="id">
<head>
    {{-- Required meta tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS --}}
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-select.min.css') }}">

    {{-- My Style CSS --}}
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">

    {{-- Select2 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="{{ URL::to('img/logoborneo2.svg') }}">
    <title>Borneo Ekspedisi | {{ $title }}</title>
    <style>
        /* Style Select 2 */
        /* Ganti ukuran font dan padding sesuai kebutuhan */
        .select2-container .select2-selection--single {
            height: auto !important;
            padding: 7px 0 !important;
            font-size: 14px !important;
            border: 1px solid #DEE2E6 !important;
        }

        /* Jika Anda ingin mengatur lebar sesuai kebutuhan */
        .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 1.5 !important;
        }

        /* Untuk menyesuaikan lebar dropdown jika perlu */
        .select2-container .select2-dropdown {
            font-size: 14px !important;
            width: auto !important;
        }
    </style>
</head>
<body>
    
    @include('partials.navbar')
    @yield('container')
    @include('partials.footer')
    
    {{-- Jquery --}}
    <script src="{{ URL::to('js/jquery.js') }}"></script>
    {{-- Bootstrap Script --}}
    <script src="{{ URL::to('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap-select.min.js') }}"></script>
    <script>
        $('.select-bootstrap').selectpicker();
    </script>
    {{-- Icons  Font Awesome Script --}}
    <script src="https://kit.fontawesome.com/88e6f231cb.js" crossorigin="anonymous"></script>
    {{-- Select2 Script --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    {{-- AOS Script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>