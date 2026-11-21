@extends('app.layouts.app')
@section('title', 'Exhibitors, Sponsors & Partners | Young Entrepreneur Fest 2026 | Enablers')
@section('meta-info')
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Exhibitors, Sponsors & Partners | Young Entrepreneur Fest 2026 | Enablers" />
<meta property="og:description"
    content="Discover the exhibitors, sponsors, and strategic partners of Young Entrepreneur Fest 2026. Connect with innovative brands, startups, investors, and industry leaders driving entrepreneurship, business growth, and collaboration in Pakistan." />
<meta property="og:url" content="https://www.enablers.org/young-entrepreneur/exhibitor" />
<meta property="og:site_name" content="Enablers" />
<meta property="article:publisher" content="https://www.facebook.com/EnablersTeam/" />
<meta property="article:modified_time" content="2021-06-14T07:34:10+00:00" />
{{-- <meta property="og:image" content="{{ _asset('assets-app/img/meta_images/blacklist-members.webp') }}" /> --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@EnablersPk" />
@endsection

@push('styles')
{{-- <link rel="stylesheet" href="{{ _asset('assets-app/plugins/jquery-image-viewer-magnify/css/jquery.magnify.css') }}"> --}}

<style>
    #banner.banner {
        background: url("{{ asset('young-entrepreneur-page/assets/images/Pages/exhibitors/banner.png') }}");
        background-size: cover;

    }

    #banner .main-heading {
        font-size: 45px;
        font-weight: 700;
        color: black;

    }

    #banner .sub-heading {
        color: black;
        font-size: 20px;
        font-weight: 500;
    }

    .become-partner {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #F05C2F;
        color: #FFFFFF;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 12px 35px;
        border-radius: 4px;
        border: 2px solid #F05C2F;

    }

    .become-partner:hover {
        background-color: transparent;
        color: #F15A24;

    }

    .become-partner:hover img {
        filter: invert(47%) sepia(87%) saturate(1989%) hue-rotate(341deg) brightness(97%) contrast(95%);
    }

    .dividor {
        border: 1.5px solid #D8D8D8;
    }

    #box-img .card {
        border: 1px solid #063040;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);

    }

    #box-img .card img {
        transition: all 0.3s ease;
        border-radius: 4px;
        margin-top: 40px;
    }

    .card img:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        transform: scale(1.03);
        z-index: 2;
        position: relative;
    }

    #box-img .honor-text {
        padding: 0px 85px;
    }

    .divider-line {
        width: 100%;
        height: 3px;
        background-color: #063040;
    }

    @media (max-width: 992px) {
        .exhibitor {
            text-align: center;

        }

        br {
            display: none;
        }

        #banner .main-heading {
            font-size: 32px;
        }

        #banner .sub-heading {
            font-size: 18px;
            padding: 0%;
            text-align: center;
        }

        #box-img .card img {
            margin-top: 30px;
        }

        #box-img .honor-text {
            padding: 0%;
            text-align: center;
        }
    }
</style>
@endpush
@section('content')
@section('content')
<div id="banner" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="exhibitor">
                    <h1 class="main-heading display-5 fw-bold"> Collaborations, <span class="sponsor" style="color:#F05C2F">Sponsor</span> <br> & Partners</h1>
                    <p class="sub-heading mt-3">
                        Stronger together! Our collaborations and partnerships drive impact, innovation, and growth.
                    </p>
                    <a href="#" class="become-partner"> Become a partner
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/exhibitors/arrow.png') }}" class="img-fluid ms-2">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="dividor mt-lg-5 mt-3">
</div>
{{-- images --}}

<div id="box-img" class="img">
    <div class="container">
        <div class="row">
            <!-- @foreach ($thumbnailSponsors as $sponsor)
            <div class="col-lg-3 col-12 text-center text-md-start mt-lg-0 mb-4">
                <img
                    src="{{ asset($sponsor->thumbnail_image_path) }}" class="img-fluid">
            </div>
            @endforeach -->
        </div>
    </div>
</div>
@endsection
