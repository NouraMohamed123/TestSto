@extends('layouts.dashboard.app')

@section('content')


    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted">الاعدادات</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> الاعدادات العامة </li>
        </ol>
    </div>


    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">

            <form  action="{{ route('dashboard.settings.store')  }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                @include('dashboard.partials._errors')


                <div class="form-group mb-4">
                    <label for="generalName" class="form-label fw-bolder d-block text-capitalize"> اسم الموقع </label>
                    <input
                        id="generalName"
                        type="text"
                        name='site_name'
                        class="form-control form-control-solid @error('site_name') is-invalid @enderror"
                        value="{{ $setting['site_name'] ?? ''}}">
                </div>

                <div class="form-group mb-4">
                    <label for="generalDesc" class="form-label fw-bolder d-block text-capitalize"> وصف الموقع </label>
                    <textarea name="site_desc" class="form-control form-control-solid" id="generalDesc" cols="30" rows="10">   {{ $setting['site_desc'] ?? ''}}   </textarea>
                </div>

                <div class="row align-items-center mt-2 upload-img">
                    <div class="col-md-8">
                        <label for="formFile" class='d-block mb-1'> رفع شعار الموقع </label>
                        <input class="form-control" type="file" id="formFile" name="site_logo">
                    </div>
                    <div class="col-md-4 align-self-center">
                        @php
                            if(isset($setting['site_logo']))
                                $logo = asset('storage/uploads/setting') . '/' . $setting['site_logo'];
                        @endphp

                        <img src="{{ $logo  ??  asset('cp_files/assets/media/blank.svg')}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                    </div>
                </div>


                <div class="text-end">
                    <button  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                </div>

            </form>


        </div>
    </div>
@endsection
