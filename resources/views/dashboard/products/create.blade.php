@extends('layouts.dashboard.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.products.index')  }}" class="pe-3 text-muted">المنتجات</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> اضافة جديد </li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">
            <form action="{{ route('dashboard.products.store')  }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('post')
                @include('dashboard.partials._errors')
               <div class="row">
                    <div class="form-group mb-4 col-md-6">
                        <label for="roleName" class="form-label fw-bolder d-block">اسم المنتج بالعربية</label>
                        <input type="text" name='name' id="roleName" class="form-control form-control-solid" value="{{ old('name') }}" required>
                    </div>  
                    <div class="form-group mb-4 col-md-6">
                        <label for="roleName" class="form-label fw-bolder d-block">اسم المنتج بالانجليزيه</label>
                        <input type="text" name='name_en' id="roleName" class="form-control form-control-solid" value="{{ old('name') }}" required>
                    </div>                                    
               </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف المختصر بالعربية </label>
                        <textarea name="desc" id="desc" cols="30" rows="3" class="form-control form-control-solid"></textarea>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف المختصر بالانجليزيه </label>
                        <textarea name="desc_en" id="desc_en" cols="30" rows="3" class="form-control form-control-solid"></textarea>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف الكامل بالعربية </label>
                        <textarea name="descLong" id="" cols="30" rows="4" class="form-control form-control-solid"></textarea>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف الكامل بالانجليزيه </label>
                        <textarea name="descLong_en" id="" cols="30" rows="4" class="form-control form-control-solid"></textarea>
                    </div>                    
                </div>   
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الانظمة المتوفر لها بالعربية </label>
                        <input class="form-control" name="tags" value="وينذوز, ماك, tag3" id="kt_tagify_1"/>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الانظمة المتوفر لها بالانجليزيه </label>
                        <input class="form-control" name="tags_en" value="windows, mac, tag3" id="kt_tagify_2"/>
                    </div>                    
                </div>        

                <!--begin::Repeater-->
                <br>
                <label for="roleName" class="form-label fw-bolder d-block mt-3"> مميزات المنتج </label>
                <div id="kt_docs_repeater_basic" class="repeater">
                    <!--begin::Form group-->
                    <div class="form-group">
                        <div data-repeater-list="kt_docs_repeater_basic">
                            <div data-repeater-item>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <input type="text" name="advantage" class="form-control mb-1" placeholder="العنوان بالعربي" />
                                        <input type="text"  name="advantage_en"  class="form-control mb-1" placeholder="العنوان بالانجليزي" />
                                    </div>
                                    <div class="col-md-3">
                                        <textarea type="text"  name="desc_advantage" rows="3" class="form-control mb-2 mb-md-0" placeholder="الوصف بالعربي"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <textarea type="text"  name="desc_advantage_en" rows="3" class="form-control mb-2 mb-md-0" placeholder="الوصف بالانجليزي"></textarea>
                                    </div>                                    
                                    
                                    <div class="col-md-3">
                                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                            <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            حذف
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->

                    <!--begin::Form group-->
                    <div class="form-group mt-5">
                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                            <i class="ki-duotone ki-plus fs-3"></i>
                            اضف ميزه جديده
                        </a>
                    </div>
                    <!--end::Form group-->
                </div>
                <!--end::Repeater-->
                <div class="mt-6">
                    <div class="form-group mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> السعر</label>
                        <input type="number" id="price" name="price"  class="form-control form-control-solid" value="{{ old('price') }}" required>
                    </div>                                    
               </div>

                {{-- <div class="mt-6">
                    <div class="form-group mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> كوبون الخصم </label>
                        <input type="text" name='code' id="couponCode" class="form-control form-control-solid" value="{{ old('name') }}">
                    </div>  
                                                  
               </div>
                <div class="error-message"></div>   
                <button id="checkCoupon" type="button" class="btn btn-primary">تطبيق الخصم</button> --}}
                
                <!--end::Image input placeholder-->
                <label for="roleName" class="form-label fw-bolder d-block mt-3"> صوره المنتج </label>
                <!--begin::Image input-->
                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('cp_files/assets/media/blank.svg')  }})">
                    <!--begin::Image preview wrapper-->
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('cp_files/assets/media/blank.svg') }})"></div>
                    <!--end::Image preview wrapper-->
                    <!--begin::Edit button-->
                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="change"
                        data-bs-toggle="tooltip"
                        data-bs-dismiss="click"
                        title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"><span class="path1"></span><span class="path2"></span></i>
                        <!--begin::Inputs-->
                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                        {{-- <input type="hidden" name="avatar_remove" /> --}}
                        <!--end::Inputs-->
                    </label>
                    <!--end::Edit button-->
                    <!--begin::Cancel button-->
                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="cancel"
                        data-bs-toggle="tooltip"
                        data-bs-dismiss="click"
                        title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Cancel button-->
                    <!--begin::Remove button-->
                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="remove"
                        data-bs-toggle="tooltip"
                        data-bs-dismiss="click"
                        title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Remove button-->
                </div>
                <!--end::Image input-->               


                <div class="text-end">
                    <button  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                </div>
            </form>
        </div>
    </div>


@endsection

@push('js')
    <script>
    </script>
@endpush