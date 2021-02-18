@extends('admin.admin')
  
@section('content')



 @php
   $patient = App\Models\Patient::all();
@endphp
<div class="row">
    <div class="col-lg-12 margin-tb">
        
        <div class="pull-right">
           
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   







<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
}

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
</style>
<body>
<br>


<form action="{{ route('certificats.store') }}"method="POST">
  <div class="container">
    <h1>Ajouter Une Nouvelle certificat</h1>
    <br>
  </div>

  <div class="container" style="background-color:white">
    <div class="row">

     @csrf


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom De Medecin</strong>
                <input type="text" name="medecin" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom De Patient</strong>
                <input type="text" name="patient" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date*</strong>
                <input type="date" name="date" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description*</strong>
                <input type="text" name="description" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        
    </div>
  </div>

  <div class="container">
    <table  width="100%" ><tr><td>
                <button type="submit" class="btn btn-primary">Submit</button></td>
         </tr></table>
  </div>
</form>

</body>
</html>



@endsection