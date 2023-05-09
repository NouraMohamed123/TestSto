@extends('layouts.frontend.app')

@section('content')
<div class='page register pt-md-3 pt-0'>

    <div class="container mt-5 pt-5">
        <h1 class='h2 mb-2'>إعدادات الحساب</h1>
        <div class="form-register rounded-3 shadow-sm p-3 border">
            <h4> تعديل بيانات الحساب</h4>

            <div class="alert alert-success alert-dismissible fade show shadow-sm my-2 p-2" role="alert">
                لقد تم حفظ التغييرات بنجاح
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>            


            <form action="" class='mt-3'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label for="" class='text-muted'>  البريد الإلكتروني  <span class='text-danger'>*</span> </label>
                            <input type="email" class='form-control' >
                        </div>   
                    </div>
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label for="" class='text-muted'>   إسم المستخدم  <span class='text-danger'>*</span> </label>
                            <input type="email" class='form-control' >
                        </div>   
                    </div>                    
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
                

                
                <div class="text-end">
                    <button class='btn-outline-danger btn text-main'> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M16.5001 0.666626C16.9603 0.666626 17.3334 1.03972 17.3334 1.49996V16.5C17.3334 16.9602 16.9603 17.3333 16.5001 17.3333H1.50008C1.03984 17.3333 0.666748 16.9602 0.666748 16.5V6.0118C0.666748 5.79079 0.754545 5.57883 0.910826 5.42255L5.42267 0.910704C5.57895 0.754423 5.79091 0.666626 6.01193 0.666626H16.5001ZM15.6667 2.33329H14.0001V5.66663C14.0001 6.12686 13.627 6.49996 13.1667 6.49996H6.50008C6.03984 6.49996 5.66675 6.12686 5.66675 5.66663V3.02246L2.33341 6.35663V15.6666H3.16675V9.83329C3.16675 9.37306 3.53984 8.99996 4.00008 8.99996H14.0001C14.4603 8.99996 14.8334 9.37306 14.8334 9.83329V15.6666H15.6667V2.33329ZM13.1667 10.6666H4.83341V15.6666H13.1667V10.6666ZM12.3334 2.33329H7.33342V4.83329H12.3334V2.33329Z" fill="#C00000"/> </svg> حفظ التعديلات </button>
                </div>
            </form>

            <div class="p-2 border-top my-3"></div>
            <div class='row align-items-center'>
                <div class='col-md-8'>
                    <h5 class='mb-1'>حذف الحساب</h5>
                    <p>بحذف حسابك ، ستفقد كل وصولك إلى حسابك و الإشتراكات التي قمت بإنشائها</p>
                </div>
                <div class='col-md-4 text-md-end text-center'>
                    <button class='btn bg-main text-white btn-danger'> 
                    <svg class='me-2' width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.35962 1.25403L10.6404 10.5348L1.35962 1.25403ZM9.97748 0.591116C10.3436 0.224999 10.9372 0.224999 11.3033 0.591116C11.6694 0.957232 11.6694 1.55082 11.3033 1.91694L7.32545 5.89403L11.3033 9.87189C11.6694 10.238 11.6694 10.8316 11.3033 11.1977C10.9372 11.5638 10.3436 11.5638 9.97748 11.1977L5.99962 7.21986L2.02253 11.1977C1.68257 11.5377 1.14646 11.562 0.778476 11.2706L0.696707 11.1977C0.33059 10.8316 0.33059 10.238 0.696707 9.87189L4.67379 5.89403L0.696707 1.91694C0.33059 1.55082 0.33059 0.957232 0.696707 0.591116C1.06282 0.224999 1.65642 0.224999 2.02253 0.591116L5.99962 4.56819L9.97748 0.591116Z" fill="white"/> </svg>
                         تعطيل الحساب نهائياُ
                    </button>
                </div>
            </div>
        </div>       
    </div>

</div>
@endsection