@extends('layouts.frontend.app')
@push('css')

@endpush

@section('content')
  <section class="hero bg-main py-5 text-center position-relative">
    <div class='container position-relative'>
        <h1 class='text-white mb-3 mb-md-5 pt-md-5 pt-1'>  {{$setting['site_name'] ?? ''}}</h1>
        <div class='row justify-content-center pb-2 pb-mt-5'>
            <div class='col-md-6 text-white'>
                <p>
                    {{$setting['site_desc'] ?? ''}}
                </p>            
            </div>

        </div>
        <div class='text-center mt-md-4 mb-4 mb-md-0 mt-1'>
            <a href="#" class="btn btn-light rounded-pill d-inline-flex align-items-center text-main"> 
                 <span class='me-2'> {{  trans('home.download')  }} </span>
                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M11 11.8333C11.4602 11.8333 11.8333 12.2064 11.8333 12.6666C11.8333 13.1269 11.4602 13.5 11 13.5H0.999997C0.53976 13.5 0.166664 13.1269 0.166664 12.6666C0.166664 12.2064 0.53976 11.8333 0.999997 11.8333H11ZM6 0.166626C6.46023 0.166626 6.83333 0.539722 6.83333 0.999959V5.99996H7.67307C8.06756 5.99996 8.38735 6.31976 8.38735 6.71424C8.38735 6.84071 8.35377 6.96491 8.29005 7.07415L6.61698 9.94227C6.41821 10.283 5.98084 10.3981 5.64009 10.1993C5.53366 10.1373 5.4451 10.0487 5.38301 9.94227L3.70994 7.07415C3.51117 6.7334 3.62627 6.29603 3.96702 6.09726C4.07626 6.03354 4.20046 5.99996 4.32693 5.99996H5.16666V0.999959C5.16666 0.539722 5.53976 0.166626 6 0.166626Z" fill="#4A4A4A"/> </svg>
            </a>
        </div>   
    </div>
    <div class="hero-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"></path>
        </svg>
    </div>      
  </section>
    <div class="adhd-top-video">
        <div class="adhd-top-video2">
            <iframe width="500" height="280" src="https://www.youtube.com/embed/4r3XWj269_g?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>  
    
    
    <section class='what-we-do mt-5 pt-2 pt-md-5 position-relative'>
        <div class='container'>
            <div class='heading text-center mt-5 pt-5 mb-5 pb-4'>
                <span class='d-block mb-2'>   {{  trans('home.tittle_advantage1')  }}  </span>
                <h2 class='text-main mb-2'>   {{  trans('home.tittle_advantage2')  }}  </h2>
                <p>  {{  trans('home.desc_advantage')  }}  </p>
            </div>
        </div>
        <div class='owl-carousel'>
            @foreach($advantages as $advantage)
            <div class="item">
                <div class='box rounded-3 border p-3 bg-white'>
                      <img src="{{ asset('storage/uploads/advantages' .'/' . $advantage->avatar )}}" alt="" class='w-auto img-fluid mb-3'>
                    <h3 class='mb-3'> {{$advantage->name}}    </h3>
                    <p>
                        {{$advantage->desc}} 
                    </p>
                </div>
            </div>
               @endforeach                       
        </div>
        
    </section>

    <section class='py-4 section-images position-relative'>
        <div class="container">
            <div class='heading text-center mt-5 pt-0 pt-md-5 mb-3'>
                <svg width="102" height="8" viewBox="0 0 102 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M101 7L79.734 1.89615C77.2795 1.30708 74.7205 1.30708 72.266 1.89615L54.734 6.10385C52.2795 6.69292 49.7205 6.69292 47.266 6.10385L29.734 1.89615C27.2795 1.30708 24.7205 1.30708 22.266 1.89615L1 7" stroke="url(#paint0_linear_22_1204)" stroke-width="2" stroke-linejoin="round"/> <defs> <linearGradient id="paint0_linear_22_1204" x1="0.999999" y1="0.625088" x2="101" y2="0.625073" gradientUnits="userSpaceOnUse"> <stop stop-color="white" stop-opacity="0"/> <stop offset="0.5" stop-color="#FF4747"/> <stop offset="1" stop-color="white" stop-opacity="0"/> </linearGradient> </defs> </svg>
                <span class='d-block mb-2 mt-3'>    {{  trans('home.tittle_gallary1')  }}   </span>
                <h2 class='text-main mb-3'>   {{  trans('home.tittle_gallary2')  }}</h2>
                <p>
                      {{  trans('home.desc_advantage1')  }}
                <br>
                 {{  trans('home.desc_advantage2')  }}
                </p>
            </div>            
        </div>

        <div class="owl-carousel mt-0">
            @foreach ($gallaries as $gallary)
                 <div class="item">
                <img  src="{{ asset('storage/uploads/gallaries' . '/' . $gallary->avatar )}}"  alt="" class='img-fluid'>
               </div>
            @endforeach  
        </div>       
        <div class='img-lap'> <img src='{{ asset("assets/images/labtop_1.png") }}'/> </div>
    </section>

    <section class='testimonials pb-5 mb-4'>
        <div class="container">
            <div class='heading text-center mt-5 pt-md-5 pt-0 mb-5'>
                <svg width="102" height="8" viewBox="0 0 102 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M101 7L79.734 1.89615C77.2795 1.30708 74.7205 1.30708 72.266 1.89615L54.734 6.10385C52.2795 6.69292 49.7205 6.69292 47.266 6.10385L29.734 1.89615C27.2795 1.30708 24.7205 1.30708 22.266 1.89615L1 7" stroke="url(#paint0_linear_22_1204)" stroke-width="2" stroke-linejoin="round"/> <defs> <linearGradient id="paint0_linear_22_1204" x1="0.999999" y1="0.625088" x2="101" y2="0.625073" gradientUnits="userSpaceOnUse"> <stop stop-color="white" stop-opacity="0"/> <stop offset="0.5" stop-color="#FF4747"/> <stop offset="1" stop-color="white" stop-opacity="0"/> </linearGradient> </defs> </svg>
                <span class='d-block mb-2 mt-3'>   نص صغير  </span>
                <h2 class=' mb-3'>  <span class='text-main'> ماذا قالوا عن </span> البرنامج <span class='text-main'> ؟ </span> </h2>
                <p>
                اجمع التكنولوجيا الفريدة بشكل شامل بعد النقرات واستراتيجيات نمو الملاط
                <br>
                . التعجيل بمصداقية العلاقات الخالية من الاحتكاك بعد الثورية.
                </p>
            </div>            
        </div>
        <div class="owl-carousel">
            @foreach( $testimonials  as  $testimonial ):
            <div class="item">
                <div class="box p-4 border rounded-3 text-center shadow-sm">
                        <img src="{{ asset('storage/uploads/testimonial' . '/' . $testimonial->img )}}" alt="" class='img-fluid w-auto m-auto mb-3'>
                    <p>
                       {{ $testimonial->desc }}
                    </p>
                    <h5 class='mb-0'>{{  $testimonial->name}}</h5>
                    <span class='text-muted'>{{   $testimonial->job }}</span>
                </div>
            </div>
           @endforeach                                    
        </div>
    </section>


    <div class="download-now position-relative pt-3 mt-5 pb-3">
        <div class='heading text-center mt-3 pt-5 mb-md-5 mb-0'>
            <span class='d-block mb-2 mt-3'>   نص صغير  </span>
            <h2 class=' mb-3 fw-bold'> قُم بتنزيل التطبيق </h2>
            <p>
            اجمع التكنولوجيا الفريدة بشكل شامل بعد النقرات واستراتيجيات نمو الملاط
            <br>
            . التعجيل بمصداقية العلاقات الخالية من الاحتكاك بعد الثورية.
            </p>
            <div class='text-center mt-md-5 mt-1 pt-4 pt-md-0'>
                <a href="#" class="btn btn-danger bg-main rounded-pill d-inline-flex align-items-center position-relative px-4 py-2"> 
                    <span class='me-2'>  حمل التطبيق الأن  </span>
                    <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M11 12.3334C11.4602 12.3334 11.8333 12.7065 11.8333 13.1667C11.8333 13.627 11.4602 14.0001 11 14.0001H0.999997C0.53976 14.0001 0.166664 13.627 0.166664 13.1667C0.166664 12.7065 0.53976 12.3334 0.999997 12.3334H11ZM6 0.666748C6.46023 0.666748 6.83333 1.03984 6.83333 1.50008V6.50008H7.67307C8.06756 6.50008 8.38735 6.81988 8.38735 7.21437C8.38735 7.34083 8.35377 7.46504 8.29005 7.57428L6.61698 10.4424C6.41821 10.7831 5.98084 10.8982 5.64009 10.6995C5.53366 10.6374 5.4451 10.5488 5.38301 10.4424L3.70994 7.57428C3.51117 7.23352 3.62627 6.79615 3.96702 6.59738C4.07626 6.53366 4.20046 6.50008 4.32693 6.50008H5.16666V1.50008C5.16666 1.03984 5.53976 0.666748 6 0.666748Z" fill="white"/> </svg>                    
                 </a>
            </div>            
        </div>   

    </div>

@endsection