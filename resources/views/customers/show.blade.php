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

  <form style="margin: 0; padding: 0" action="{{ route('customers.destroy', ['customer'=>$customer->id]) }}" method="POST">
    <a class="btn btn-default" href="{{ route('customers.edit', ['customer'=>$customer->id]) }}">Edit</a>
    @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>   



@stop