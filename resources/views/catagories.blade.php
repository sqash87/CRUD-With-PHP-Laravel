@extends('adminlte::page')

@section('title', 'Catagory')

@section('content_header')
    <h1>Catagory</h1>
@stop

@section('content')
    <p>Catagory Content Here</p>
    <div class="card">
      <div class="card-body">
        <table id="table" class="table table-bordered">
          <thead>
            <tr>
              <th>Catagory Name</th><th>Device Name</th><th>Serial Num</th><th>Price</th><th>Ram</th><th>Storage</th><th style="width: 40px"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($catagories AS $catagory)
              <tr>
                <td>{{ $catagory->catagory_name }}</td>
                <td>{{ $catagory->device_name }}</td>
                <td>{{ $catagory->serial_num }}</td>
                <td>{{ $catagory->price }}</td>
                <td>{{ $catagory->ram }}</td>
                <td>{{ $catagory->storage }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <a href="{{ route('catagories.create') }} " class="btn btn-primary" >Create</a>
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