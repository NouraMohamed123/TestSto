@extends('layouts.dashboard.app')

@section('content')


    <div class="d-flex align-items-center justify-content-between mb-3">
        <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
            <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
            <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted">الاعدادات</a></li>
            <li class="breadcrumb-item pe-3 text-primary">اعدادات روابط  التواصل الاجتماعي</li>
        </ol>
    </div>


    <div class="card">
        <div class="card-body fs-6 p-5 text-gray-700">

            <form action="{{ route('dashboard.settings.store')  }}" method="post">
                @csrf
                @method('post')
                @include('dashboard.partials._errors')

                @php
                    $social_sites = ['facebook', 'google', 'youtube', 'twitter'];
                @endphp

                @foreach($social_sites as $social_site)
                    <div class="form-group mb-4">
                        <label for="roleName" class="form-label fw-bolder d-block text-capitalize">{{ $social_site }} Link</label>

                        <input
                            type="text"
                            name='{{ $social_site }}_link'
                            class="form-control form-control-solid"
                            value="{{ $setting[$social_site . '_link'] ?? ''}}">
                    </div>

                @endforeach

                <div class="text-end">
                    <button  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                </div>

            </form>


        </div>
    </div>
@endsection
