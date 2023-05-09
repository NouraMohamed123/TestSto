@extends('layouts.dashboard.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.users.index') }}" class="pe-3 text-muted">الاعضاء</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> التعديل  </li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">

            <form action="{{ route('dashboard.users.update', $user->id)  }}" method="post">
                @csrf
                @method('put')
                @include('dashboard.partials._errors')


                <div class="form-group mb-4">
                    <label for="roleName" class="form-label fw-bolder d-block">الاسم</label>
                    <input type="text" name='name' id="roleName" placeholder="Please Enter Role Name " class="form-control" value="{{ old('name', $user->name) }}">
                </div>

                <div class="form-group mb-4">
                    <label for="roleName" class="form-label fw-bolder d-block">البريد الالكتروني</label>
                    <input type="email" name='email' id="roleName" placeholder="Please Enter Role Name " class="form-control" value="{{ old('email', $user->email) }}">
                </div>



                <div class="form-group mb-4">
                    <label for="" class="form-label fw-bolder d-block"> الصلاحيات </label>
                    <select name="role_id" id="role_id" class="form-select form-control"   data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر ..">
                        @foreach($roles as $role)
                            <option value="{{  $role->id  }}"   {{ $user->hasRole($role->name) ? 'selected' : ''  }} > {{ $role->name  }} </option>
                        @endforeach
                    </select>
                    <a href="  {{ route('dashboard.roles.create')  }} " class="mb-3 d-block btn btn-bg-secondary mt-4"> إضافة صلاحية جديدة </a>
                </div>




                <div class="form-group text-end">
                    <button class="btn btn-primary">  حفظ  </button>
                </div>
            </form>

        </div>
    </div>


@endsection
