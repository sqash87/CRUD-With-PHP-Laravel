@extends('adminlte::page')

@section('title', 'Equipments')

@section('content_header')
    <h1>Equipments</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.store') }}" >
    @csrf
    <x-adminlte-input name="device_name" label="Device Name" />
    <x-adminlte-input name="cpu" type="number" min=0 max=100 label="Cpu" />
    <x-adminlte-input name="ram" type="number" min=0 max=100 label="Ram" />
    <x-adminlte-input name="storage" type="number" min=0 max=2000 label="Storage" />
    <x-adminlte-input name="price" label="Price" />
    <x-adminlte-input name="invoice" label="Invoice" />
    <x-adminlte-input name="purchaseDate" type="datetime-local" label="Purchase Date"/>
    <x-adminlte-button type="Submit" label="Submit" />
    
</form>
@stop
