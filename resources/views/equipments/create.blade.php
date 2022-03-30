@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.store') }}" >
    @csrf
    
    <x-adminlte-select name="customer_id" label="Customer Email" >
    @foreach($customers AS $customer)
      <option value='{{ $customer->id }}'>{{ $customer->customer_email }}</option>
    @endforeach
    </x-adminlte-select>

    <x-adminlte-select name="manufacturer_id" label="Manufacturer Name">
    @foreach($manufacturers AS $manufacturer)
      <option value='{{ $manufacturer->id }}'>{{ $manufacturer->company_name }}</option>
    @endforeach
    </x-adminlte-select>

    <x-adminlte-select name="equipment_name" label="Equipment" >
        <x-adminlte-options :options="['Desktop', 'Laptop', 'Tablet', 'Phone']" 
            placeholder="Select an option..." />
    </x-adminlte-select>
    <x-adminlte-input name="cpu"  label="CPU Core" />
    <x-adminlte-input name="price" label="Price" />
    <x-adminlte-input name="invoice" label="Invoice" />
    <x-adminlte-input name="purchaseDate" type="datetime-local" label="Purchase Date"/>
    <x-adminlte-input name="ram"  label="Ram" />
    <x-adminlte-input name="storage" label="Storage" />
    <x-adminlte-input name="notes" label="Notes" />

    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop