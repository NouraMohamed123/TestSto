@extends('layouts.dashboard.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.advantages.index') }}" class="pe-3 text-muted">الاعضاء</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> التعديل  </li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">

            <form action="{{ route('dashboard.advantages.update', $advantage->id)  }}"  method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                @include('dashboard.partials._errors')


                <div class="col-md-6">
                    <input type="text" class="form-control mb-2 question" placeholder="الاسم بالعربية" name="name"  value="{{$advantage->getTranslation('name','ar')}}" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control mb-2 question_en" placeholder="الاسم بالانجليزية" name="name_en" value="{{$advantage->getTranslation('name','en')}}" required>
                </div>
                <div class="col-md-6">
                    <textarea id="" class="form-control mb-2 answer" placeholder="الوصف بالعربية" name="desc"  required>{{$advantage->getTranslation('desc','ar')}}</textarea>
                </div>
                <div class="col-md-6">
                    <textarea  id="" class="form-control mb-2 answer_en" placeholder="الوصف بالانجليزية" name="desc_en"   required>{{$advantage->getTranslation('desc','en')}}</textarea>
                </div>
                <div class="col-md-6">
                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
               </div>
               <div class="col-md-6 align-self-center">
                <img src="{{asset('storage/uploads/advantages') . '/' . $advantage->avatar}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                 </div>     
                <div class="form-group text-end">
                    <button class="btn btn-primary">  حفظ  </button>
                </div>
            </form>

        </div>
    </div>


@endsection
