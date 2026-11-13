@extends('app.layouts.app')

@section('title', 'Book a Stall – Young Entrepreneur Expo | Enablers')
@section('meta-info')
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Book a Stall – Young Entrepreneur Expo | Enablers" />
<meta property="og:description" content="Empower the next generation of business leaders by sponsoring a young entrepreneur through Enablers. Support youth in building successful careers and startups in Pakistan." />
<meta property="og:url" content="https://www.enablers.org/young-entrepreneur/sponsor/" />
<meta property="og:site_name" content="Enablers" />
<meta property="article:publisher" content="https://www.facebook.com/EnablersTeam/" />
<meta property="article:modified_time" content="2021-06-14T07:34:10+00:00" />
{{-- <meta property="og:image" content="{{ asset('assets-app/img/meta_images/blacklist-members.webp') }}" /> --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@EnablersPk" />
@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('assets-app/plugins/jquery-image-viewer-magnify/css/jquery.magnify.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    @font-face {
        font-family: "Swis721 Blk BT";
        src: url("../fonts/ttf/IntelOneMono-Regular.ttf") format("truetype");
        font-style: normal;
        font-display: swap;
    }

    :root {
        --font-primary: "Inter", sans-serif;
        --bg-orange: #F25C05;
        --white: #FFFFFF;
        --dark: #060606;
        --d-blue: #0F172B;
        --light: #F8FAFC;
    }

    body {
        background-color: #f8f9fa;
    }

    .banner {
        background: url("{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/main-banner.png') }}");
        background-size: cover;
        background-position: center;
        border-bottom: 1.5px solid #D8D8D8;
    }

    .banner .badge {
        font-size: 14px;
        font-family: var(--font-primary);
        color: var(--bg-orange);
        border: 1px solid var(--bg-orange);
        padding: 10px 20px;
        border-radius: 20px;
    }

    #banner .title-heading {
        font-size: 60px;
        font-weight: 700;
        color: #000000;

    }

    #banner .sub-heading {
        color: black;
        font-size: 45px;
        font-weight: 700;
    }

    #banner .sub-heading span {
        color: var(--bg-orange);
    }

    #banner .info-banner {
        font-size: 20px;
        font-weight: 500;
        color: black;
    }

    #banner .sponsor-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 75px;
        background: var(--bg-orange);
        color: #fff;
        text-decoration: none;
        border: 1px solid transparent;
        font-weight: 700;
        border-radius: 4px;
    }

    #banner .sponsor-btn:hover {
        background: white;
        color: var(--bg-orange);
        border: 1px solid var(--bg-orange);
    }

    #banner .sponsor-btn:hover img {
        filter: invert(48%) sepia(79%) saturate(2476%) hue-rotate(360deg) brightness(101%) contrast(105%);
    }

    #banner .sponsor-btn img {
        width: 14px;
        height: 14px;
        object-fit: contain;
    }


    /* banner end */
    #clients .title-heading,
    #package .title-heading,
    #yef-glimse .title-heading,
    #sponsors-video .title-heading {
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--bg-orange);
        font-size: 40px;
        font-weight: 600;
        text-align: center;
        width: 100%;
        gap: 20px;
    }

    #clients .title-heading::before,
    #package .title-heading::before,
    #yef-glimse .title-heading::before,
    #sponsors-video .title-heading::before {
        content: "";
        height: 3px;
        width: 65px;
        background: linear-gradient(90deg, rgba(240, 92, 47, 0) 0%, #f05c2f 100%);
    }


    #clients .title-heading::after,
    #package .title-heading::after,
    #yef-glimse .title-heading::after,
    #sponsors-video .title-heading::after {
        content: "";
        height: 3px;
        width: 65px;
        background: linear-gradient(90deg, #f05c2f 0%, rgba(240, 92, 47, 0) 100%);
    }

    .b-bottom {
        border-bottom: 1.5px solid #D8D8D8;
    }

    /* clients */
    #clients {
        background-color: #F8f9fa;
        border-bottom: 1.5px solid #D8D8D8;
    }

    #package {
        border-bottom: 1.5px solid #D8D8D8;
    }

    #clients .stall-grid {
        display: grid;
        grid-template-columns: repeat(11, 1fr);
        gap: 10px;
    }

    #clients .stall-card {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, .05);
        padding: 15px;
    }

    #clients .stall-card span {
        font-size: 11px;
        font-weight: 700;
        line-height: 1.2;
    }

    @media(max-width:1200px) {
        #clients .stall-grid {
            grid-template-columns: repeat(6, 1fr);
        }
    }

    #clients .feature-item {
        border: 1.5px solid #D8D8D8;
        border-radius: 10px;
        background: #fff;
        padding: 18px 10px;
        text-align: center;
        margin: 0 8px;
        flex: 0 0 calc(20% - 16px);
        max-width: calc(20% - 16px);
    }

    #clients .feature-item .icon-wrapper {
        margin-bottom: 12px;
    }

    #clients .feature-item .icon-wrapper img {
        height: 60px;
        object-fit: contain;
    }

    #clients .feature-item .head-info {
        font-size: 28px;
        font-weight: 600;
        color: black;
        margin-bottom: 2px;
        line-height: 1;
    }

    #clients .feature-item .label-info {
        font-size: 20px;
        font-weight: 500;
        color: var(--dark);
        margin-bottom: 0;
    }

    /* package */
    #package .sponsor-card {
        border-radius: 12px;
        background: #fff;
        border: 1px solid transparent;
        overflow: hidden;
        box-shadow: 0px 10px 15px -3px #0000001A;
        display: flex;
        padding: 0px 30px;
        border: none !important;
        flex-direction: column;
    }

    #package .sponsor-card:hover {
        border: 2px solid #F05C2F !important;
    }

    #package .sponsor-card.active {
        border: 2px solid #F05C2F;
    }

    #package .branding-space {
        font-size: 12px;
        color: #797E86;
        font-weight: 400;
        padding-left: 20px;
    }

    #package .card-header {
        color: #fff;
        text-align: center;
        font-size: 18px;
        font-weight: 700;
        padding: 20px;
        position: relative;
    }

    .bronze {
        background: #0F172B;
    }

    .silver {
        background: #000000;
    }

    .gold {
        background: #F05C2F;
    }

    #package .card-header span {
        position: absolute;
        right: 0px;
        top: 22px;
        font-size: 10px;
        background: #F05C2F;
        padding: 2px 10px;
        border-radius: 3px;
    }

    .gold span {
        background-color: black;
    }

    #package .card-body {
        /* padding: 20px 40px; */
        display: flex;
        flex-direction: column;
        flex: 1;

    }

    #package .stall-size {
        color: #797E86;
        font-size: 12px;
        font-weight: 600;
    }

    #package .stall-main {
        color: #F05C2F;
        font-size: 24px;
        font-weight: 600;
    }

    #package .currency {
        margin: 0;
        font-size: 12px;
        text-align: center;
        font-weight: 700;
        color: #475569;
    }

    #package .currency span {
        font-size: 36px;
        color: #F05C2F;
        font-weight: 600;
        margin-left: 5px;
    }


    .sponsor-card.active .price,
    .sponsor-card.active .currency {
        color: black;
    }

    #package .list-card {
        padding: 25px;
    }

    #package .highlight {
        color: #F05C2F;
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    #package .card-body ul li {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #090909;
        font-weight: 400;
    }

    #package .sponsor-btn {
        border: 1px solid #CAD5E2;
        border-radius: 4px;
        font-size: 15px;
        font-weight: 700;
        padding: 12px;
        color: #1D293D;
        margin-top: auto;
        width: 100%;
        text-align: center;
    }

    #package .sponsor-btn.fill {
        background: #F05C2F;
        color: #fff !important;
        border-color: 1px solid transparent;
    }

    #package .sponsor-btn.fill:hover {
        background-color: white;
        color: #F05C2F !important;
        border: 1px solid var(--bg-orange);
    }

    /* table */

    #sponsor-table .section-title,
    #sponsor-table .section-main-title span {
        font-size: 30px;
        font-weight: 700;
        color: #F05C2F;
    }

    #sponsor-table .section-main-title {
        font-size: 30px;
        font-weight: 700;
        color: black;
    }

    #sponsor-table .sponsor-table {
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        box-shadow: 0px 1px 2px -1px #0000001A;
        box-shadow: 0px 1px 3px 0px #0000001A;
    }

    #sponsor-table .sponsor-table table {
        min-width: 700px;
    }

    #sponsor-table .sponsor-table thead {
        background: #111;
    }

    #sponsor-table .sponsor-table thead th {
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        padding: 14px;
        border: none;
    }

    #sponsor-table .sponsor-table tbody td {
        padding: 10px 15px;
        font-size: 14px;
        border-color: #E2E8F0;
        vertical-align: middle;
        color: #314158;
        font-weight: 500;
        background-color: white;
    }

    tr td.dash {
        color: #CAD5E2 !important;
        font-size: 20px;
    }

    tr td.num {
        font-size: 14px;
        color: #070707;
        font-weight: 600;

    }

    /* Audience */

    #sponsor-table .audience-box {
        border: 1px solid #ececec;
        border-radius: 6px;
        background: #fff;
        text-align: center;
        padding: 18px 10px;
        height: 100%;
        transition: .3s;
    }

    #sponsor-table .audience-box:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, .08);
    }

    #sponsor-table .audience-box img {
        width: 36px;
        height: 36px;
        object-fit: contain;
        margin-bottom: 10px;
    }

    #sponsor-table .audience-box p {
        margin: 0;
        font-size: 13px;
        font-weight: 600;
        color: #333;
        line-height: 1.4;
    }

    .attend-card {
        background: #fff;
        border: 1px solid #E2E8F0;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        padding: 55px 0px;
    }

    .attend-card-icon-container {
        flex-direction: column;
    }

    .attend-card-icon {
        width: 40%;
        margin-bottom: 15px;

    }

    .attend-card-title {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        color: #1E293B;
    }

    /* Heading */

    #faqs .faqs-title {
        font-size: 24px;
        font-weight: 700;
        color: #F25C05;

    }

    #faqs .subtitle {
        font-weight: 400;
        font-size: 14px;
        color: black;
        margin-bottom: 25px;
    }

    #faqs .testimonial-card {
        background: #fff;
        border: 1px solid #E6E6E6;
        border-radius: 12px;
        padding: 18px 25px;
        height: 100%;
        transition: .3s;
        box-shadow: 0px 1px 2px -1px #0000001A;
        box-shadow: 0px 1px 3px 0px #0000001A;
        display: flex;
        flex-direction: column;
    }

    #faqs .testimonial-card:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
    }

    #faqs .testimonial-text {
        font-size: 12px;
        color: #45556C;
        line-height: 18px;
        font-style: italic;
        margin-bottom: 20px;
        font-weight: 400;
        flex: 1;
    }

    #faqs .person-name {
        font-size: 14px;
        font-weight: 700;
        color: #1D293D;
        margin-bottom: 2px;
        margin-top: auto;
    }

    #faqs .company-name {
        font-size: 12px;
        color: #F25C05;
        font-weight: 600;
    }

    /* FAQ */

    #faqs .faq-item {
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        background: transparent;
        padding: 15px 18px;
        cursor: pointer;
        transition: .3s;
    }

    #faqs .faq-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: black;
    }

    #faqs .faq-item:hover {
        border-color: #F15A00;
    }

    #faqs .faq-item span:first-child {
        font-size: 12px;
        font-weight: 700;
        color: #1D293D;
    }

    #faqs .faq-item span:last-child {
        color: #F15A00;
        font-size: 18px;
        font-weight: 700;
    }

    #faqs .faq-item.active span:last-child {
        transform: rotate(45deg);
    }

    #faqs .faq-answer {
        display: none;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #ECECEC;
        font-size: 14px;
        color: #555;
        line-height: 1.6;
        background: transparent;
    }

    #faqs .faq-answer.show {
        display: block;
        font-size: 12px;
        color: black !important;
        font-weight: 400;
    }

    #faqs .sponsor-form {
        /* border: 1px solid #E5E7EB; */
        background: white;
        border-radius: 16px;
        box-shadow: 0px 4px 6px -4px #0000001A;
        box-shadow: 0px 10px 15px -3px #0000001A;

        padding: 28px;
        color: #fff;
    }

    #faqs .sponsor-form h4 {
        font-size: 20px;
        font-weight: 700;
        color: var(--bg-orange);
        margin-bottom: 6px;
    }

    #faqs .sponsor-form p {
        font-size: 12px;
        font-weight: 400;
        color: #767B85;
        margin-bottom: 25px;
    }

    #faqs .form-control,
    #faqs .form-select {
        background: #f9f8fa;
        border: 1px solid #E5E7EB;
        color: black;
        border-radius: 4px;
        height: 48px;
        font-size: 12px;
    }

    #faqs textarea.form-control {
        height: 110px;
        resize: none;
    }

    #faqs .form-control::placeholder {
        color: #00000080;
        font-weight: 400;
        font-size: 12px;


    }

    #faqs .form-label {
        display: block;
        font-size: 11px;
        font-weight: 700;
        color: black;
        margin-bottom: 8px;
    }

    #faqs .form-select {
        color: #00000080;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23F25C05' d='M6 8L0 0h12z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 12px;
        padding-right: 36px;
    }

    #faqs .form-select:valid {
        color: black;
    }

    #faqs .form-control:focus,
    #faqs .form-select:focus {
        color: black;
        box-shadow: none;
        border: 1px solid #F15A00;
    }

    #faqs .submit-btn {
        width: 100%;
        height: 50px;
        border: none;
        border-radius: 4px;
        background: #F25C05;
        color: #fff;
        font-size: 14px;
        font-weight: 700;
        transition: .3s;
        box-shadow: 0px 4px 6px -4px #0000001A;
        box-shadow: 0px 10px 15px -3px #0000001A;

    }

    #faqs .submit-btn:hover {
        background: #d94f00;
    }

    #faqs small {
        display: block;
        text-align: center;
        margin-top: 18px;
        color: #90A1B9;
        font-size: 11px;
    }

    .b-bottom {
        display: none;
    }

    /* mobile */
    @media (max-width:767px) {

        .section-title {
            font-size: 20px;
        }

        .sponsor-table table {
            min-width: 600px;
        }

        .sponsor-table tbody td,
        .sponsor-table thead th {
            font-size: 13px;
            padding: 10px;
        }

        .audience-box {
            padding: 14px 8px;
        }

        .audience-box img {
            width: 30px;
            height: 30px;
        }

        .audience-box p {
            font-size: 12px;
        }

        #clients .stall-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 5px;
        }

        #clients .feature-box .row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        #clients .feature-item {
            flex: 0 0 calc(50% - 6px);
            max-width: calc(50% - 6px);
            border: 1.5px solid #D8D8D8;
            border-radius: 10px;
            background: #fff;
            padding: 18px 10px;
            text-align: center;
            margin: 0;
        }

        #clients .feature-item:last-child {
            margin-left: auto;
            margin-right: auto;
        }

        #clients .feature-item .head-info {
            font-size: 20px;
        }

        #clients .feature-item .label-info {
            font-size: 16px;
        }

        #package .currency span {
            font-size: 30px;
        }

        #package .stall-main {
            font-size: 20px;
        }

    }

    #partners .main-heading {
        font-weight: 600;
        font-size: 40px;
        color: #f05c2f;
    }

    #partners img {
        width: -webkit-fill-available;
    }

    #partners .see-more {
        color: #f05c2f;
        text-decoration: underline;
        font-weight: 500;
        font-size: 20px;
        transition: color 0.3s;
    }

    .eligible-box {
        display: flex;
        align-items: center;
        gap: 8px;
        border-top: 1px solid #e5e5e5;
        padding: 12px 0px;
    }

    .eligible-box img {
        width: 18px;
        height: 18px;
        object-fit: contain;
    }

    .eligible-box p {
        margin: 0;
        font-size: 14px;
        color: #777;
        line-height: 1.4;
    }

    .eligible-box p span {
        color: #F15A29;
        font-weight: 600;
    }

    #forms .card {
        border: 2px solid #f05c2f;
        border-radius: 18px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        margin-top: 35px;
    }

    #forms .title {
        font-size: 55px;
        font-weight: 700;
        text-align: center;
        margin-bottom: -7px;
        margin-top: 25px;
        color: #f05c2f;
    }

    #forms.form .subtitle {
        padding: 1px 7px;
        font-size: 19px;
        font-weight: 700;
        background-color: #f05c2f;
        color: #FFFFFF;
        width: 149px;
        border-radius: 5px;
        margin-bottom: 7px;
        margin-top: 20px;
    }

    #forms .form {
        margin-top: -45px;
    }

    #box-information .card {
        border: 2px solid #f05c2f;
        border-radius: 18px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    }

    #box-information .information,
    #box-information .last-information {
        font-size: 23px;
        font-weight: 700;
        background-color: #FFFFFF;
        border: 1px solid #f05c2f;
        border-radius: 15px;
        padding: 20px 18px;
    }

    #box-information .information p,
    #box-information .last-information p {
        font-weight: 700;
        font-size: 23px;
        color: #f05c2f;
    }

    #box-information .information span,
    #box-information .last-information span {
        font-weight: 500;
        font-size: 23px;
        display: block;
        padding-left: 9px;
        /* line-height: 1.9; */
    }

    #box-information .arrow-color,
    .last-information .arrow-color {
        color: #f05c2f;

    }

    #box-information .last-information {
        margin-top: -456px;
    }

    #forms .form-group,
    #questions.question .form-group {
        position: relative;
        margin-top: -5px;
    }

    #forms .form-input {
        border: 1px solid #BCBCBC;
        border-radius: 9px;
        font-size: 16px;
        height: 55px;
        width: -webkit-fill-available;
        padding-left: 20px;
    }

    #forms .form-label,
    #questions.question .form-label {
        background-color: white;
        padding: 0 8px;
        font-size: 20px;
        color: #f05c2f;
        font-weight: 500;
    }

    #forms .form-textarea {
        border: 1px solid #BCBCBC;
        border-radius: 9px;
        font-size: 16px;
        height: unset;
        width: -webkit-fill-available;
        padding: 25px;
    }

    .form-select {
        --bs-form-select-bg-img: none;
    }

    .form-select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Cpath d='M5 7.5L10 12.5L15 7.5' stroke='%23B5B5B5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' fill='none'/%3E%3C/svg%3E") !important;
        background-repeat: no-repeat;
        background-position: right 16px center;
        background-size: 18px;
    }

    #forms.equal-column {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .form-select:valid {
        color: #000;
    }

    .form-input::placeholder,
    .input-form::placeholder {
        font-size: 18px;
        color: #BCBCBC;
        font-weight: 500;
    }

    .sponsor-card .sponsor-btn {
        margin-top: auto;
    }

    #forms .sponsorsubtitle {
        padding: 1px 7px;
        font-size: 19px;
        font-weight: 700;
        background-color: #f05c2f;
        color: #FFFFFF;
        width: 223px;
        border-radius: 5px;
        margin-top: 30px;
    }

    #submitArrow {
        display: inline-block;
        margin-right: 8px;
        margin-left: 8px;
        transition: 0.3s;
    }

    #submitArrow.loading {
        animation: spin .8s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* last */
    .cta-section {
        background: #F05C2F;
        padding: 55px;
        margin: auto;
        text-align: center;
    }

    .cta-section h2 {
        color: #fff;
        font-size: 30px;
        font-weight: 800;
        margin-bottom: 15px;
        font-family: 'Poppins', sans-serif;
    }

    .cta-section p {
        color: white;
        font-size: 14px;
        font-weight: 400;
        margin: 0 auto 30px;
        line-height: 1.7;
        font-family: 'Poppins', sans-serif;
    }

    .cta-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: #000;
        color: #fff;
        text-decoration: none;
        padding: 15px 34px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 700;
        transition: .3s;
        box-shadow: 0 8px 20px rgba(0, 0, 0, .18);
        font-family: 'Poppins', sans-serif;
    }

    .cta-btn span {
        font-size: 18px;
        transition: .3s;
    }

    .cta-btn:hover {
        background: #1b1b1b;
        color: #fff;
        transform: translateY(-3px);
    }

    .cta-btn:hover span {
        transform: translateX(4px);
    }

    @media (max-width:768px) {

        .cta-section {
            padding: 45px 20px;
        }

        .cta-section h2 {
            font-size: 24px;
        }

        .cta-section p {
            font-size: 14px;
            margin-bottom: 25px;
        }

        .cta-btn {
            padding: 13px 28px;
            font-size: 14px;
        }
    }

    #organizers.organizer .sub-heading {
        color: #0A0808;
        font-size: 24px;
        font-weight: 500;
    }

    .before-slider-see-btn {
        color: #f05c2f;
        background-color: white;
        border: 1px solid var(--bg-orange);
        padding: 5px 25px;
        border-radius: 4px;
        font-size: 18px;
        font-weight: 500;
    }

    .before-slider-see-btn:hover {
        color: white;
        background-color: #f05c2f;
        border: transparent;
    }

    ::marker {
        color: #f05c2f;
    }

    .form-input.error-border,
    .form-textarea.error-border,
    .form-input.error,
    .form-textarea.error {
        border: 1px solid #dc3545 !important;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
    }



    #forms select option {
        color: #000000;
    }

    .table>thead {
        vertical-align: middle;
    }

    .table td,
    .table tbody,
    .table thead,
    .table tr {
        color: #314158;
        font-size: 18px;
        background-color: white;
        font-weight: 600;
    }

    .table i {
        color: #063040;
        font-size: 30px;
        font-weight: 600;
    }

    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: #063040;
    }

    #clients .btn-primary {
        background-color: #f05c2f;
        border: 1px solid #f05c2f;
        color: white;
        padding: 10px 100px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 20px;
        transition: all 0.3s ease;

    }

    #clients .btn-primary:hover {
        background-color: white;
        border: 1px solid #f05c2f;
        color: #f05c2f;
    }

    .table>:not(caption)>*>* {
        background-color: unset !important;
        color: unset !important;
    }

    .table thead {
        background-color: #063040 !important;
    }

    .table thead tr {
        background-color: #063040 !important;
        color: #fff;
        font-size: 24px;
    }

    #client .swiper-slide img {
        border: 3px solid #FAAC1D;
        border-radius: 200px;
        background-color: #fff;
    }

    .sponsorSwiper .swiper-button-next::after,
    .sponsorSwiper .swiper-button-prev::after {
        font-size: 18px;
    }

    #clients .swiper {
        padding: 0px !important;
    }

    #clients .swiper-button-prev,
    #clients .swiper-button-next {

        background-color: white;
        border: 1px solid #E2E8F0;
        color: #F25C05;
        margin: -20px -10px;
    }

    #clients .swiper-button-prev::before,
    #clients .swiper-button-prev::after {
        color: #F25C05 !important;
    }

    #clients .swiper-button-prev::after,
    #clients .swiper-button-next::after {
        color: #F25C05 !important;
    }

    .clients-swiper .swiper-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #clients .swiper-slide {
        padding: 30px !important;
        border: none;
    }

    .clients-swiper .swiper-slide {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto;
    }

    .clients-swiper .circle {
        width: 120px;
        height: 120px;
        margin: 0 auto;
    }

    .clients-swiper .circle img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .clients-prev,
    .clients-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #F5E5D9;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 10;
        color: #F25C05;
        font-weight: bold;
        font-size: 20px;
        transition: all 0.3s;
        border: none;
        outline: none;
    }

    .clients-prev:hover,
    .clients-next:hover {
        background: #F25C05;
        color: white;
    }

    .clients-prev {
        left: 15px;
    }

    .clients-next {
        right: 15px;
    }

    .clients-prev::after,
    .clients-next::after {
        content: '';
    }

    @media (max-width: 768px) {
        .clients-swiper {
            padding: 30px 60px;
        }

        .clients-swiper .circle {
            width: 80px;
            height: 80px;
        }

        .clients-prev,
        .clients-next {
            width: 35px;
            height: 35px;
            font-size: 16px;
        }

        .clients-prev {
            left: 5px;
        }

        .clients-next {
            right: 5px;
        }

        #clients .swiper-slide img {
            height: 100px !important;
        }
    }

    @media (max-width: 767.98px) {

        #banner .col-12 {
            text-align: center;
        }

        #banner .sub-heading {
            font-size: 24px;
            padding: 0%;
            text-align: center;
        }

        #banner .banner {
            height: auto !important;
        }

        .package {
            padding: 0px;
        }

        .banner .title-heading {
            font-size: 32px !important;
        }

        #banner .info-banner {
            font-size: 16px;
        }

        #banner .sponsor-btn {
            padding: 10px 30px;
        }

        #sponsor-table .section-title,
        #sponsor-table .section-main-title span,
        #sponsor-table .section-main-title {
            font-size: 24px;
        }

        #package .sponsor-btn {
            font-size: 12px;
        }

        .feature-item:last-child {
            margin-left: auto;
            margin-right: auto;
        }

        .feature-item .head-info {
            font-size: 22px;

        }

        .feature-item .label-info {
            font-size: 16px;
        }

        #clients .title-heading,
        #package .title-heading,
        #yef-glimse .title-heading,
        #sponsors-video .title-heading {
            display: block;
            font-size: 23px;
            gap: 6px;
        }

        #package .card-header {
            font-size: 15px;
        }

        #package .price {
            font-size: 24px;
        }

        #partners .main-heading {
            font-size: 27px;
        }

        .attend-card-title {
            font-size: 12px;
        }

        #faqs .faqs-title,
        #faqs .faqs-title span {
            font-size: 24px;
        }
    }

    .sponsorSwiper {
        position: relative;
        overflow: hidden;
        padding: 0px 50px 0px 50px;
    }

    .sponsorSwiper .swiper-wrapper {
        margin-left: 0;
    }

    .sponsorSwiper .swiper-button-prev {
        left: 2px;
    }

    .sponsorSwiper .swiper-button-next {
        right: 2px;
    }

    .video-box {
        border-radius: 12px;
        overflow: hidden;
    }

    .video-box iframe {
        width: 100%;
        aspect-ratio: 16/9;
        display: block;
        border: 0;
        height: 100%;
    }

    /* Arrow Buttons */
    .sponsorSwiper .swiper-button-next,
    .sponsorSwiper .swiper-button-prev {
        width: 42px;
        height: 42px;
        background: #ff6b00;
        color: #fff;
        border-radius: 50%;
    }

    .sponsorSwiper .swiper-button-next::after,
    .sponsorSwiper .swiper-button-prev::after {
        /* font-size: 18px; */
        font-weight: bold;
    }

    /* Pagination */
    .sponsorSwiper .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .sponsorSwiper .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #cfcfcf;
        opacity: 1;
    }

    .sponsorSwiper .swiper-pagination-bullet-active {
        background: #ff6b00;
        width: 28px;
        border-radius: 20px;
    }

    .packageSwiper {
        padding: 15px 8px 45px;
        overflow: visible;
    }

    .packageSwiper .swiper-wrapper {
        align-items: stretch;
        overflow: visible;
    }

    .packageSwiper .swiper-slide {
        height: auto;
        display: flex;
        padding: 20px;
    }

    .packageSwiper .sponsor-card {
        width: 100%;
        height: 100%;
        border-radius: 14px;
        display: flex;
        flex-direction: column;
    }

    .packageSwiper .swiper-pagination {
        bottom: 0 !important;
    }

    .packageSwiper .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        border: 1.5px solid #F05C2F;
        background: transparent;
        opacity: 1;
        margin: 0 6px !important;
    }

    .packageSwiper .swiper-pagination-bullet-active {
        background: #F05C2F;
    }

    .package .container {
        overflow: hidden;
    }

    .packageSwiper {
        padding: 20px 0 45px;
        overflow: hidden;
    }

    .packageSwiper .swiper-wrapper {
        align-items: stretch;
    }

    .packageSwiper .card-body {
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .stall-card img {
        width: 24px;
        height: 24px;
        object-fit: contain;
        margin-bottom: 10px;
    }

    .stall-card span {
        min-height: 36px;
        display: block;
    }

    .packageSwiper .sponsor-btn {
        margin-top: auto !important;
    }

    .packageSwiper .swiper-slide {
        height: auto;
        display: flex;
        padding: 0;
    }

    .packageSwiper .sponsor-card {
        width: 100%;
        height: 100%;
    }

    .error-border {
        border: 1px solid #dc3545 !important;
    }
</style>
@endpush
@section('content')
<div id="banner" class="banner d-flex align-items-center">
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-9 col-12">
                <div class="badge">
                    YOUNG ENTREPRENEUR FEST 2026
                </div>
                <h1 class="title-heading mt-lg-2">Book Your Stall at</h1>
                <p class="sub-heading">
                    Pakistan's Largest <br> <span>Youth Entrepreneurship Festival</span> </p>
                <p class="info-banner">Showcase your products to 40,000+ visitors, connect with <br class="mobile-hidden">
                    investors, generate sales, and grow your brand in one day.</p>
               
            </div>
        </div>
    </div>
</div>
<section id="clients" class="clients">
    <div class="container">
        <div class="row justify-content-center">
            <!-- <div class="col-lg-12">
                <div class="feature-box">
                    <div class="row text-start g-0 align-items-center">
                        <div class="col-lg-2 col-6 feature-item">
                            <div class="icon-wrapper">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/attandes.png') }}" class="img-fluid" alt="Attendees">
                            </div>
                            <div class="text-wrapper">
                                <h2 class="head-info">40,000+</h2>
                                <p class="label-info">Attendees</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6 feature-item">
                            <div class="icon-wrapper">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/start.png') }}" class="img-fluid" alt="Startups">
                            </div>
                            <div class="text-wrapper">
                                <h2 class="head-info">500+</h2>
                                <p class="label-info">Startups</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6 feature-item">
                            <div class="icon-wrapper">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/boy.png') }}" class="img-fluid" alt="Entrepreneurs">
                            </div>
                            <div class="text-wrapper">
                                <h2 class="head-info">100+</h2>
                                <p class="label-info">Entrepreneurs</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6 feature-item">

                            <div class="icon-wrapper">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/house.png') }}" class="img-fluid" alt="Stalls">
                            </div>
                            <div class="text-wrapper">
                                <h2 class="head-info">200+</h2>
                                <p class="label-info">Stalls</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6 feature-item">
                            <div class="icon-wrapper">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/people.png') }}" class="img-fluid" alt="Digital Reach">
                            </div>
                            <div class="text-wrapper">
                                <h2 class="head-info">50M+</h2>
                                <p class="label-info">Digital Reach</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <h2 class="title-heading text-center">
                Who Should Book a Stall?
            </h2>
            <div class="stall-grid">
                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/symbol.png') }}" class="img-fluid mb-1">
                    <span>Fashion <br> Brands</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/star.png') }}" class="img-fluid mb-1">
                    <span>Food Businesses</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/energy.png') }}" class="img-fluid mb-1">
                    <span>Startups</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/heart.png') }}" class="img-fluid mb-1">
                    <span>Handmade Products</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/layer.png') }}" class="img-fluid mb-1">
                    <span>Universities</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/world.png') }}" class="img-fluid mb-1">
                    <span>Franchises</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/tv.png') }}" class="img-fluid mb-1">
                    <span>Technology Companies</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/person.png') }}" class="img-fluid mb-1">
                    <span>Service Businesses</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/fire.png') }}" class="img-fluid mb-1">
                    <span>Creative Brands</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/house.png') }}" class="img-fluid mb-1">
                    <span>Home-Based Businesses</span>
                </div>

                <div class="stall-card">
                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/plus.png') }}" class="img-fluid mb-1">
                    <span>And More!</span>
                </div>

            </div>
            <!-- <div class="border mt-5" style="border-bottom:1.5px solid #D8D8D8"></div> -->
        </div>
    </div>
</section>
<section id="package" class="package">
    <div class="container">
        <h2 class="title-heading text-center mb-lg-5 mb-3 mt-lg-0 mt-3">
            Stall Packages
        </h2>
        <div class="col-12">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 25,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            2 x 2 Meter
                        </div>


                        <div class="card-body mt-3 mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 1 Wood Counter and 2 Chairs</strong></li>
                            </ul>
                            <div class="eligible-box">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" class="img-fluid" style="display:flex; align-items:flex-start; gap:10px;">
                                <p>
                                    <span>Eligible:</span> Start ups and any business Chain
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 mb-3" data-package="2 x 2 Meter">Book 2 x 2 Meter Stall</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 30,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall2.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            2 x 2 Meter (corner)
                        </div>
                        <div class="card-body mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 1 Wood Counter and 2 Chairs</strong></li>
                            </ul>
                            <div class="eligible-box">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" alt="Eligible">
                                <p>
                                    <span>Eligible:</span> Start ups and any business Chain
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 " data-package="2 x 2 Meter (Corner)">Book 2 x 2 Meter (Corner) Stall</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-12 mt-lg-0 mt-3">
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 30,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            3 x 3 Meter
                        </div>
                        <div class="card-body mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 1 Wood Counter and 3 Chairs</strong></li>
                            </ul>
                            <div class="eligible-box">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" alt="Eligible">
                                <p>
                                    <span>Eligible:</span> Start ups and any business Chain
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5  mb-3" data-package="3 x 3 Meter">Book 3 x 3 Meter Stall</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-4">
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 35,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall3.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            3 x 3 Meter (Corner)
                        </div>
                        <div class="card-body mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 2 Wood Counter</strong> and<strong> 4 Chairs</strong></li>
                            </ul>
                            <div class="eligible-box">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" alt="Eligible">
                                <p>
                                    <span>Eligible:</span> Start ups and any business Chain
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5  mb-3" data-package="3 x 3 Meter (Corner)">Book 3 x 3 Meter (Corner) Stall</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-12 mt-4">
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 12,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            4 x 4 Feet
                        </div>


                        <div class="card-body mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong>1 Table + 2 Chairs Only </strong>
                                </li>
                                <p class="branding-space">(No Branding space, only standee in front of table)</p>

                            </ul>
                            <div class="eligible-box" style="display:flex; align-items:flex-start; gap:10px;">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}"
                                    alt=""
                                    style="width:20px; height:20px; flex-shrink:0; margin-top:3px;">

                                <p style="margin:0;">
                                    <span>Eligible:</span> Small and local businesses and food stalls + school stalls
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5  mb-3" data-package="4 x 4 Feet">Book 4 x 4 Feet Stall</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-4">
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 100,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall6.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            6 x 6 Meter
                        </div>
                        <div class="card-body mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3" style="display:flex; align-items:flex-start; gap:8px;">
                                    <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" style="width:18px; height:18px; flex-shrink:0; margin-top:3px;">Customize stall area on entrance, stall will be
                                    installed by company
                                </li>

                            </ul>

                            <div class="eligible-box" style="display:flex; align-items:flex-start; gap:10px;">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}"
                                    alt=""
                                    style="width:20px; height:20px; flex-shrink:0; margin-top:3px;">
                                <p style="margin:0;">
                                    <span>Eligible:</span> Small and local businesses and food stalls 
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5  mb-3" data-package="6 x 6 Meter">Book 6 x 6 meter Stall</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="swiper init-swiper packageSwiper"> -->
    <!-- <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 700,

                    "autoplay": {
                        "delay": 3000,
                        "disableOnInteraction": false
                    },
                    "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 15
                        },
                        "576": {
                            "slidesPerView": 1.3,
                            "spaceBetween": 20
                        },
                        "768": {
                            "slidesPerView": 2,
                            "spaceBetween": 20
                        },
                        "992": {
                            "slidesPerView": 3,
                            "spaceBetween": 30,
                            "centeredSlides": false,
                            "loop": false
                        }
                    }
                }
            </script> -->

    <!-- <div class="swiper-wrapper"> 
                 <div class="swiper-slide"> 
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 25,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            2 x 2 Meter
                        </div>


                        <div class="card-body mt-3 mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 1 Wood Counter and 2 Chairs</strong></li>
                            </ul>
                            <div class="eligible-box">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" class="img-fluid" style="display:flex; align-items:flex-start; gap:10px;">
                                <p>
                                    <span>Eligible:</span> Start ups and any business Chain
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 mb-3" data-package="bronze">Book 2 x 2 Meter Stall</a>
                        </div>

                    </div>
               </div> 

                <div class="swiper-slide">
                    <div class="sponsor-card h-100 w-100">
                        <p class="currency mt-3">PKR <span> 30,000 </span></p>
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall2.png') }}" class="img-fluid ">
                        <div class="stall-size mt-3">
                            STALL SIZE
                        </div>
                        <div class="stall-main mt-3">
                            2 x 2 Meter (corner)
                        </div>
                        <div class="card-body mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                                <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 1 Wood Counter and 2 Chairs</strong></li>
                            </ul>
                            <div class="eligible-box">
                                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" alt="Eligible">
                                <p>
                                    <span>Eligible:</span> Start ups and any business Chain
                                </p>
                            </div>
                            <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 " data-package="bronze">Book 2 x 2 Meter (Corner) Stall</a>
                        </div>
                    </div>
                </div>

        <div class="swiper-slide">
            <div class="sponsor-card h-100 w-100">
                <p class="currency mt-3">PKR <span> 30,000 </span></p>
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall.png') }}" class="img-fluid ">
                <div class="stall-size mt-3">
                    STALL SIZE
                </div>
                <div class="stall-main mt-3">
                    3 x 3 Meter
                </div>
                <div class="card-body mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                        <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                        <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 1 Wood Counter and 3 Chairs</strong></li>
                    </ul>
                    <div class="eligible-box">
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" alt="Eligible">
                        <p>
                            <span>Eligible:</span> Start ups and any business Chain
                        </p>
                    </div>
                    <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 mb-3" data-package="bronze">Book 3 x 3 Meter Stall</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="sponsor-card h-100 w-100">
                <p class="currency mt-3">PKR <span> 35,000 </span></p>
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall3.png') }}" class="img-fluid ">
                <div class="stall-size mt-3">
                    STALL SIZE
                </div>
                <div class="stall-main mt-3">
                    3 x 3 Meter (Corner)
                </div>
                <div class="card-body mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Exhibition Booth/Cabin of Fiber</li>
                        <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt="">Space for branding</li>
                        <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong> 2 Wood Counter</strong> and<strong> 4 Chairs</strong></li>
                    </ul>
                    <div class="eligible-box">
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}" alt="Eligible">
                        <p>
                            <span>Eligible:</span> Start ups and any business Chain
                        </p>
                    </div>
                    <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 mb-3" data-package="bronze">Book 3 x 3 Meter (Corner) Stall</a>
                </div>
            </div>
        </div>-->

    <!-- <div class="swiper-slide">
            <div class="sponsor-card h-100 w-100">
                <p class="currency mt-3">PKR <span> 12,000 </span></p>
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall.png') }}" class="img-fluid ">
                <div class="stall-size mt-3">
                    STALL SIZE
                </div>
                <div class="stall-main mt-3">
                    4 x 4 Feet
                </div>


                <div class="card-body mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3"><img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" alt=""><strong>1 Table + 2 Chairs Only </strong>
                        </li>
                        <p class="branding-space">(No Branding space, only standee in front of table)</p>

                    </ul>
                    <div class="eligible-box" style="display:flex; align-items:flex-start; gap:10px;">
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}"
                            alt=""
                            style="width:20px; height:20px; flex-shrink:0; margin-top:3px;">

                        <p style="margin:0;">
                            <span>Eligible:</span> Small and local businesses and food stalls + school stalls
                        </p>
                    </div>
                    <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 mb-3" data-package="bronze">Book 4 x 4 Feet Stall</a>
                </div>
            </div>
        </div> 
        <div class="swiper-slide">
            <div class="sponsor-card h-100 w-100">
                <p class="currency mt-3">PKR <span> 100,000 </span></p>
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/stall.png') }}" class="img-fluid ">
                <div class="stall-size mt-3">
                    STALL SIZE
                </div>
                <div class="stall-main mt-3">
                    6 x 6 Feet
                </div>
                <div class="card-body mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3" style="display:flex; align-items:flex-start; gap:8px;">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/red.png') }}" style="width:18px; height:18px; flex-shrink:0; margin-top:3px;">Customize stall area on entrance, stall will be
                            installed by company
                        </li>

                    </ul>

                    <div class="eligible-box" style="display:flex; align-items:flex-start; gap:10px;">
                        <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/mini.png') }}"
                            alt=""
                            style="width:20px; height:20px; flex-shrink:0; margin-top:3px;">
                        <p style="margin:0;">
                            <span>Eligible:</span> Small and local businesses and food stalls + school stalls
                        </p>
                    </div>
                    <a href="#stallBookingForm" class="btn sponsor-btn fill mb-5 mt-2 mb-3" data-package="bronze">Book 6 x 6 Feet Stall</a>
                </div>
            </div>
        </div>-->

    <!-- </div> -->

    <!-- <div class="swiper-pagination"></div> -->


