@extends('adminlte::page')

@section('title', 'Customer')

@section('content_header')
    <h1>Customer Information</h1>
@stop

@section('content')
    <p>User Information Content Here</p>
    <div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">Id#</th><th>Customer Name</th><th>Customer Email</th><th>View</th>
        </tr>
      </thead>
      <tbody>
      @foreach($customers AS $customer)
        <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->customer_name }}</td>
          <td>{{ $customer->customer_email }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('customers.show',['customer'=>$customer->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('customers.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop