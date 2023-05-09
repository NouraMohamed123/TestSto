@extends('layouts.dashboard.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.products.index') }}" class="pe-3 text-muted">الاعضاء</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> التعديل  </li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">

            <form action="{{ route('dashboard.products.update', $product->id)  }}" method="post">
                @csrf
                @method('put')
                @include('dashboard.partials._errors')


                <div class="row">
                    <div class="form-group mb-4 col-md-6">
                        <label for="roleName" class="form-label fw-bolder d-block">اسم المنتج بالعربية</label>
                        <input type="text" name='name' value="{{ $product->getTranslation('name','ar')}}" id="roleName" class="form-control form-control-solid" value="{{ old('name') }}">
                    </div>  
                    <div class="form-group mb-4 col-md-6">
                        <label for="roleName" class="form-label fw-bolder d-block">اسم المنتج بالانجليزيه</label>
                        <input type="text" name='name_en' value="{{ $product->getTranslation('name','en')}}" id="roleName" class="form-control form-control-solid" value="{{ old('name') }}">
                    </div>                                    
               </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف المختصر بالعربية </label>
                        <textarea name="desc" id="desc"  cols="30" rows="3" class="form-control form-control-solid">{{ $product->getTranslation('desc','ar')}}</textarea>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف المختصر بالانجليزيه </label>
                        <textarea name="desc_en" id="desc_en"  cols="30" rows="3" class="form-control form-control-solid">{{ $product->getTranslation('desc','en')}}</textarea>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف الكامل بالعربية </label>
                        <textarea name="descLong"  id="" cols="30" rows="4" class="form-control form-control-solid">{{ $product->getTranslation('descLong','ar')}}</textarea>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الوصف الكامل بالانجليزيه </label>
                        <textarea name="descLong_en" id="" cols="30" rows="4" class="form-control form-control-solid">{{ $product->getTranslation('descLong','en')}}</textarea>
                    </div>                    
                </div>   
                
                <div class="row">
                    
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الانظمة المتوفر لها بالعربية </label>
                        <input class="form-control" name="tags" value="{{$product->tags->pluck('name')->implode(',')}}"  id="kt_tagify_1"/>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block"> الانظمة المتوفر لها بالانجليزيه </label>
                        <input class="form-control" name="tags_en"  value="{{$product->tags->pluck('name')->implode(',')}}" id="kt_tagify_2"/>
                    </div> 
                              
                </div>        
   
                <!--begin::Repeater-->
                <br>
                <label for="roleName" class="form-label fw-bolder d-block mt-3"> مميزات المنتج </label>
               
                <div id="kt_docs_repeater_basic" class="repeater">
                    <!--begin::Form group-->
                
                    <div class="form-group">
                   
                        <div data-repeater-list="kt_docs_repeater_basic">
                          @foreach($product->advantages as $index=>$item)
                            <div data-repeater-item>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <input type="text" name="advantage" value="{{$item->getTranslation('advantage','ar')}}" class="form-control mb-1" placeholder="العنوان بالعربي" />
                                            <input type="text"  name="advantage_en"  value="{{$item->getTranslation('advantage','en')}}"  class="form-control mb-1" placeholder="العنوان بالانجليزي" />
                                        </div>
                                        <div class="col-md-3">
                                            <textarea type="text"  name="desc_advantage"   rows="3" class="form-control mb-2 mb-md-0" placeholder="الوصف بالعربي">{{$item->getTranslation('desc_advantage','ar')}}</textarea>
                                        </div>
                                        <div class="col-md-3">
                                            <textarea type="text"  name="desc_advantage_en"  rows="3" class="form-control mb-2 mb-md-0" placeholder="الوصف بالانجليزي">{{$item->getTranslation('desc_advantage','en')}}</textarea>
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
                           
                         
                       @endforeach  
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
                        <label for="roleName" class="form-label fw-bolder d-block"> السعر </label>
                        <input type="number" id="price_new" name="price_new"  value="{{$product->price_new}}"  class="form-control form-control-solid" value="{{ old('price_new') }}" required>
                    </div>                                    
               </div>
               <div class="mt-6">
                <div class="form-group mb-4">
                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                </div>   

                <div class="form-group md-4 align-self-center">
                        {{-- @php
                            if(isset($product->avatar))
                                $product = asset('storage/uploads/products') . '/' . $product->avatar;
                        @endphp

                        <img src="{{ $product  }}" class=' border rounded w-80px h-80px' style='object-fit: contain'> --}}
                        <img src="{{asset('storage/uploads/products'.'/'. $product->avatar )}}"  alt="" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                                              
                    </div>
              
                <div class="form-group text-end">
                    <button class="btn btn-primary">  حفظ  </button>
                </div>
            </form>

        </div>
    </div>


@endsection
