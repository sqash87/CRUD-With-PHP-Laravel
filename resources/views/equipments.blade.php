@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
    <p>Equipment Content Here</p>
    <div class="card">
      <div class="card-body">
        <table id="table" class="table table-bordered">
          <thead>
            <tr>
            <th>Customer ID</th><th>Invoice</th><th>Company Name</th><th>Equipment Name</th><th>User Email</th><th>Ram</th><th>Storage</th><th>Price</th><th>Notes</th><th>Purchase Date</th><th>View</th>
            </tr>
          </thead>
          <tbody>
            @foreach($equipments AS $equipment)
              <tr>
                <td>{{ $equipment->customer_id }}</td>
                <td>{{ $equipment->invoice }}</td>
                <td>{{ $equipment->manufacturer->company_name }}</td>
                <td>{{ $equipment->equipment_name }}</td>
                <td>{{ $equipment->customer->customer_email }}</td>
                <td>{{ $equipment->ram }}</td>
                <td>{{ $equipment->storage }}</td>
                <td>{{ $equipment->price }}</td>
                <td>{{ $equipment->notes }}</td>
                <td>{{ $equipment->purchaseDate }}</td>
                
                <td><a class="btn btn-default btn-sm" href="{{ route('equipments.show',['equipment'=>$equipment->id]) }}">View</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <a href="{{ route('equipments.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop