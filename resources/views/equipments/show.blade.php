@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h3>Equipment Information</h3>
@stop

@section('content')
  <h1>User Name: {{ $equipment->customer->customer_name; }}</h1>

  <div>
      <p>Customer information</p>
      <p>Customer ID: {{ $equipment->customer_id; }}</p>
      <p>Invoice #{{ $equipment->invoice; }}</p>
      <p>Manufacturer: {{ $equipment->manufacturer->company_name; }}</p>
      <p>Equipment Type: {{ $equipment->equipment_name; }}</p>
      <p>Price: {{ $equipment->price; }}</p>
      <p>CPU: {{ $equipment->cpu; }}</p>
      <p>Ram: {{ $equipment->ram; }}</p>
      <p>Storage: {{ $equipment->storage; }}</p>
      
  </div>

  

  <form style="margin: 0; padding: 0" action="{{ route('equipments.destroy', ['equipment'=>$equipment->id]) }}" method="POST">
    <a class="btn btn-default" href="{{ route('equipments.edit', ['equipment'=>$equipment->id]) }}">Edit</a>
    @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>    
@stop