</section>


<section id="yef-glimse" class="yef-glimse">
    <div class="container">
        <h2 class="title-heading text-center mb-4 mt-lg-0 mt-2" style="color: #F05C2F;">
            Glimpses of Chapter 1 </h2>
        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg">
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/g-1.png') }}"
                    class="img-fluid rounded w-100 h-100" alt="">
            </div>

            <div class="col-6 col-md-4 col-lg">
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/g-2.png') }}"
                    class="img-fluid rounded w-100 h-100" alt="">
            </div>

            <div class="col-6 col-md-4 col-lg">
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/g-3.png') }}"
                    class="img-fluid rounded w-100 h-100" alt="">
            </div>

            <div class="col-6 col-md-6 col-lg">
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/g-4.png') }}"
                    class="img-fluid rounded w-100 h-100" alt="">
            </div>

            <div class="col-12 col-md-6 col-lg">
                <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/g-5.png') }}"
                    class="img-fluid rounded w-100 h-100" alt="">
            </div>

        </div>
    </div>
</section>
<section id="sponsors-video" class="video-slider">
    <div class="container">
        <h2 class="title-heading text-center mb-5">
            <span style="color:#F05C2F;">What Our Exhibitors Says
        </h2>
        <div class="row">
            <div class="swiper init-swiper sponsorSwiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 700,
                        "autoplay": {
                            "delay": 3500,
                            "disableOnInteraction": false
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 50
                            },
                            "576": {
                                "slidesPerView": 2,
                                "spaceBetween": 40
                            },
                            "992": {
                                "slidesPerView": 4,
                                "spaceBetween": 50
                            }
                        }
                    }
                </script>
                <!-- Navigation -->

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="video-box">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qJvHbWAzXJw?si=4vXiBsqEZ3PAy8uW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="video-box">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/uX_F6vww1DU?si=5sf5fcdZJB5tot1q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="video-box">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/jO-jyA_jrPU?si=rOZfTfqNUIZqJ5e1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="video-box">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NYOiwFMcfyE?si=rPo6DcSPBoWdWzfh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Duplicate slides for smooth looping -->
                    <div class="swiper-slide">
                        <div class="video-box">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ePLDjhDwk00?si=WPVmTAOzXoZvFzgB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="video-box">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/UnNxMyh0oLA?si=4zkduoFumcNcdN9d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<section id="faqs" class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="faqs-title">
                    FREQUENTLY ASKED QUESTIONS
                </h2>
                <div class="subtitle">
                    Quick answers to help you prepare for the festival
                </div>
                <div class="row g-3">
                    <div class="col-12">
                        <div class="faq-item" data-faq="1">
                            <div class="faq-header">
                                <span>Can I sell products directly at the event?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-answer">
                                Yes! Direct sales are highly encouraged. You can accept cash, bank transfers, or card
                                payments at your stall. </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="faq-item" data-faq="2">
                            <div class="faq-header">
                                <span>Is electricity included in the stall?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-answer">
                                Yes, a standard 500W electricity connection is included with every stall booking. If you need
                                higher power, you can request an upgrade.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="faq-item" data-faq="3">
                            <div class="faq-header">
                                <span>Can I bring my own branding and banners?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-answer">
                                Yes, you can bring custom vertical roll-up banners, desk mats, and promotional materials.
                                No structural drilling on the stall panels is allowed.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="faq-item" data-faq="4">
                            <div class="faq-header">
                                <span>How many staff members can I bring?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-answer">
                                Standard package includes 2 exhibitor badges, Premium includes 3, and Platinum includes 4.
                                Additional badges can be purchased separately. </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="faq-item" data-faq="5">
                            <div class="faq-header">
                                <span>How do I select my preferred stall location?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-answer">
                                Once your booking is confirmed, our team will share the live interactive map to let you pick
                                your preferred stall number on a first-come, first-served basis.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-6 mt-lg-0 mt-3">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            
                    <input type="hidden" name="stall_price" id="stall_price">
                    <div id="stallBookingFormAlert"></div>
                    <div class="sponsor-form">
                        <h4>Let's Grow Your Business Together!</h4>
                        <p>
                            Fill out the form below to reserve your stall. Our team will contact you within 24 hours.
                        </p>

                        <div class="row g-3">

                            <div class="col-lg-6 col-12">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
                            </div>
                            <div class="col-lg-6 col-12">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="Enter Phone Number" required>
                            </div>


                            <div class="col-lg-6 col-12">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                            </div>


                            <div class="col-lg-6 col-12">
                                <label class="form-label">City</label>
                                <select class="form-select" id="city" name="city" required>
                                    <option value="" selected disabled>Select City</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Sialkot">Sialkot</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-12 d-none" id="otherCityDiv">
                                <label class="form-label" for="other_city">Enter Your City</label>
                                <input type="text"
                                    class="form-control"
                                    id="other_city"
                                    name="other_city"
                                    placeholder="Enter your city">
                            </div>


                            <div class="col-lg-6 col-12">
                                <label class="form-label">Business Category</label>

                                <select class="form-select category-select" id="business_category" name="business_category" required>
                                    <option value="" selected disabled>Select Business Category</option>
                                    <option value="Business Ideas/Projects">Business Ideas/Projects</option>
                                    <option value="Franchise Sellers">Franchise Sellers</option>
                                    <option value="Products & Services">Products & Services</option>
                                    <option value="Food Booth">Food Booth</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-12 d-none" id="otherCategoryDiv">
                                <label class="form-label">Specify Business Category</label>
                                <input type="text"
                                    class="form-control"
                                    id="other_business_category"
                                    placeholder="Enter your business category">
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 mt-3">
                            <label class="form-label">Stall Size</label>

                            <select class="form-select" id="stall_size" name="stall_size" required>
                                <option value="" selected disabled>Choose a Stall Size</option>

                                <option value="2 x 2 Meter" data-price="25000">
                                    2 x 2 Meter
                                </option>

                                <option value="2 x 2 Meter (Corner)" data-price="30000">
                                    2 x 2 Meter (Corner)
                                </option>

                                <option value="3 x 3 Meter" data-price="30000">
                                    3 x 3 Meter
                                </option>

                                <option value="3 x 3 Meter (Corner)" data-price="35000">
                                    3 x 3 Meter (Corner)
                                </option>

                                <option value="4 x 4 Feet" data-price="12000">
                                    4 x 4 Feet
                                </option>

                                <option value="6 x 6 Meter" data-price="100000">
                                    6 x 6 Meter
                                </option>
                            </select>
                        </div>

                        <div class="col-12 mb-3 mt-3">
                            <label class="form-label">TELL US ABOUT YOUR BUSINESS / PRODUCTS</label>
                            <textarea class="form-control" id="product_info" name="product_info" rows="2" placeholder="Describe what you plan to exhibit..." required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" id="submitBtn" class="submit-btn">
                                <span id="submitSpinner" class="d-none" style="margin-right:8px;">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                </span>
                                <span id="submitText">Reserve My Stall</span>
                                <i class="bi bi-arrow-right ml-5" id="submitArrow"></i>
                            </button>
                        </div>
                    </div>
                    <small>Our team will contact you within 24 hours!</small>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>
