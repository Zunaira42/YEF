@extends('app.layouts.app')

@section('title', 'Meet the Guests of Honor – Young Entrepreneur Fest 2026 by Enablers')

@section('meta-info')
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Meet the Guests of Honor – Young Entrepreneur Fest 2026 by Enablers" />
<meta property="og:description"
    content="Discover the trailblazing leaders and iconic innovators joining Young Entrepreneur Fest 2026. Celebrate the visionaries inspiring the next generation of entrepreneurs." />
<meta property="og:url" content="https://www.enablers.org/young-entrepreneur/guest" />
<meta property="og:site_name" content="Enablers" />
<meta property="article:publisher" content="https://www.facebook.com/EnablersTeam/" />
<meta property="article:modified_time" content="2021-06-14T07:34:10+00:00" />
{{-- <meta property="og:image" content="{{ _asset('assets-app/img/meta_images/blacklist-members.webp') }}" /> --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@EnablersPk" />
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('assets-app/plugins/jquery-image-viewer-magnify/css/jquery.magnify.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    #banner.banner {
        background: url("{{ asset('young-entrepreneur-page/assets/images/Pages/guests/banner.png') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: right;

    }

    #banner .main-heading {
        font-size: 45px;
        font-weight: 600;
        color: white;
        /* margin-top: 60px; */
    }

    #banner .main-heading span {
        color: #F05C2F;
    }

    #banner .sub-heading {
        color: white;
        font-size: 20px;
        line-height: 29px;
        margin-bottom: 30px;
    }

    #box-img .card img {
        transition: all 0.3s ease;
        border-radius: 4px;
        padding: 10px;
        height: 225px;

    }


    #box-img .honor-text {
        padding: 0px 85px;
    }

    .divider-line {
        width: 100%;
        height: 3px;
        background-color: #063040;
    }

    #box-img {
        padding: 20px 0 0;

    }

    .guest-card {
        border: 1px solid #E5E7EB !important;
        border-radius: 12px !important;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0px 0px 7px 0px #00000040;
    }

    .guest-card:hover {
        transform: scale(1.05);
        transition: all 0.3s ease;
    }



    .guest-img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .guest-badge {
        background: linear-gradient(180deg, #F67C0F -5.36%, #F14C1E 100%);
        color: #ffffff !important;
        font-size: 10px !important;
        font-weight: 600;
        padding: 6px 5px !important;
        border-radius: 14px !important;
        box-shadow: 0px 0px 6px 0px #FFFFFF;
        text-transform: uppercase;
    }

    .star-icon {
        font-size: 10px;
        margin-right: 4px;
    }

    .guest-name {
        color: #F05C2F;
        font-weight: 700;
        font-size: 1.1rem;
    }

    .guest-divider {
        width: 40px;
        border-top: 1.5px solid #F05C2F;
        opacity: 1;
    }

    .guest-designation {
        color: #000000;
        font-size: 13px;
        font-weight: 500;
    }

    .honor-text {
        font-size: 1rem;
        color: #4B5563;
        line-height: 1.6;
    }
.org-line{
    border-bottom : 2px solid  #F05C2F;
    width: 65px;
}
    .main-mini-text {
        font-size: 20px;
        color: #F05C2F;
        margin-top: 30px;
        font-weight: 400;
    }

    @media (max-width: 992px) {
        #banner.banner {
        background: url("{{ asset('young-entrepreneur-page/assets/images/Pages/guests/guest-banner.png') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: right;

    }
   
        #box-img .card img {
            height: 100%
        }
 .main-mini-text {
    font-size: 10px;
 }
        #box-img {
            padding: 25px 0;
        }

        .mobile-hidden {
            display: none;
        }

        #banner .main-heading {
            font-size: 35px;
            color: #000000;
        }

        #banner .sub-heading {
            font-size: 14px;
            line-height: normal;
            padding: 0%;
           color: #000000;
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
            <div class="col-lg-7 col-12">
                <p class="main-mini-text">Inspiring A Brighter Tomorrow</p>
                <h1 class="main-heading display-5 fw-bold">Meet Our <br> <span> Guests of Honor </span></h1>
               <div class="org-line"></div>
                <p class="sub-heading mt-3">
                    Distinguished Leaders, visionaries and change-makes <br class="mobile-hidden"> joining us at Young Entrepreneur Fest 2026 </p>
            </div>
        </div>
    </div>
</div>

{{-- images --}}
<div id="box-img" class="img">
    <div class="container">
        <div class="row ">
          
        </div>
        <div class="row justify-content-center text-center">
            <div class="footer-decorations mt-4">
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/guests/star.png') }}" class="img-fluid" alt="Star graphic">
                <p class="honor-text mt-4">
                    Join us as we honor these exceptional individuals whose journeys will fuel your ambition and <br class="mobile-hidden">
                    spark bold new ideas. Prepare for inspiring stories, powerful moments, and game-changing <br class="mobile-hidden">
                    wisdom. this is where the future meets its role models.
                </p>
            </div>
        </div>
    </div>
</div>
{{-- images --}}
@endsection