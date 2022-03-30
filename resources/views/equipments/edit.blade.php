@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
  <h1>Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.update', ['equipment'=>$equipment->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-select name="customer_id" value="{{ $equipment->customer_id }}" label="Customer">
    @foreach($customers AS $customer)
      @if($customer->id == $equipment->customer_id)
        <option value='{{ $customer->id }}' selected="selected">{{ $customer->customer_email }}</option>
      @else
        <option value='{{ $customer->id }}'>{{ $customer->customer_email }}</option>
      @endif
    @endforeach
  </x-adminlte-select>
  
  
  <x-adminlte-input name="invoice" value="{{ $equipment->invoice }}" label="Invoice" />

  <x-adminlte-select name="manufacturer_id" value="{{ $equipment->manufacturer_id }}" label="Manufacturer">
    @foreach($manufacturers AS $manufacturer)
      @if($manufacturer->id == $equipment->manufacturer_id)
        <option value='{{ $manufacturer->id }}' selected="selected">{{ $manufacturer->company_name }}</option>
      @else
        <option value='{{ $manufacturer->id }}'>{{ $manufacturer->company_name }}</option>
      @endif
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
    <x-adminlte-button type="Submit" label="Submit" />
 
</form>
@stop