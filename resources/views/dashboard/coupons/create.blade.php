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

        <form method="POST" action="{{ route('dashboard.coupons.store') }}">
            @csrf

            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="Enter coupon code">
            </div>

            <div class="form-group">
                <label for="discount">Amount (%)</label>
                <input type="number" name="value" id="discount" class="form-control" placeholder="Enter discount percentage">
            </div>

                <div class="form-group">
                 <label for="expire_date">{{ __('Expire Date') }}</label>
            <input type="date" id="expire_date" class="form-control"  name="ExpireDate"
                value="{{ old('expire_date') }}">
        
            </div>
          
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
