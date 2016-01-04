@extends('frontend.layouts.master')

@section('content')
    <div class="container">
        @include('frontend.customers.show_physical_address')
    </div>
    <div class="container">
        @include('frontend.customers.show_billing_address')
    </div>     

   

@endsection