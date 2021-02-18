@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter  une Ligne Persciption</h2>
        </div>
        
    </div>
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
   
<form action="{{ route('lignes.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                <strong>id *</strong>
                <input type="text" name="idP" class="form-control" value="">
            </div>
            <div class="form-group">
                <strong>Medicament *</strong>
                <input type="text" name="medicament" class="form-control" placeholder="Enter Medicament">
            </div>
            <div class="form-group">
                <strong>Dose *</strong>
                <input type="text" name="dose" class="form-control" placeholder="Enter Dose">
            </div>
            <div class="form-group">
                <strong>Moment de prise *</strong>
                <input type="text" name="moment" class="form-control" placeholder="Enter Moment de prise">
            </div>
            
            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>



@endsection


