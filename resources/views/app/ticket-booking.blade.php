@extends('app.layouts.app')

@section('title', 'Book Tickets – Young Entrepreneur Expo | Enablers')
@section('meta-info')
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Book Tickets – Young Entrepreneur Expo | Enablers" />
<meta property="og:description"
    content="Reserve your tickets for the Young Entrepreneur Expo 2026 in Lahore. Join thousands of attendees to explore innovative ideas, participate in workshops, and network with industry leaders." />
<meta property="og:url" content="https://www.enablers.org/young-entrepreneur/ticket-booking/" />
<meta property="og:site_name" content="Enablers" />
<meta property="article:publisher" content="https://www.facebook.com/EnablersTeam/" />
<meta property="article:modified_time" content="2021-06-14T07:34:10+00:00" />
{{-- <meta property="og:image" content="{{ _asset('assets-app/img/meta_images/blacklist-members.webp') }}" /> --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@EnablersPk" />
@endsection

@push('styles')
<style>
    #banner.banner {
        background: url('{{ asset("young-entrepreneur-page/assets/images/Pages/ticket-book/banner.png") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    #banner .main-heading {
        font-size: 55px;
        font-weight: 700;
        color: white;
        margin-top: 60px;
    }

    #banner .main-heading span {
        font-size: 55px;
        font-weight: 700;
        color: #F05C2F;
    }

    #banner .sub-heading {
        color: white;
        font-weight: 400;
        font-size: 20px;

    }

    .ticket-info-section .ticket-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0px 4px 6px -4px #0000001A;
        box-shadow: 0px 10px 15px -3px #0000001A;
        overflow: hidden;
        border: 1px solid #E2E8F0;

    }

    .ticket-info-section .info-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 20px 28px;
    }


    .ticket-info-section .content small {
        display: block;
        font-size: 12px;
        font-weight: 700;
        color: #000000;
        text-transform: uppercase;
        margin-bottom: 2px;
    }

    .ticket-info-section .price {
        color: #F05C2F;
        font-weight: 700;
        font-size: 18px;
        line-height: 1;
    }

    .ticket-info-section .price span {
        font-size: 30px;
        font-weight: 700;
        color: #F05C2F;
    }

    .ticket-info-section .price small {
        display: inline;
        text-transform: none;
        font-size: 14px;
        color: #000000;
        margin-left: 5px;
        font-weight: 400;
    }

    .ticket-info-section .divider-left {
        border-left: 1px solid #ececec;
        height: 100%;
    }

    .ticket-info-section .small-icon {
        width: 22px;
        height: 22px;
        object-fit: contain;
    }

    .ticket-info-section .text {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .ticket-info-section .text strong {
        font-size: 12px;
        font-weight: 700;
        color: #0B0C10;
    }

    .ticket-info-section .text .time {
        font-size: 12px;
        font-weight: 700;
        color: #F05C2F;
    }

    .ticket-info-section .text span {
        font-size: 12px;
        color: #000000;
        margin-top: 5px;
    }

    .ticket-info-section .text small {
        color: #888;
        font-size: 10px;
    }


    #forms .booking-card {
        background: #fff;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        box-shadow: 0px 2px 4px -2px #0000001A;
        box-shadow: 0px 4px 6px -1px #0000001A;
        padding: 28px 18px;
    }

    #forms .booking-title {
        color: #F05C2F;
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    #forms .booking-input {
        width: 100%;
        height: 55px;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        background: #f8f8f8;
        /* background: white; */
        padding: 0 18px;
        font-size: 14px;
        color: black;
        transition: .3s;
    }

    #forms .booking-input::placeholder {
        color: #9b9b9b;
    }

    #forms select {
        color: #9b9b9b;
    }

    .booking-input.selected {
        color: black;
    }

    #city.selected,
    #city option {
        color: #000 !important;
    }

    #forms .booking-input:focus {
        outline: none;
        border-color: #ff5a1f;
        background: #fff;
        box-shadow: none;
    }

    .booking-input[type="number"]::-webkit-inner-spin-button,
    .booking-input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .booking-input[type="number"] {
        appearance: textfield;
    }

    #forms select.booking-input {
        cursor: pointer;
        color: #9b9b9b;
    }

    .booking-btn {
        background: #F05C2F;
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 20px 50px;
        font-size: 14px;
        font-weight: 700;
        transition: .3s;
        box-shadow: 0px 4px 6px -4px #FF5A0033;
        box-shadow: 0px 10px 15px -3px #FF5A0033;
    }

    .booking-btn:hover {
        background: #e94e16;
    }

    @media(max-width:768px) {

        #banner .main-heading,
        #banner .main-heading span {
            font-size: 32px;
            text-align: center;
        }

        br,
        .mobile-hidden {
            display: none;
        }

        #banner .sub-heading {
            font-size: 16px;
            padding: 0%;
            text-align: center;
        }

        .booking-card {
            padding: 20px 15px;
        }

        .booking-btn {
            width: 100%;
        }

        .ticket-info-section .price span,
        #visitors .visitors-title h2 {
            font-size: 20px !important;
        }
#visitors .visitor-list li{
    margin-bottom: 10px !important;
}
        #visitors .left-border {
            border: none !important;
            padding: 0px !important;

        }

        #visitors .visitor-list {
            padding: 0px 10px 0px 30px !important;
            margin: 0px !important;
        }

        #visitors .visitors-title {
            justify-content: center;
            text-align: center;
        }

        .ticket-info-section .text strong {
            font-size: 10px;
        }

        .ticket-info-section .text span {
            font-size: 9px;
        }
    }

    @media (max-width:991px) {

        .divider-left {
            border-left: none;
            border-top: 1px solid #eee;
        }

        .info-item {
            padding: 18px;
        }

    }

    @media (max-width:576px) {

        .price span {
            font-size: 28px;
        }

        .info-item {
            gap: 10px;
            padding: 15px;
        }

        .text strong,
        .text span {
            font-size: 12px;
            color: #0B0C10;
        }

    }

    #visitors .visitors-box {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 16px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
    }

    #visitors .visitors-title img {
        width: 60px;
        margin-right: 15px;
    }

    #visitors .visitors-title h2 {
        font-size: 24px;
        font-weight: 800;
        margin: 0;
    }

    #visitors .visitors-title h2 span {
        color: #F05C2F;
    }

    #visitors .visitor-list {
        list-style: none;
        padding: 0;
        margin: 20px 0px;
    }

    #visitors .visitor-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 18px;

    }

    #visitors .visitor-list li span {
        color: #0B0C10;
        font-weight: 500;
        font-size: 14px;
    }

    #visitors .left-border {
        border-left: 1px solid #E2E8F0;
        padding-left: 30px;
    }

    .booking-input.error-border,
    .booking-input.error {
        border: 1px solid #dc3545 !important;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
    }
</style>
@endpush
@section('content')
<div id="banner" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="main-heading display-5 fw-bold">Book Your <Span><br>Tickets</Span></h1>
                <p class="sub-heading mt-3 mb-5">
                    Join the biggest youth Entrepreneurship<br> Movement and be a part of the change.
                </p>
            </div>
        </div>
    </div>
</div>
{{-- form --}}
<section class="ticket-info-section">
    <div class="container">
        <div class="ticket-card">
            <div class="row align-items-center g-0">
                <div class="col-lg-5 col-md-12">
                    <div class="info-item price-item">
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/icon1.png') }}">
                        <div class="content">
                            <small>VISITOR ENTRY TICKET:</small>
                            <div class="price mt-lg-3 mt-0">
                                <span>PKR 300</span>
                                <small>per person</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="divider-left">
                        <div class="info-item justify-content-center">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/mini1.png') }}">
                            <div class="text">
                                <strong>Online</strong>
                                <span>Booking</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pay -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="divider-left">
                        <div class="info-item justify-content-center">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/mini2.png') }}">
                            <div class="text">
                                <strong>Pay at the</strong>
                                <span>entrance</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timing -->
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="divider-left">
                        <div class="info-item justify-content-center">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/mini3.png') }}">

                            <div class="text">
                                <strong class="time">Timing:</strong>
                                <span>12:00 PM to 08:00 PM</span>
                                <span>25 October, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- form --}}
