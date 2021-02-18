@extends('admin.admin')
@section('content')
@php 
$data = App\Models\Certificat::all();
@endphp
 <html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
         
<div class="container">
 
            
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('certificats.create') }}"> Ajouter une lettre </a>
            </div>
       
<table id="example" class="table " style="">
        <thead class="thead-dark">
          <tr>
            
            <th>Nom Medecin</th>
            <th>Nom Patient</th>
            <th>Date</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $key => $value)
        <tr>
        
        <td>{{ $value->medecin }}</td>
        <td>{{ $value->patient }}</td>
        <td>{{ $value->date }}</td>
        <td>{{ $value->description }}</td>
        <td>
                <form action="{{ route('certificats.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('certificats.show',$value->id) }}">voir</a>    
                    <a class="btn btn-primary" href="{{ route('certificats.edit',$value->id) }}">modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
      <script >$(document).ready(function() {
    $('#example').DataTable();
} );</script>    

















@endsection

</div></html>