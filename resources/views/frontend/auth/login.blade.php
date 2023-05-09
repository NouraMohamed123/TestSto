@extends('layouts.frontend.app')

@section('content')
<div class='page register pt-md-3 pt-0'>

    <div class="container mt-5 pt-5">
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                
                <div class="form-register rounded-3 shadow-sm p-3 border">
                    <img src="{{ asset('images/logo.svg') }}" class='img-fluid m-auto d-block' alt="">
                    <h1 class='text-center'> تسجيل الدخول </h1>
                     <form method="POST" action="{{ route('login') }}" class='mt-3'>
                        @csrf
                        <div class="mb-2">
                            <label for="" class='text-muted'> البريد الإلكتروني <span class='text-danger'>*</span></label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>  

                        <div class="">
                            <label for="" class='text-muted'> كلمة السر  <span class='text-danger'>*</span></label>
                            <div class="position-relative">
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <svg  class='position-absolute top-50 end-0 translate-middle-y me-2' width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M10 0.5C15.5228 0.5 18.3333 3.83333 20 8L19.8136 8.45112C18.1253 12.4047 15.322 15.5 10 15.5C4.47715 15.5 1.66667 12.1667 0 8C1.66667 3.83333 4.47715 0.5 10 0.5ZM10 2.16667C6.07857 2.16667 3.60889 4.0389 1.89531 7.80342L1.8075 8L1.89531 8.19658C3.56904 11.8735 5.96411 13.7452 9.72876 13.8303L10 13.8333C13.9214 13.8333 16.3911 11.9611 18.1047 8.19658L18.1917 8L18.1047 7.80342C16.431 4.12645 14.0359 2.25477 10.2712 2.1697L10 2.16667ZM10 3.83333C12.3012 3.83333 14.1667 5.69881 14.1667 8C14.1667 10.3012 12.3012 12.1667 10 12.1667C7.69881 12.1667 5.83333 10.3012 5.83333 8C5.83333 5.69881 7.69881 3.83333 10 3.83333ZM10 5.5C8.61929 5.5 7.5 6.61929 7.5 8C7.5 9.38071 8.61929 10.5 10 10.5C11.3807 10.5 12.5 9.38071 12.5 8C12.5 6.61929 11.3807 5.5 10 5.5Z" fill="#4A4A4A"/> </svg>
                            </div>
                        </div>    
                          @if (Route::has('password.request'))
                                    <a class="text-decoration-none text-muted" href="{{ route('password.request') }}">
                                        نسيت كلمة السر                   

                                    </a>
                                @endif
                       <button type="submit" class="btn bg-main text-white d-block w-100 btn-danger mt-3 btn-register">
                                   <svg class='me-2'  width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.86111 0.5C1.02225 0.5 0.39548 1.20419 0.337689 2.04033L0.333333 2.16667V13.8333C0.333333 14.6812 0.920161 15.4258 1.73692 15.4948L1.86111 15.5H8.80556C9.64441 15.5 10.2712 14.7958 10.329 13.9597L10.3333 13.8333V11.8095C10.3333 11.3493 9.96024 10.9762 9.5 10.9762C9.07264 10.9762 8.72041 11.2979 8.67227 11.7123L8.66667 11.8095V13.8333H2V2.16667H8.66667V4.19048C8.66667 4.65071 9.03976 5.02381 9.5 5.02381C9.92736 5.02381 10.2796 4.70211 10.3277 4.28766L10.3333 4.19048V2.16667C10.3333 1.31877 9.7465 0.574199 8.92975 0.50521L8.80556 0.5H1.86111ZM7.11905 5.61265C6.99258 5.61265 6.86838 5.64622 6.75914 5.70995L3.89102 7.38301C3.55027 7.58179 3.43517 8.01916 3.63394 8.35991C3.69603 8.46634 3.78459 8.5549 3.89102 8.61698L6.75914 10.2901C7.09989 10.4888 7.53726 10.3737 7.73603 10.033C7.79976 9.92374 7.83333 9.79954 7.83333 9.67307V8.83333H13.6667C14.1269 8.83333 14.5 8.46024 14.5 8C14.5 7.53976 14.1269 7.16667 13.6667 7.16667H7.83333V6.32693C7.83333 5.93244 7.51354 5.61265 7.11905 5.61265Z" fill="white"/> </svg>
                            تسجيل الدخول
                                </button>
                                        
                    </form>
                </div>
            </div>
        </div>        
    </div>

</div>


@endsection