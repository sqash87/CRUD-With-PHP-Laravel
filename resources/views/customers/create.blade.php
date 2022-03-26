@extends('adminlte::page')

@section('title', 'Customer')

@section('content_header')
    <h1>Customer</h1>
@stop

@section('content')
<form method="post" action="{{ route('customers.store') }}" >
    @csrf
    <x-adminlte-input name="customer_name" label="Customer Name" />
    <x-adminlte-input name="customer_email" label="Customer Email" />
    
    <x-adminlte-input name="device_name" label="Device Name" />
    
    <x-adminlte-button type="Submit" label="Submit" />
    
</form>
@stop
