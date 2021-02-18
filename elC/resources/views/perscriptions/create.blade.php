@extends('admin.admin')
@section('content')
 @php
  
   $data = App\Models\Ligne::all();
   
@endphp
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <center><h2>Ajouter  une  Persciption</h2></center>
        </div>
        
    </div>
    <br><br><br><br>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Il ya une erreur Dans l'Input !!.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('perscriptions.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de medecin *</strong><br><br>
                <input type="text" name="medecin" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <br><strong>nom de patient *</strong><br><br>
                <input type="text" name="patient" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
               <br> <strong>Date *</strong><br><br>
                <input type="date" name="date" class="form-control" placeholder="Enter Title">
            </div>
            
          
            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <br><br> <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>




@endsection


