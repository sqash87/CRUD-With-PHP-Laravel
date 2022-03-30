@extends('adminlte::page')

@section('title', 'Customer')

@section('content_header')
    <h1>Customer Information</h1>
@stop

@section('content')
<form method="post" action="{{ route('customers.store') }}" >
    @csrf
    <x-adminlte-input name="customer_name" label="Name" />
    <x-adminlte-input name="customer_email" label="Email" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop