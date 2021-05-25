@extends('layouts.app')

@section('tittle', 'Checkout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{ route('checkout.store') }}" method="POST" class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John" value="" required="">
                            <div class="invalid-feedback"> Valid name is required. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Shipping option</label>
                            <select class="custom-select d-block w-100" id="shipping-option" name="delivery-method" required="">
                                <option value="free">Free</option>
                                <option value="express">Express 10EUR</option>
                            </select>
                            <div class="invalid-feedback"> Please select a shipping option. </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <h4 class="mb-3">Payment</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="John Wick" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback"> Name on card is required </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" name="cc-number" placeholder="1111-2222-3333-4444" required="">
                            <div class="invalid-feedback"> Credit card number is required </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" name="cc-expiration" placeholder="21/21" required="">
                            <div class="invalid-feedback"> Expiration date required </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" placeholder="777" required="">
                            <div class="invalid-feedback"> Security code required </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    @csrf
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Create order</button>
                </form>
            </div>
        </div>
    </div>
@endsection
