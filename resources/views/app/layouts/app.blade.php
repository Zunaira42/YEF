<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    @yield('meta-info')

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Parisienne&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

     <link href="{{ asset('young-entrepreneur-page/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('young-entrepreneur-page/assets/plugins/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('young-entrepreneur-page/assets/plugins/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('young-entrepreneur-page/assets/plugins/glightbox/css/glightbox.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('young-entrepreneur-page/assets/plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('young-entrepreneur-page/assets/css/style.css?v=1.1.4') }}" rel="stylesheet"> 

    @stack('styles')
</head>

<body class="index-page">

    @include('app.layouts.header')

    <main class="main">

        @yield('content')

        @include('app.layouts.footer')

    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('young-entrepreneur-page/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('young-entrepreneur-page/assets/plugins/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('young-entrepreneur-page/assets/plugins/aos/aos.js') }}"></script>
    <script src="{{ asset('young-entrepreneur-page/assets/plugins/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('young-entrepreneur-page/assets/plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('young-entrepreneur-page/assets/plugins/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('young-entrepreneur-page/assets/plugins/jquery/jquery.min.js') }}"></script>


    <!-- Main JS File -->
    <script src="{{ asset('young-entrepreneur-page/assets/js/main.js') }}"></script>

<script>
    $('#feedback-form').on('submit', function(e) {
        e.preventDefault();

        $('.loading').show();
        $('.sent-message').hide();

        let formData = $(this).serialize();

        $.ajax({
            url: "#",
            method: "POST",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function(response) {
                $('.sent-message').show().delay(3000).fadeOut();
                $('.loading').hide();
                $('.loading').removeClass('d-block');
                $('#feedback-form')[0].reset();
            }
        });
    });
</script>

    @stack('scripts')
</body>

</html>
