@extends('admin.admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier un Patient</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('patients.index') }}"> Retoure</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il ya probleme dans L'input !!.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
            
    <form action="{{ route('patients.update',$patient->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom*</strong>
                    <input type="text" name="nom" value="{{ $patient->nom }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenom*</strong>
                    <input type="text" name="prenom" value="{{ $patient->prenom }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date de naissance*</strong>
                    <input type="text" name="date_naissance" value="{{ $patient->date_naissance }}" class="form-control" placeholder="Title">
                </div>
            </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero  de Securite*</strong>
                    <input type="text" name="num_securite" value="{{$patient->num_securite}}" class="form-control" placeholder="Title">
                </div>
            </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email*</strong>
                    <input type="text" name="email" value="{{ $patient->email }}" class="form-control" placeholder="Title">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telephone*</strong>
                    <input type="text" name="tel" value="{{ $patient->tel }}" class="form-control" placeholder="Title">
                </div>
            </div>
        
 @if(auth()->user()->role == 'admin'||auth()->user()->role == 'medecin')

 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maladie*</strong>
                    <input type="text" name="maladie" value="{{ $patient->maladie }}" class="form-control" placeholder="Title">
                </div>
            </div>
        

         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Antecedent*</strong>
                    <input type="text" name="antecedent" value="{{ $patient->antecedent }}" class="form-control" placeholder="Title">
                </div>
            </div>
        


 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Allergie*</strong>
                    <input type="text" name="allergie" value="{{ $patient->allergie }}" class="form-control" placeholder="Title">
                </div>
            </div>
        

 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Commentaire*</strong>
                    <input type="text" name="commmentaire" value="{{ $patient->commmentaire }}" class="form-control" placeholder="Title">
                </div>
            </div>


           

@else
@can('delete')
<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maladie*</strong>
                    <input type="text" name="maladie" value="{{ $patient->maladie }}" class="form-control" placeholder="Title">
                </div>
            </div>
        

         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Antecedent*</strong>
                    <input type="text" name="antecedent" value="{{ $patient->antecedent }}" class="form-control" placeholder="Title">
                </div>
            </div>
        


 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Allergie*</strong>
                    <input type="text" name="allergie" value="{{ $patient->allergie }}" class="form-control" placeholder="Title">
                </div>
            </div>
        

 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Commentaire*</strong>
                    <input type="text" name="commmentaire" value="{{ $patient->commmentaire }}" class="form-control" placeholder="Title">
                </div>
            </div>
@endcan
@endif
        
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
   
    </form>

@endsection