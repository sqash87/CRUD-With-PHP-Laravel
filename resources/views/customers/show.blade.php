@extends('adminlte::page')

@section('title', 'Customer')

@section('content_header')
  <h1>Contact Information</h1>
@stop

@section('content')
  <h2>Customer Name: {{ $customer->customer_name; }}</h2>
  <hr>
  <div>
    <p>Email: {{ $customer->customer_email; }}</p>
  </div>

  <form style="margin: 0; padding: 0">
    <a class="btn btn-default" href="{{ route('customers.edit', ['customer'=>$customer->id]) }}">Edit</a>
  </form>  
@stop