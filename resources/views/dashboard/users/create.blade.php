@extends('layouts.dashboard.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.users.index')  }}" class="pe-3 text-muted">المستخدمين</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> اضافة جديد </li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">
            <form action="{{ route('dashboard.users.store')  }}" method="post">
                @csrf
                @method('post')
                @include('dashboard.partials._errors')
                <div class="form-group mb-4">
                    <label for="roleName" class="form-label fw-bolder d-block">الاسم</label>
                    <input type="text" name='name' id="roleName" class="form-control form-control-solid" value="{{ old('name') }}">
                </div>

                <div class="form-group mb-4">
                    <label for="emailUser" class="form-label fw-bolder d-block">البريد الإلكتروني</label>
                    <input type="text" name='email' id="emailUser"  class="form-control form-control-solid" value="{{ old('email') }}">
                </div>

                <div class="form-group mb-4">
                    <label for="passUser" class="form-label fw-bolder d-block">كلمة المرور </label>
                    <input type="text" name='password' id="passUser"  class="form-control form-control-solid"    >
                </div>

                <div class="form-group mb-4">
                    <label for="passConfirmUser" class="form-label fw-bolder d-block"> تأكيد كلمة المرور </label>
                    <input type="text" name='password_confirmation' id="passConfirmUser"  class="form-control form-control-solid"    >
                </div>

                <div class="form-group">
                    <label for="" class="form-label fw-bolder d-block"> الصلاحيات </label>
                    <select name="role_id"  class="form-control form-select select2"  multiple="multiple" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر ..">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}"> {{$role->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-end">
                    <button  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                </div>
            </form>
        </div>
    </div>


@endsection
