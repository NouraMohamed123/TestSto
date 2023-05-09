@extends('layouts.dashboard.app')
    @push('css')
      <style>
.form-group {
    margin-bottom: 1.5rem;
}
label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}
input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 0.5rem;
    font-size: 1rem;
    border-radius: 0.25rem;
    border: 1px solid #ced4da;
}

button[type="submit"] {
    margin-top: 1rem;
}
      </style>

    @endpush
@section('content')
    <div class="container">
        <h1>Create a Coupon</h1>

        <form method="POST" action="{{ route('dashboard.coupons.update', $coupon->id)  }}">
            @csrf
            @method('put')
            @include('dashboard.partials._errors')
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="Enter coupon code" value="{{$coupon->code}}">
            </div>

            <div class="form-group">
                <label for="discount">Amount</label>
                <input type="number" name="value" id="discount" class="form-control" placeholder="Enter discount percentage"  value="{{$coupon->value}}" >
            </div>

                <div class="form-group">
                 <label for="expire_date">{{ __('Expire Date') }}</label>
            <input type="date" id="expire_date" class="form-control"  name="ExpireDate"
                value="{{ $coupon->ExpireDate}}">
        
            </div>
          
            <div class="form-group text-end">
                <button class="btn btn-primary">  حفظ  </button>
            </div>
        </form>
    </div>
@endsection
