@extends('layouts.dashboard.app')

@section('content')

<div class="d-flex align-items-center justify-content-between mb-3">
    <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
        <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted">الاعدادات</a></li>
        <li class="breadcrumb-item pe-3 text-primary"> رسائل التواصل </li>
    </ol>
    <div class="d-flex">
        <form action="" class="d-flex">
            <input type="text" autofocus name="search" id="search" placeholder="البحث ..." class="form-control" value="{{ request()->search  }}">
            <button class="btn btn-bg-secondary mx-2"> البحث </button>
        </form>
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
                            <th class="min-w-100px"> الاسم  </th>
                            <th class="min-w-100px"> البريد الالكتروني </th>
                            <th class="min-w-100px"> رقم الهاتف </th>
                            <th class="min-w-100px"> نوع الاستفسار </th>
                            <th class="min-w-100px"> الاستفسار </th>
                            <th class="text-end min-w-100px pe-5">الاعدادات</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                        @foreach($contacts as $index=> $contact)
                            <tr>
                            <td> <span class="data-id" data-id="{{ $index+1  }}"> {{ $index+1  }}</span> </td>

                            <td>  {{ $contact->name }}  </td>
                            <td>  {{ $contact->email }}  </td>
                            <td>  {{ $contact->phone }}  </td>
                            <td>   
                                @if ( $contact->contact_type == 'question')
                                    <span class="badge bg-primary"> سؤال </span>
                                @endif
                                @if ( $contact->contact_type == 'complaint')
                                    <span class="badge bg-danger"> شكوى </span>
                                @endif
                                @if ( $contact->contact_type == 'enquiry')
                                    <span class="badge bg-info"> استفسار </span>
                                @endif                                                                
                            </td>
                            <td>  {{ $contact->body }}  </td>
                            
                            <td class="text-end">
                            @if(auth()->user()->hasPermission('contacts_delete'))
                                 <form action="{{ route('dashboard.contacts.destroy', $contact->id)  }}" method="post" class="d-inline-block">
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
                            </td>
                            </tr>
                        </tbody>
                        @endforeach
        
                        </tbody>
                    </table>
                </div>
            </div>


 
@endsection
 