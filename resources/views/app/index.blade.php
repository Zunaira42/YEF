   @extends('app.layouts.app')

   @section('title', "Young Entrepreneur Fest | Showcase, Sell, Connect & Grow | Pakistan's Biggest Young Fest")

   @section('meta-info')
   <meta property="og:locale" content="en_US" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="Young Entrepreneur Fest | Showcase, Sell, Connect & Grow | Pakistan's Biggest Young Fest" />
   <meta property="og:description"
       content="Join Pakistan's biggest Young Entrepreneur Fest to showcase your business, sell products, connect with industry leaders, and discover new growth opportunities." />
   <meta property="og:url" content="https://www.enablers.org/young-entrepreneur/" />
   <meta property="og:site_name" content="Enablers" />
   <meta property="article:publisher" content="https://www.facebook.com/EnablersTeam/" />
   <meta property="article:modified_time" content="2021-06-14T07:34:10+00:00" />
   {{-- <meta property="og:image" content="{{ asset('assets-app/img/meta_images/blacklist-members.webp') }}" /> --}}
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:site" content="@EnablersPk" />
   @endsection

   @push('styles')
   <style>
       .sarmaya {
           width: 25%;
           margin-bottom: 3px;
       }

       #clients .title-heading::before {
           content: "";
           height: 3px;
           width: 65px;
           background: linear-gradient(90deg, rgba(240, 92, 47, 0) 0%, #f05c2f 100%);
       }

       #clients .title-heading::after {
           content: "";
           height: 3px;
           width: 65px;
           background: linear-gradient(90deg, #f05c2f 0%, rgba(240, 92, 47, 0) 100%);
       }

       #clients .swiper-slide img {
           border: none !important;
           border-radius: 0 !important;
           background: transparent !important;
       }

       #clients .client-card img {
           border: none !important;
           border-radius: 0 !important;
           background: transparent !important;
           width: 100%;
           height: 100%;
           object-fit: contain;
       }

       .clients .swiper-slide {
           display: flex;
           justify-content: center;
           padding: 0px;
           margin: 0px;
           align-items: center;
       }

       #clients .clients-slider-container {
           position: relative;
           padding: 0 50px;
       }

       #clients .swiper {
           padding: 0 !important;
           overflow: hidden;
       }

       #clients .client-card {
           width: 100%;
           height: 140px;
           display: flex;
           justify-content: center;
           align-items: center;
           border: none !important;
           background: transparent !important;
           padding: 0 !important;
       }

       #clients .swiper-button-prev,
       #clients .swiper-button-next {
           width: 36px;
           height: 36px;
           border-radius: 50%;
           background-color: white;
           border: 1px solid #E2E8F0;
           color: #F25C05;
           position: absolute;
           top: 50%;
           transform: translateY(-50%);
           margin: 0;
           z-index: 10;
           display: flex;
           align-items: center;
           justify-content: center;
       }

       #clients .swiper-button-prev {
           left: 5px;
       }

       #clients .swiper-button-next {
           right: 5px;
       }

       #clients .swiper-button-prev::before,
       #clients .swiper-button-next::before {
           display: none;
       }

       #clients .swiper-button-prev::after,
       #clients .swiper-button-next::after {
           color: #F25C05 !important;
           font-size: 14px !important;
           font-weight: bold;
       }

       #clients .swiper-wrapper {
           padding: 0px !important;
           align-items: center;
       }

       .before-slider-see-btn {
           color: white;
           background-color: #f05c2f;
           border: 1px solid var(--bg-orange);
           padding: 5px 25px;
           border-radius: 4px;
           font-size: 18px;
           font-weight: 500;
           text-decoration: none;
           display: inline-block;
       }

       .before-slider-see-btn:hover {
           color: #f05c2f;
           background-color: white;
           border: 1px solid #f05c2f;
           padding: 5px 25px;
           border-radius: 4px;
           font-size: 18px;
           font-weight: 500;
       }

       /* .feature-item {
            border: 1.5px solid #D8D8D8;
            border-radius: 10px;
            background: #fff;
            padding: 18px 10px;
            text-align: center;
            margin: 0 8px;
            flex: 0 0 calc(20% - 16px);
            max-width: calc(20% - 16px);
        } */

       .feature-item .icon-wrapper {
           margin-bottom: 12px;
       }

       .feature-item .icon-wrapper img {
           height: 60px;
           object-fit: contain;
       }

       .feature-item .head-info {
           font-size: 28px;
           font-weight: 600;
           color: black;
           margin-bottom: 2px;
           line-height: 1;
       }

       .feature-item .label-info {
           font-size: 20px;
           font-weight: 500;
           color: var(--dark);
           margin-bottom: 0;
       }

       @media (max-width: 767.98px) {
           .sarmaya {
               width: 60%;
               margin-top: 30rem;
           }

           #clients .clients-slider-container {
               padding: 0 45px;
           }

           #clients .swiper-button-prev {
               left: 12px;
           }

           #clients .swiper-button-next {
               right: 12px;
           }

           #clients .swiper-button-prev,
           #clients .swiper-button-next {
               width: 28px;
               height: 28px;
           }

           #clients .swiper-button-prev::after,
           #clients .swiper-button-next::after {
               font-size: 11px !important;
           }

           #clients .swiper-slide img {
               height: 100px !important;
           }

           .feature-item {
               flex: 0 0 calc(50% - 16px);
               max-width: calc(50% - 16px);
               margin-bottom: 20px;
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

           #clients .title-heading {
               display: block;
               font-size: 24px;
               gap: 6px;
           }
       }
   </style>
   @endpush
   @section('content')
   <!-- Hero Section -->

   <section id="hero" class="hero section p-0">
       <div class="container">
           <div class="row">
               <div class=" col-12">
                   <div class="row">
                       <div class="col-lg-8">
                           <div class="hero-content">
                               <p class="hero-info">Pakistan's Largest Youth <br class="mobile-hidden">Entrepreneurship & Innovation Festival</p>

                               <h2 class="main-hero">Young <br>
                                   Entrepreneur <br>
                                   <span class="sub-hero-info"> fest 2026 </span>


                                   <img src="{{ asset('young-entrepreneur-page/assets/images/chp-patch.png') }}" class="img-fluid patch-img">
                               </h2>
                               <img src="{{ asset('young-entrepreneur-page/assets/images/sarmaya.webp') }}" class="img-fluid sarmaya">

                               <h4 class="build mt-lg-2">Build. Launch. Pitch. Networking. Growth.</h4>
                               <p class="banner-ls-info">Join 40,000+ dreamers, Innovators, startups,<br class="mobile-hidden"> Investors and future leaders under one roof. </p>
                               <div class="row mb-lg-5 mb-0">
                                   <div class="col-lg-5 col-12 my-lg-0 mt-0 my-3">
                                       <a href="#"
                                           class="btn d-block banner-btn">Book Your Stall</a>
                                   </div>
                                   <div class="col-lg-5 col-12 my-lg-0 mb-2 mt-0 my-3">
                                       <a href="#"
                                           class="btn d-block visitor-btn">Book as a Visitor</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 m-auto">
                           <div class="gra-box align-items-center m-auto">
                               <div class="right-side position-relative bg-black">
                                   <div class="save-the-date-badge">
                                       SAVE THE DATE
                                   </div>
                                   <div class="row">
                                       <div class="col-12">
                                           <div class="gradient-hover">
                                               <img src="{{ asset('young-entrepreneur-page/assets/images/main-date.png') }}" class="img-fluid right-img">
                                               <div class="text-block">
                                                   <h5 class="mini-title">Date</h5>
                                                   <h3 class="heading">25 October, 2026</h3>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="col-12">
                                           <div class="gradient">
                                               <img src="{{ asset('young-entrepreneur-page/assets/images/main-time.png') }}" class="img-fluid right-img">
                                               <div class="text-block">
                                                   <h5 class="mini-title">Time</h5>
                                                   <h3 class="heading">12:00 PM to 08:00 PM</h3>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="col-12">
                                           <div class="gradient">
                                               <img src="{{ asset('young-entrepreneur-page/assets/images/main-location.png') }}" class="img-fluid right-img">
                                               <div class="text-block">
                                                   <h5 class="mini-title">Venue</h5>
                                                   <h3 class="heading">Expo Centre Lahore</h3>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="lower-right-side mt-1 mb-0">
                                   <div class="row">
                                       <div class="col-12">
                                           <iframe width="100%" height="195"
                                               src="https://www.youtube.com/embed/LzKTyNBS-Ak?si=L_KWoUh8bWEAW4AW"
                                               title="YouTube video player" frameborder="0"
                                               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                               referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                       </div>
                                   </div>
                               </div>
                           </div>


                       </div>

                   </div>
               </div>
           </div>
       </div>
   </section>

   <section id="stats-data" class="data">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-lg-12">
                   <div class="feature-box bg-white">
                       <div class="row text-start g-0 align-items-center">

                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/attandes.png') }}" class="img-fluid" alt="Attendees">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">40,000+</h2>
                                   <p class="label-info">Attendees</p>
                               </div>
                           </div>
                           <!-- Item 2: Startups -->
                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/start.png') }}" class="img-fluid" alt="Startups">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">500+</h2>
                                   <p class="label-info">Startups</p>
                               </div>
                           </div>
                           <!-- Item 3: Entrepreneurs -->
                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/boy.png') }}" class="img-fluid" alt="Entrepreneurs">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">100+</h2>
                                   <p class="label-info">Entrepreneurs</p>
                               </div>
                           </div>
                           <!-- Item 4: Stalls -->
                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/house.png') }}" class="img-fluid" alt="Stalls">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">200+</h2>
                                   <p class="label-info">Stalls</p>
                               </div>
                           </div>
                           <!-- Item 5: Digital Reach -->
                           <div class="col feature-item border-0">
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
               </div>
           </div>
       </div>
   </section>

   <section id="metrics" class="metric p-lg-0">
       <div class="container">
           <h2 class="chp-two mb-lg-4 mb-3">What’s New in Chapter 2? </h2>
           <div class="row row-cols-2 row-cols-sm-4 row-cols-lg-8 g-3 justify-content-center text-center">
               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/broken.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">STARTUP<br>PAVILION</h5>
                   </div>
               </div>

               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/investor.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">Investor <br>
                           Connect Zone</h5>
                   </div>
               </div>

               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/innovation.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">Ai innovation <br> arena</h5>
                   </div>
               </div>

               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/founder.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">young Founder <br> Awards</h5>
                   </div>
               </div>

               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/battle.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">Live Startup<br>
                           Battles</h5>
                   </div>
               </div>
               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/women.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">Women <br> Entrepreneur Hub</h5>
                   </div>
               </div>

               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/home.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">Franchise <br> Zone</h5>
                   </div>
               </div>

               <div class="col">
                   <div class="metric-card">
                       <div class="metric-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/light.png') }}" class="stat-card-icon w-50">
                       </div>
                       <h5 class="stat-card-title">Future Skills <br> arena</h5>
                   </div>
               </div>
           </div>
           <div class="b-bottom"></div>
       </div>

   </section>
   <!--Impact-->
   <section id="impact" class="impact">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <h2 class="chp-two mb-lg-4 mb-3">YEF Chapter 1 Impacts</h2>

                   <div class="row">
                       <div class="col-lg-4 col-12 ">
                           <p class="highlights">Events Highlights</p>
                           <h2 class="highlights-main">Glimpses of <br class="hid-break"> <span>
                                   Young entrepreneur fest 2026 </span></h2>
                           <hr class="break">
                           <p class="moments">Moments that inspired, connections that grow, and ideas that turned into reality.</p>
                           <a href="https://www.youtube.com/watch?v=5WDNJFkgt_g" target="_blank" class="see-btn" data-bs-toggle="modal" data-bs-target="#videoModal">See Highlights</a>
                       </div>

                       <div class="col-lg-8 col-sm-12 col-12  p-3 p-lg-0 ">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/images.png')}}" class="img-fluid h-100 w-100">
                       </div>
                   </div>
               </div>
           </div>

           <div class="b-bottom"></div>
           <div class="row">
               <div class="col-12">
                   <div class="feature-box bg-white">
                       <div class="row text-start g-0 align-items-center">
                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/attandes.png') }}" class="img-fluid" alt="Attendees">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">30,000+</h2>
                                   <p class="label-info">Attendees</p>
                               </div>
                           </div>

                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/start.png') }}" class="img-fluid" alt="Startups">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">500+</h2>
                                   <p class="label-info">Startups</p>
                               </div>
                           </div>

                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/boy.png') }}" class="img-fluid" alt="Entrepreneurs">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">100+</h2>
                                   <p class="label-info">Entrepreneurs</p>
                               </div>
                           </div>
                           <div class="col feature-item">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/house.png') }}" class="img-fluid" alt="Stalls">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">100+</h2>
                                   <p class="label-info">Exhibitors</p>
                               </div>
                           </div>
                           <div class="col feature-item border-0">
                               <div class="icon-wrapper">
                                   <img src="{{ asset('young-entrepreneur-page/assets/images/people.png') }}" class="img-fluid" alt="Digital Reach">
                               </div>
                               <div class="text-wrapper">
                                   <h2 class="head-info">50M+</h2>
                                   <p class="label-info">Reach</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="b-bottom mt-lg-0"></div>
       </div>
   </section>
   <!--Impact-->

   <!-- who should attend -->
   <section id="attend" class="attend p-lg-0">
       <div class="container">
           <h2 class="chp-two mb-lg-4 mb-3">Who Should Attend? </h2>
           <div class="row row-cols-2 row-cols-sm-4 row-cols-lg-8 g-3 justify-content-center text-center">
               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/student.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Students & <br> Youth</h5>
               </div>


               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/idea.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Young <br>
                       Innovators</h5>
               </div>

               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/status.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Entrepreneurs <br> & Startups</h5>
               </div>

               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/grow.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Industry <br> Leaders</h5>
               </div>

               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/brand.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Brands & <br> Corporates</h5>
               </div>

               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/creators.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Influencers & <br>Creators</h5>
               </div>

               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/family.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Parents</h5>
               </div>

               <div class="col">
                   <div class="attend-card">
                       <div class="attend-card-icon-container">
                           <img src="{{ asset('young-entrepreneur-page/assets/images/success.png') }}" class="attend-card-icon">
                       </div>
                   </div>
                   <h5 class="attend-card-title mt-lg-4 mt-3">Educators & <br> Mentors </h5>
               </div>
           </div>
           <div class="b-bottom mt-lg-5"></div>
       </div>
   </section>

   <!-- Clients Section -->
   <section id="clients" class="clients">
       <div class="container">
           <h2 class="title-heading text-center mb-lg-0 ">
               Collaborations, Sponsors & Partners
           </h2>
           <div class="row mb-3">
               <div class="col-xl-12 col-12 mx-auto clients-slider-container">

                   <div class="swiper init-swiper">

                       <script type="application/json" class="swiper-config">
                           {
                               "loop": true,
                               "speed": 600,
                               "autoplay": {
                                   "delay": 3000,
                                   "disableOnInteraction": false
                               },
                               "navigation": {
                                   "nextEl": "#clients .swiper-button-next",
                                   "prevEl": "#clients .swiper-button-prev"
                               },
                               "breakpoints": {
                                   "320": {
                                       "slidesPerView": 2,
                                       "spaceBetween": 10
                                   },
                                   "576": {
                                       "slidesPerView": 3,
                                       "spaceBetween": 12
                                   },
                                   "768": {
                                       "slidesPerView": 4,
                                       "spaceBetween": 15
                                   },
                                   "992": {
                                       "slidesPerView": 6,
                                       "spaceBetween": 15
                                   }
                               }
                           }
                       </script>


                   </div>

                   <div class="swiper-button-prev"></div>
                   <div class="swiper-button-next"></div>

               </div>
           </div>
           <div class="row mx-auto text-center">
               <div class="col-12">
                   <a href="#" class="before-slider-see-btn text-center">View all Partners</a>
               </div>
           </div>
       </div>
   </section>
   <section id="awaits" class="awaits p-lg-0">
       <div class="container awaits-bg">
           <div class="row py-5 px-lg-4 px-0">
               <div class="col-lg-4 col-12 px-lg-0 px-3">
                   <p class="awaits-info">Chapter 2 Awaits You</p>
                   <h2 class="awaits-text">Ready to BE A PART OF Pakistan’s Largest entrepreneurship festival?</h2>
                   <p class="awaits-last-text mt-lg-3 mt-0">Reserve your stall or become a sponsor and grow with Pakistan’s largest entrepreneur platform.</p>
               </div>
               <div class="col-lg-8 col-12">
                   <div class="row">
                       <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                           <div class="ticket-bg">
                               <img src="{{asset('young-entrepreneur-page/assets/images/book.png')}}" class="img-fluid">
                               <div class="ticket-content">
                                   <h2 class="book-head mt-3">
                                       Book Your Stall
                                   </h2>
                                   <p book-info>
                                       Showcase your brand to 40,000+ attendees.
                                   </p>
                                   <a href="#)}}" class=" ticket-btn">
                                       Book Your Stall </a>

                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                           <div class="ticket-bg px-0">
                               <img src="{{asset('young-entrepreneur-page/assets/images/sponsor.png')}}" class="img-fluid">
                               <div class="ticket-content">
                                   <h2 class="book-head mt-3">
                                       Become A Sponsor
                                   </h2>
                                   <p book-info>
                                       Increase Visibility and build valuable connections </p>
                                   <a href="#" class="ticket-btn">
                                       Become A Sponsor </a>

                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-12 mb-lg-0 mb-0">
                           <div class="ticket-bg">
                               <img src="{{asset('young-entrepreneur-page/assets/images/get.png')}}" class="img-fluid">
                               <div class="ticket-content">
                                   <h2 class="book-head mt-3">
                                       Get Your Tickets
                                   </h2>
                                   <p book-info>
                                       Be part of the biggest entrepreneur event. </p>
                                   <a href="#') }}" class="ticket-btn">
                                       Get Tickets </a>

                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--Awaits-->

   <!-- Video Modal -->
   <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg">
           <div class="modal-content bg-transparent border-0">
               <div class="modal-body p-0 position-relative">
                   <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055;"></button>
                   <div class="ratio ratio-16x9">
                       <iframe id="youtubeVideo" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
               </div>
           </div>
       </div>
   </div>

   @push('scripts')
   <script>
       $(document).ready(function() {
           var videoSrc = "https://www.youtube.com/embed/5WDNJFkgt_g?autoplay=1";

           // Prevent default behavior to avoid navigation
           $('.see-btn[data-bs-target="#videoModal"]').on('click', function(e) {
               e.preventDefault();
           });

           $('#videoModal').on('show.bs.modal', function() {
               $('#youtubeVideo').attr('src', videoSrc);
           });

           $('#videoModal').on('hidden.bs.modal', function() {
               $('#youtubeVideo').attr('src', '');
           });
       });
   </script>
   @endpush
   @endsection