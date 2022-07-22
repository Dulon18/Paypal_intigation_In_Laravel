@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                 
                      <div class="mt-4">
                      <div class="row row-cols-1 row-cols-md-2 ">
                                <div class="col">
                                    <div class="card">
                                    <img src="https://cdn.dribbble.com/users/131151/screenshots/14372796/media/8923674bd3ecf70a8eef977588581c82.png?compress=1&resize=400x300" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Tshirt  Design</h5>
                                        
                                        <p class="card-text">Price : $ 100</p>
                                    </div>
                                    </div>
                                </div>
                      </div>
                      <form action="{{route('paypalPayment')}}" method="POST">
                       @csrf
                            <input type="hidden" name="amount" value="100">
                            <button type="submit" class="btn btn-primary mt-3">Pay with Paypal</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
