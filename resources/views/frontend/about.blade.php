@extends('layouts.frontend.app')

@section('content')

<div class='page about-us py-md-5 py-0'>

    <div class="container mt-5 pt-5">
        <div class='row align-items-center'>
           <div class="col-md-7">
                <h1>{{ $setting['about_title_ar'] ?? ''}}</h1>
                <p>
                  {{ $setting['about_content_ar'] ?? ''}}
                </p>
           </div>
           <div class="col-md-5">
               <div class="img position-relative">
                    <img src="{{ asset('storage/uploads/abouts' . '/' . $setting['avatar']  )}}"  alt="" class='img-fluid rounded'>
               </div>
           </div>
        </div>        
    </div>

</div>

@endsection