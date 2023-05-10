@extends('layouts.frontend.app')
@push('css')

@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4">Checkout</h2>
                <form action="{{ route('checkout.payment') }}" method="POST"  novalidate>
                    @csrf
                     @method('post')
                      <input type="hidden" name="product_id" value="1">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="state">State</label>
                            <input type="text" name="state" id="state" class="form-control" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="zip">Zip</label>
                            <input type="text" name="zip" id="zip" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <hr>
                    <h4 class="mt-4">Payment Options</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_option" id="stripe" value="stripe" checked>
                        <label class="form-check-label" for="stripe">
                            Stripe
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_option" id="paypal" value="paypal">
                        <label class="form-check-label" for="paypal">
                            PayPal
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="payment_option" id="paymob" value="paymob">
                        <label class="form-check-label" for="paymob">
                            Paymob
                        </label>
                    </div>
                    <div id="stripe-form">
                        {{-- <div class="form-group">
                            <label for="card_number">Card Number</label>
                            <input type="text" name="card_number" id="card_number" class="form-control" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="expiration">Expiration</label>
                                <input type="text" name="expiration" id="expiration" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cvv">CVV</label>
                                <input type="text" name="cvv" id="cvv" class="form-control" required>
                            </div>
                        </div> --}}
                    </div>
                    <div id="paypal-form" class="d-none">
                        <p>Redirecting to PayPal...</p>
                        <!-- Add PayPal button code here -->
                    </div>
                    <div id="paymob-form" class="d-none">
                        {{-- <div class="form-group">
                            <label for="card_number">Card Number</label>
                            <input type="text" name="card_number" id="card_number" class="form-control" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="expiration">Expiration</label>
                                <input type="text" name="expiration" id="expiration" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cvv">CVV</label>
                                <input type="text" name="cvv" id="cvv" class="form-control" required>
                            </div>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit Payment</button>
                </form>
            </div>
        </div>
    </div>

@push('js')
     <script>
        // Show/hide payment forms based on selection
        $('input[type=radio][name=payment_option]').change(function() {
            if (this.value === 'stripe') {
                $('#stripe-form').removeClass('d-none');
                $('#paypal-form').addClass('d-none');
                $('#paymob-form').addClass('d-none');
            }
            else if (this.value === 'paypal') {
                $('#stripe-form').addClass('d-none');
                $('#paypal-form').removeClass('d-none');
                $('#paymob-form').addClass('d-none');
            }
            else if (this.value === 'paymob') {
                $('#stripe-form').addClass('d-none');
                $('#paypal-form').addClass('d-none');
                $('#paymob-form').removeClass('d-none');
            }
        });
    </script>
    @endpush
@endsection
   