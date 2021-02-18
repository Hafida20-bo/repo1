@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
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
   
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                <input type="text" name="nom" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Prenom*</strong>
                <input type="text" name="prenom" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Date de naissance*</strong>
                <input type="date" name="date_naissance" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Numero du securite*</strong>
                <input type="text" name="num_securite" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>email*</strong>
                <input type="text" name="email" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Tel*</strong>
                <input type="text" name="tel" class="form-control" placeholder="Enter Title">
            </div>
             @if(auth()->user()->role == 'admin'||auth()->user()->role == 'medecin')
            <div class="form-group">
                <strong>Maladie*</strong>
                <input type="text" name="maladie" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Antecedent*</strong>
                <input type="text" name="antecedent" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Commentaire*</strong>
                <input type="text" name="commmentaire" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Allergie*</strong>
                <input type="text" name="allergie" class="form-control" placeholder="Enter Title">
            </div>
            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@else
@can('delete')
<div class="form-group">
                <strong>Maladie*</strong>
                <input type="text" name="maladie" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Antecedent*</strong>
                <input type="text" name="antecedent" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Commentaire*</strong>
                <input type="text" name="commmentaire" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <strong>Allergie*</strong>
                <input type="text" name="allergie" class="form-control" placeholder="Enter Title">
            </div>
@endcan
@endif

@endsection


