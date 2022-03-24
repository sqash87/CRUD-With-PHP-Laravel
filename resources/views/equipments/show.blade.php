@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment Show</h1>
@stop

@section('content')
  <h2>{{ $equipment->equipment_name; }}</h2>
  <div><p>{{ $equipment->device_name; }}% finished</p></div>
@stop