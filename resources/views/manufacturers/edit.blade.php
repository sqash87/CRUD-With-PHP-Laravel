@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturers</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.update', ['manufacturer'=>$manufacturer->id]) }}" >
    @csrf
    @method('PUT')
    <x-adminlte-input name="company_name" value="{{ $manufacturer->company_name }}" label="Company Name" />
    <x-adminlte-input name="sales_email" value="{{ $manufacturer->sales_email }}" label="Sales Email" />  
    <x-adminlte-input name="tech_email" value="{{ $manufacturer->tech_email }}" label="Tech Email" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop