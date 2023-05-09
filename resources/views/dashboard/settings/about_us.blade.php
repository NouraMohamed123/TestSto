@extends('layouts.dashboard.app')

@section('content')


    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted">الاعدادات</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> النبذة التعريفية </li>
        </ol>
    </div>


    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">

            <form  action="{{ route('dashboard.settings.store')  }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                @include('dashboard.partials._errors')

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="about-ar" data-bs-toggle="tab" data-bs-target="#about_ar" type="button" role="tab" aria-controls="home" aria-selected="true"> المحتوى بالعربية  </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-en" data-bs-toggle="tab" data-bs-target="#about_en" type="button" role="tab" aria-controls="profile" aria-selected="false">   المحتوى بالانجليزية </button>
                    </li>
                 </ul>
                <div class="tab-content pt-4" id="myTabContent">
                    <div class="tab-pane fade show active" id="about_ar" role="tabpanel" aria-labelledby="about-ar">
                        <div class="form-group mb-4">
                            <label for="generalName" class="form-label fw-bolder d-block text-capitalize"> عنوان بالعربية </label>
                            <input
                                id="generalName"
                                type="text"
                                name='about_title_ar'
                                class="form-control form-control-solid @error('about_title_ar') is-invalid @enderror"
                                value="{{ $setting['about_title_ar'] ?? ''}}" placeholder="عن الشركة">
                        </div>

                        <div class="form-group mb-4">
                            <label for="about_content_ar" class="form-label fw-bolder d-block text-capitalize">  المحتوى بالعربية </label>
                            <textarea name="about_content_ar" class="form-control form-control-solid" id="about_content_ar" cols="30" rows="10">   {{ $setting['about_content_ar'] ?? ''}}   </textarea>
                        </div>
                         <div class="form-group mb-4">
                            <label for="about_content_ar" class="form-label fw-bolder d-block text-capitalize">  المحتوى بالعربية </label>
                            <input type="file" name="avatar"   id="avatar"  accept=".png, .jpg, .jpeg" /> 
                        </div>
                        <div class="form-group md-4 align-self-center">
                        @php
                            if(isset($setting['avatar']))
                                $logo = asset('storage/uploads/abouts') . '/' . $setting['avatar'];
                        @endphp

                        <img src="{{ $logo  ??  asset('assets/images/about_img.jpg')}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                         </div>

                        <div class="text-end">
                            <button  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="about_en" role="tabpanel" aria-labelledby="profile-en">
                        <div class="form-group mb-4">
                            <label for="generalName" class="form-label fw-bolder d-block text-capitalize"> عنوان بالانجليزية </label>
                            <input
                                id="generalName"
                                type="text"
                                name='about_title_en'
                                class="form-control form-control-solid @error('about_title_ar') is-invalid @enderror"
                                value="{{ $setting['about_title_en'] ?? ''}}" placeholder="about us">
                        </div>
                        <div class="form-group mb-4">
                            <label for="about_content_en" class="form-label fw-bolder d-block text-capitalize"> المحتوى بالانجليزية </label>
                            <textarea name="about_content_en" class="form-control form-control-solid" id="about_content_en" cols="30" rows="10">   {{ $setting['about_content_en'] ?? ''}}   </textarea>
                        </div>
                      

                        <div class="text-end">
                            <button  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                        </div>

                    </div>


                </div>







            </form>


        </div>
    </div>
@endsection
