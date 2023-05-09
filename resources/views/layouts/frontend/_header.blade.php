<!doctype html>
<html lang="ar" dir='rtl'>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> شائك </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400&display=swap" rel="stylesheet">    
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
        <link href='{{asset("assets/css/owl.carousel.min.css") }}'  rel="stylesheet" /> 
        <link href='{{asset("assets/css/main.css") }}'  rel="stylesheet" /> 
           @stack('css')
    </head>
  <body>
    

  <header class='header'>
    <div class='container'>
        <div class='row align-items-center justify-content-between'>
            <div class='col-3'>
                <a href="{{route('index')}}" class='logo'>
                    @php $logo_url =  $setting['site_logo'] ?? '' ; @endphp
                    <img alt="Logo" src="{{$logo = asset('storage/uploads/setting') . '/' . $logo_url}}" class="h-45px h-lg-70px" />
                </a>
                {{-- <a href="#" class='logo'> 
                    <img  src="{{ asset('storage/uploads/setting' . '/' . $setting['site_logo'] ) ?? ''}}" > 
                     </a> --}}
                    <div class="menu py-3 menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                             @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <div class="menu-item px-3">
                            <a rel="alternate" hreflang="{{ $localeCode }}"class="menu-link d-flex px-5 active" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                         </div>
                        @endforeach    
                        </div>
                     
            </div>
         
                 
        
            <div class='col-6'>
                <nav class='menu text-center'>
                    <ul class='list-inline m-0'>
                        <li class="list-inline-item mx-0 mx-md-2"> <a href="{{ route('about') }}" class='text-white text-decoration-none'> {{  trans('home.about_us')  }}   </a> </li>
                        <li class="list-inline-item mx-0 mx-md-2"> <a href="{{route('product')}}" class='text-white text-decoration-none'> {{  trans('home.products')  }} </a> </li>
                        <li class="list-inline-item mx-0 mx-md-2"> <a href="{{ route('contact') }}" class='text-white text-decoration-none'>  {{  trans('home.contact_us')  }} </a> </li>
                    </ul>
                </nav>
            </div>
            <div class='col-3 text-end'>
                <a href="{{ route('loginn') }}" class='btn btn-outline-light rounded-pill d-inline-flex align-items-center'>  
                   <span class='me-1'>   {{  trans('home.login')  }}      </span> 
                    <svg width="16" height="18" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.00033 11.6667C13.5247 11.6667 17.2069 15.2723 17.3305 19.7668L17.3337 20H15.667C15.667 16.3181 12.6822 13.3334 9.00033 13.3334C5.3879 13.3334 2.44654 16.2066 2.33683 19.7924L2.33366 20H0.666992C0.666992 15.3977 4.39795 11.6667 9.00033 11.6667ZM9.00033 0.833374C11.7617 0.833374 14.0003 3.07195 14.0003 5.83337C14.0003 8.5948 11.7617 10.8334 9.00033 10.8334C6.2389 10.8334 4.00033 8.5948 4.00033 5.83337C4.00033 3.07195 6.2389 0.833374 9.00033 0.833374ZM9.00033 2.50004C7.15938 2.50004 5.66699 3.99242 5.66699 5.83337C5.66699 7.67432 7.15938 9.16671 9.00033 9.16671C10.8413 9.16671 12.3337 7.67432 12.3337 5.83337C12.3337 3.99242 10.8413 2.50004 9.00033 2.50004Z" fill="white"/> </svg>
                </a>
            </div>
        </div>
    </div>
  </header>
