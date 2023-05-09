@extends('layouts.frontend.app')

@section('content')
<div class='page contact-us pt-md-3 pt-0'>

    <div class="container mt-5 pt-5">
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                <div class="form-contact rounded-3 shadow-sm p-3 border">
                    <h1 class='text-center'> إتصل بنا </h1>
                    <p class='text-center'>
                    إذا كنت أحد عملائنا ومستخدمي البرنامج وتحتاج إلى دعم،
                    <br>                
                     تفضل وأخبرنا قليلاََ عن نفسك وكيف يمكننا المساعدة
                    </p>


                    <form action="{{ route('dashboard.contacts.store') }}" method="POST" class='mt-3'>
                        @csrf
                        <div class="mb-2">
                            <label for="" class='text-muted'> كيف يمكننا مساعدتك؟ </label>
                            <select name="contact_type" id="" class='form-control form-select'>
                                <option value="question"> إستفسار </option>
                                <option value="complain"> شكوى </option>
                                <option value="suggestion"> اقتراح </option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="" class='text-muted'> الاسم الكريم </label>
                            <input type="text" name="name" class='form-control' >
                        </div>  
                        <div class="mb-2">
                            <label for="" class='text-muted'> البريد الإلكتروني </label>
                            <input type="email" name="email" class='form-control' >
                        </div>  
                        <div class="mb-2">
                            <label for="" class='text-muted'> ملاحظات </label>
                            <textarea name="body" id="" cols="30" rows="5"  class='form-control' placeholder='من فضلك قل لنا كيف يمكن أن نساعدك؟'></textarea>
                        </div>
                        
                        <button type="submit" class='btn bg-main text-white d-block w-100 btn-danger mt-3 btn-register'> إرسال </button>
                    </form>
                </div>
            </div>
        </div>        
    </div>

</div>

@endsection