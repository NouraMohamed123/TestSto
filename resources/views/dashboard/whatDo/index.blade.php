@extends('layouts.dashboard.app')

@section('content')

<div class="d-flex align-items-center justify-content-between mb-3">
    <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
        <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted">الاعدادات</a></li>
        <li class="breadcrumb-item pe-3 text-primary">الأسئة الشائعة</li>
    </ol>
    <div class="d-flex">
        <form action="" class="d-flex">
            <input type="text" autofocus name="search" id="search" placeholder="البحث ..." class="form-control" value="{{ request()->search  }}">
            <button class="btn btn-bg-secondary mx-2"> البحث </button>
        </form>
        @if(auth()->user()->hasPermission('faqs_create'))
            <a 
                href=""
                class="add_modal btn btn-primary"
                data-bs-toggle="modal" 
                data-bs-target="#exampleModal"
                data-add-text="إضافة ميزه  جديد"
                data-btn-text="حفظ"   
                data-action-store="{{ route('dashboard.advantages.store')  }}"             
            > إضافة  ميزه جديد </a>            
        @endif

    </div>
</div>

   


    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">
            

            @include('dashboard.partials._errors')


            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                    <table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_teachers">
                        <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
                            <th>#</th>
                            <th class="min-w-100px">الاسم  </th>
                          
                            <th class="min-w-100px"> الوصف  </th>
                         
                            <th class="text-end min-w-100px pe-5">الاعدادات</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                        @foreach($advantages as $index=> $advantage)
                            <tr>
                            <td> <span class="data-id" data-id="{{ $index+1  }}"> {{ $index+1  }}</span> </td>
                            <td> 
                                <span class="data-title-ar" data-title-ar=' {{ $advantage->name  }}'  >      {{ $advantage->name  }} </span>
                            </td>
                          

                            <td> 
                                <span class='data-desc-ar' data-desc-ar='{{ $advantage->desc  }}' >    {{ $advantage->desc  }}   </span>
                            </td> 

                        
                            <td class="text-end">
                                <div class="btn-actions d-flex align-items-center justify-content-end">
        
                                    @if(auth()->user()->hasPermission('faqs_update'))
                               
                                    <a href="{{ route('dashboard.advantages.edit', $advantage->id)  }}">
                                        <span class="svg-icon svg-icon-2 svg-icon-primary  ">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor"/>
                                                <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor"/>
                                                <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </a>
                                
                                    @endif
                                    @if(auth()->user()->hasPermission('faqs_delete'))
                                    <form action="{{ route('dashboard.advantages.destroy', $advantage->id)  }}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="border-0 p-0 bg-white delete">
                                            <span class="svg-icon svg-icon-2   svg-icon-danger ">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                        </button>
                                    </form>
                                               
                                    @endif
        
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        @endforeach
        
                        </tbody>
                    </table>
                </div>
            </div>



 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"> اضافة ميزه جديد </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('dashboard.advantages.store')  }}" method="post" class="row"  enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="col-md-6">
                    <input type="text" class="form-control mb-2 question" placeholder="الاسم بالعربية" name="name" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control mb-2 question_en" placeholder="الاسم بالانجليزية" name="name_en" required>
                </div>
                <div class="col-md-6">
                    <textarea id="" class="form-control mb-2 answer" placeholder="الوصف بالعربية" name="desc" required></textarea>
                </div>
                <div class="col-md-6">
                    <textarea  id="" class="form-control mb-2 answer_en" placeholder="الوصف بالانجليزية" name="desc_en" required></textarea>
                </div>
                <div class="col-md-6">
                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
               </div>
                <button type="submit" class="btn btn-primary save">اضافة</button>
            </form>
        </div>
        </div>
    </div>
    </div>

        </div>
    </div>
    
@endsection

@push('js')
    <script>
        $(function () {

            $('body').on('click', '.edit_modal', function () {

                $('.modal').find('.modal-title').text($(this).data('add-text'));
                $('.modal').find('button.save').text($(this).data('btn-text'));
                $('.modal').find('form').attr('action', $(this).data('action-update'));
                $('.modal').find('input[name="_method"]').val('put');

                let dataTitleAr = $(this).closest('tr').find('.data-title-ar').data('title-ar'),
                    dataTitleEn = $(this).closest('tr').find('.data-title-en').data('title-en'),
                    dataDescAr  = $(this).closest('tr').find('.data-desc-ar').data('desc-ar'),
                    dataDescEn  = $(this).closest('tr').find('.data-desc-en').data('desc-en')
                    dataID      = $(this).closest('tr').find('.data-id').data('id');

                $('.modal').find('.question').val(dataTitleAr);
                $('.modal').find('.answer').val(dataTitleEn);
                $('.modal').find('.question_en').val(dataDescAr);
                $('.modal').find('.answer_en').val(dataDescEn); 

            });


            $('body').on('click', '.add_modal', function () {
                $('.modal').find('.modal-title').text($(this).data('add-text'));
                $('.modal').find('button.save').text($(this).data('btn-text'));
                
                $('.modal').find('form').attr('action', $(this).data('action-store'));
                $('.modal').find('.question').val('');
                $('.modal').find('.answer').val('');
                $('.modal').find('.question_en').val('');
                $('.modal').find('.answer_en').val('');
      
                $('.modal').find('input[name="_method"]').val('post');

            });

        });
    </script>
@endpush