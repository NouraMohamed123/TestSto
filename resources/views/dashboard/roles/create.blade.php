@extends('layouts.dashboard.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted">الصلاحيات</a></li>
            <li class="breadcrumb-item pe-3 text-primary"> اضافة جديد </li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">
            <form action="{{ route('dashboard.roles.store')  }}" method="post">
                @csrf
                @method('post')
                @include('dashboard.partials._errors')
                <div class="form-group">
                    <label for="roleName" class="form-label fw-bolder d-block"> الاسم </label>
                    <input type="text" name='name' id="roleName"   class="form-control form-control-solid" value="{{ old('name') }}">
                </div>

                <div class="form-group mt-4">
                    <h4 class="form-label fw-bolder d-block"> الصلاحيات </h4>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">Model</th>
                            <th>Permissions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            //$models = ['categories', 'movies','users','settings'];
                            $models = [ 'users', 'roles','settings' ];
                            $permission_maps = ['create', 'read', 'update', 'delete'];
                        @endphp
                        @foreach($models as $index=>$model)

                            @if($model == 'settings')
                                @php
                                    $permission_maps = ['create', 'read'];
                                @endphp
                            @endif


                            <tr>
                                <td> {{ $index+1  }} </td>
                                <td class="text-capitalize"> {{ $model  }} </td>
                                <td>
                                    <select name="permissions[]" id="" class="form-control form-select" multiple="multiple" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                        @foreach( $permission_maps as $permission_map)
                                            <option value="{{$model . "_" . $permission_map }}"> {{ $permission_map  }} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <button  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                </div>
            </form>
        </div>
    </div>


@endsection