<section class="cta-section">
    <div class="container-fluid">
        <h2>Ready to Showcase Your Business?</h2>

        <p>
            Join hundreds of exhibitors and connect with thousands of entrepreneurs,<br class="mobile-hidden">
            investors, students, and buyers.
        </p>

        <a href="#stallBookingForm" class="cta-btn">
            Reserve Your Stall Today!
            <img src="{{ asset('young-entrepreneur-page/assets/images/Pages/stall-book/tick.png') }}" class="img-fluid">
        </a>
    </div>
</section>
<!-- faqs -->
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="{{ asset('assets-app/plugins/jquery-image-viewer-magnify/js/jquery.magnify.js') }}"></script>

<script>
    $(document).ready(function() {
        $("[data-magnify=gallery]").magnify({
            title: false,
            draggable: true,
            resizable: true,
            movable: true,
            initMaximized: true,
        });

        $("#stallBookingForm").validate({
            errorPlacement: function(error, element) {},
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("error-border");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass("error-border");
            },
            submitHandler: function(form) {
                var $btn = $("#submitBtn");
                var $spinner = $("#submitSpinner");
                var $text = $("#submitText");
                var $arrow = $("#submitArrow");
                var $form = $(form);

                $btn.attr("disabled", true);
                $spinner.removeClass("d-none");
                $arrow.addClass("d-none");
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
                        var msg = (res && res.message) ? res.message : 'Booking Submitted Successfully! Please check your email for further information.';
                        var html = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + msg + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $('#stallBookingFormAlert').html(html);
                        $form[0].reset();
                        $('#city').val('').trigger('change');
                        $('#business_category').val('').trigger('change');
                        $('#stall_size').val('').trigger('change');
                        $form.find('.error-border').removeClass('error-border');

                        $('html, body').animate({
                            scrollTop: $('#stallBookingFormAlert').offset().top - 100
                        }, 500);
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
                            var html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' + list + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            $('#stallBookingFormAlert').html(html);
                        } else {
                            var html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">An unexpected error occurred. Please try again later.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            $('#stallBookingFormAlert').html(html);
                        }

                        $('html, body').animate({
                            scrollTop: $('#stallBookingFormAlert').offset().top - 100
                        }, 500);
                    },
                    complete: function() {
                        $btn.attr("disabled", false);
                        $spinner.addClass("d-none");
                        $arrow.removeClass("d-none");
                        $text.text("Reserve My Stall");
                    }
                });
            }
        });

        const clientsSwiper = new Swiper('.clients-swiper', {
            loop: true,
            slidesPerView: 6,
            slidesPerGroup: 6,
            spaceBetween: 20,
            grabCursor: true,
            navigation: {
                nextEl: '.clients-next',
                prevEl: '.clients-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    spaceBetween: 20,
                },
                1400: {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    spaceBetween: 20,
                }
            }
        });

        $('.faq-item').click(function() {
            const answer = $(this).find('.faq-answer');
            const isActive = $(this).hasClass('active');

            $('.faq-item').removeClass('active');
            $('.faq-answer').removeClass('show');

            if (!isActive) {
                $(this).addClass('active');
                answer.addClass('show');
            }
        });

        $('.sponsor-card .sponsor-btn').on('click', function(e) {
            e.preventDefault();
            var pkg = $(this).data('package');
            if (pkg) {
                var $select = $('#stall_size');
                $select.val(pkg);
                if (!$select.val()) {
                    $select.find('option').each(function() {
                        if ($(this).val().toLowerCase().trim() === String(pkg).toLowerCase().trim()) {
                            $select.val($(this).val());
                            return false;
                        }
                    });
                }
                $select.trigger('change');
            }
            $('.sponsor-card').removeClass('active');
            $(this).closest('.sponsor-card').addClass('active');
            $('html, body').animate({
                scrollTop: $('#stallBookingForm').offset().top - 80
            }, 600);
            $('#name').focus();
        });

        $('#stall_size').on('change', function() {
            var price = $(this).find(':selected').data('price');
            if (price) {
                $('#stall_price').val(price);
            } else {
                $('#stall_price').val('');
            }
        });
    });

    document.getElementById('business_category').addEventListener('change', function() {
        const otherDiv = document.getElementById('otherCategoryDiv');

        if (this.value === 'Other') {
            otherDiv.classList.remove('d-none');
            document.getElementById('other_business_category').setAttribute('name', 'business_category');
            this.removeAttribute('name');
        } else {
            otherDiv.classList.add('d-none');
            document.getElementById('other_business_category').removeAttribute('name');
            this.setAttribute('name', 'business_category');
        }
    });

    document.getElementById('city').addEventListener('change', function() {
        const otherCityDiv = document.getElementById('otherCityDiv');

        if (this.value === 'Other') {
            otherCityDiv.classList.remove('d-none');
        } else {
            otherCityDiv.classList.add('d-none');
            document.getElementById('other_city').value = '';
        }
    });
</script>
@endpush