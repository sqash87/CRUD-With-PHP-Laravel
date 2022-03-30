@extends('adminlte::page')

@section('title', 'Customer')

@section('content_header')
    <h1>Customer Information</h1>
@stop

@section('content')
<form method="post" action="{{ route('customers.update', ['customer'=>$customer->id]) }}" >
    @csrf
    @method('PUT')
    <x-adminlte-input name="customer_name" value="{{ $customer->customer_name }}" label="Name" />
    <x-adminlte-input name="customer_email" value="{{ $customer->customer_email }}" label="Email" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop