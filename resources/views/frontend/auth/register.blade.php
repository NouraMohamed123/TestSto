@extends('layouts.frontend.app')

@section('content')

<div class='page register pt-md-3 pt-0'>

    <div class="container mt-5 pt-5">
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                <div class="form-register rounded-3 shadow-sm p-3 border">
                    <img src="assets/images/logo.svg" class='img-fluid m-auto d-block' alt="">
                    <h1 class='text-center'> إنشاء حساب </h1>

                    <form action="" class='mt-3'>
                        <div class="mb-2">
                            <label for="" class='text-muted'> اسم المستخدم  <span class='text-danger'>*</span> </label>
                            <input type="text" class='form-control' >
                        </div>  
                        <div class="mb-2">
                            <label for="" class='text-muted'> البريد الإلكتروني <span class='text-danger'>*</span></label>
                            <input type="email" class='form-control' >
                        </div>  

                        <div class="mb-2">
                            <label for="" class='text-muted'> كلمة السر  <span class='text-danger'>*</span></label>
                            <div class="position-relative">
                                <input type="password" class='form-control' >
                                <svg  class='position-absolute top-50 end-0 translate-middle-y me-2' width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M10 0.5C15.5228 0.5 18.3333 3.83333 20 8L19.8136 8.45112C18.1253 12.4047 15.322 15.5 10 15.5C4.47715 15.5 1.66667 12.1667 0 8C1.66667 3.83333 4.47715 0.5 10 0.5ZM10 2.16667C6.07857 2.16667 3.60889 4.0389 1.89531 7.80342L1.8075 8L1.89531 8.19658C3.56904 11.8735 5.96411 13.7452 9.72876 13.8303L10 13.8333C13.9214 13.8333 16.3911 11.9611 18.1047 8.19658L18.1917 8L18.1047 7.80342C16.431 4.12645 14.0359 2.25477 10.2712 2.1697L10 2.16667ZM10 3.83333C12.3012 3.83333 14.1667 5.69881 14.1667 8C14.1667 10.3012 12.3012 12.1667 10 12.1667C7.69881 12.1667 5.83333 10.3012 5.83333 8C5.83333 5.69881 7.69881 3.83333 10 3.83333ZM10 5.5C8.61929 5.5 7.5 6.61929 7.5 8C7.5 9.38071 8.61929 10.5 10 10.5C11.3807 10.5 12.5 9.38071 12.5 8C12.5 6.61929 11.3807 5.5 10 5.5Z" fill="#4A4A4A"/> </svg>
                            </div>
                        </div>    
                        
                        <div class="mb-2">
                            <label for="" class='text-muted'> تأكيد كلمة السر  <span class='text-danger'>*</span></label>
                            <div class="position-relative">
                                <input type="password" class='form-control' >
                                <svg  class='position-absolute top-50 end-0 translate-middle-y me-2' width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M10 0.5C15.5228 0.5 18.3333 3.83333 20 8L19.8136 8.45112C18.1253 12.4047 15.322 15.5 10 15.5C4.47715 15.5 1.66667 12.1667 0 8C1.66667 3.83333 4.47715 0.5 10 0.5ZM10 2.16667C6.07857 2.16667 3.60889 4.0389 1.89531 7.80342L1.8075 8L1.89531 8.19658C3.56904 11.8735 5.96411 13.7452 9.72876 13.8303L10 13.8333C13.9214 13.8333 16.3911 11.9611 18.1047 8.19658L18.1917 8L18.1047 7.80342C16.431 4.12645 14.0359 2.25477 10.2712 2.1697L10 2.16667ZM10 3.83333C12.3012 3.83333 14.1667 5.69881 14.1667 8C14.1667 10.3012 12.3012 12.1667 10 12.1667C7.69881 12.1667 5.83333 10.3012 5.83333 8C5.83333 5.69881 7.69881 3.83333 10 3.83333ZM10 5.5C8.61929 5.5 7.5 6.61929 7.5 8C7.5 9.38071 8.61929 10.5 10 10.5C11.3807 10.5 12.5 9.38071 12.5 8C12.5 6.61929 11.3807 5.5 10 5.5Z" fill="#4A4A4A"/> </svg>
                            </div>
                        </div>                            
                        
                        <button class='btn bg-main text-white d-block w-100 btn-danger mt-3 btn-register'> 
                            <svg class='me-2' width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.99984 11.6667C13.5242 11.6667 17.2064 15.2723 17.33 19.7668L17.3332 20H15.6665C15.6665 16.3181 12.6817 13.3334 8.99984 13.3334C5.38741 13.3334 2.44605 16.2066 2.33634 19.7924L2.33317 20H0.666504C0.666504 15.3977 4.39746 11.6667 8.99984 11.6667ZM8.99984 0.833374C11.7613 0.833374 13.9998 3.07195 13.9998 5.83337C13.9998 8.5948 11.7613 10.8334 8.99984 10.8334C6.23841 10.8334 3.99984 8.5948 3.99984 5.83337C3.99984 3.07195 6.23841 0.833374 8.99984 0.833374ZM8.99984 2.50004C7.15889 2.50004 5.6665 3.99242 5.6665 5.83337C5.6665 7.67432 7.15889 9.16671 8.99984 9.16671C10.8408 9.16671 12.3332 7.67432 12.3332 5.83337C12.3332 3.99242 10.8408 2.50004 8.99984 2.50004Z" fill="white"/> </svg>
                            إنشاء حساب جديد
                        </button>

                        <div class="data mt-2 text-center">
                            من خلال إنشاء حساب ، فإنك توافق على
                            <a href="#" class='text-decoration-none text-main'>  اتفاقية المستخدم </a>  
                            الخاصة بنا وتقر بقراءة
                            <a href="#" class='text-decoration-none text-main'>  إشعار خصوصية المستخدم </a>
                            الخاص بنا.                          
                        </div>                        
                    </form>
                </div>
            </div>
        </div>        
    </div>

</div>

@endsection