<section id="forms" class="booking-form-wrapper py-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="booking-card">
                        <div class="row g-3">

                            <div class="col-12">
                                <h6 class="booking-title">Book from here:</h6>
                            </div>

                            <div class="col-md-6">
                                <input type="text" id="name" name="name" class="booking-input"
                                    placeholder="Full Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" id="email" name="email"
                                    class="booking-input" placeholder="Email" required>
                            </div>

                            <div class="col-md-6">
                                <input type="tel" id="phone_num" name="phone_num"
                                    class="booking-input"
                                    placeholder="Phone/Whatsapp Number" required>
                            </div>

                            <div class="col-md-6">
                                <select id="city" name="city" class="booking-input" required>
                                    <option value="" selected disabled>City</option>
                                    <option>Karachi</option>
                                    <option>Lahore</option>
                                    <option>Islamabad</option>
                                    <option>Faisalabad</option>
                                    <option>Rawalpindi</option>
                                    <option>Peshawar</option>
                                    <option>Multan</option>
                                    <option>Quetta</option>
                                    <option>Hyderabad</option>
                                    <option>Sialkot</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="col-md-6 d-none" id="other-city-div">
                                <input type="text" id="other_city"
                                    name="other_city"
                                    class="booking-input"
                                    placeholder="Enter your city">
                            </div>

                            <div class="col-12">
                                <input type="number"
                                    id="number_of_tickets"
                                    name="number_of_tickets"
                                    class="booking-input"
                                    placeholder="Number of Tickets"
                                    min="1"
                                    required>
                            </div>

                            <div class="col-12 text-center mt-5">
                                <button type="submit" id="submitBtn" class="booking-btn">
                                    <span id="submitText">Submit Booking</span>
                                    <img id="submitArrow" src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/arrow.png') }}"
                                        class="btn-arrow">
                                    <span id="loadingSpinner" class="spinner-border spinner-border-sm ms-2 d-none"
                                        role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </form>

                    @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div id="ticketFormAlert" class="mt-3"></div>
                </div>
            </div>

        </div>
    </div>
</section>
<div id="visitors" class="visitors mt-lg-5 mt-3">
    <div class="container">
        <div class="visitors-box p-lg-4 p-2">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12 mb-2 mb-lg-0">
                    <div class="visitors-title d-flex align-items-center">
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/star.png') }}"
                            alt="Star" class="me-3">

                        <h2 class="mb-0">
                            What's in it <br class="mobile-hidden">
                            <span>for Visitors?</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-6 left-border">
                            <ul class="visitor-list">
                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Explore innovative products and services</span>
                                </li>

                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Buy unique, locally-made products</span>
                                </li>

                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Enjoy a variety of delicious food</span>
                                </li>

                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Discover practical business ideas</span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 p-0">
                            <ul class="visitor-list">
                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Connect with mentors, investors, and industry experts.</span>
                                </li>

                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Learn how to build and grow a business.</span>
                                </li>

                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Watch live startup pitches.</span>
                                </li>

                                <li>
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/ticket-book/tick.png') }}">
                                    <span>Experience a vibrant marketplace.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $('#city').on('change', function() {
            if ($(this).val() === 'other') {
                $('#other-city-div').removeClass('d-none');
                $('#other_city').attr('required', 'required');
            } else {
                $('#other-city-div').addClass('d-none');
                $('#other_city').removeAttr('required').val('');
            }

            if ($(this).val() !== '') {
                $(this).css('color', '#000');
            } else {
                $(this).css('color', '#999');
            }
        });

        $("#ticketBookingForm").validate({
            errorPlacement: function(error, element) {},
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("error-border");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass("error-border");
            },
            submitHandler: function(form) {
                var $btn = $("#submitBtn");
                var $spinner = $("#loadingSpinner");
                var $arrow = $("#submitArrow");
                var $text = $("#submitText");
                var $form = $(form);

                $btn.attr("disabled", true);
                $arrow.addClass("d-none");
                $spinner.removeClass("d-none");
                $text.text("Submitting...");

                $.ajax({
                    url: $form.attr('action'),
                    method: ($form.attr('method') || 'POST'),
                    data: $form.serialize(),
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $form.find('input[name="_token"]').val()
                    },
                    success: function(res) {
                        var msg = (res && res.message) ? res.message :
                            'Booking Submitted Successfully! Please check your email for further information.';
                        var html =
                            '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                            msg +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $('#ticketFormAlert').html(html);
                        $form[0].reset();
                        $('#city').val('').css('color', '#999').trigger('change');
                        $('#other-city-div').addClass('d-none');
                        $form.find('.error-border').removeClass('error-border');
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors || {};
                            var list = '<ul class="mb-0">';
                            $.each(errors, function(k, v) {
                                list += '<li>' + v[0] + '</li>';
                                var $el = $form.find('[name="' + k + '"]');
                                $el.addClass('error-border');
                            });
                            list += '</ul>';
                            var html =
                                '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                                list +
                                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            $('#ticketFormAlert').html(html);
                        } else {
                            var html =
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again later.</div>';
                            $('#ticketFormAlert').html(html);
                        }
                    },
                    complete: function() {
                        $btn.attr("disabled", false);
                        $spinner.addClass("d-none");
                        $arrow.removeClass("d-none");
                        $text.text("Submit Booking");
                    }
                });
            }
        });
    });
</script>
@endpush