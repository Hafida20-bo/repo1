@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>AJouter Un Utilisateur</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
   
<form action="{{ route('users.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Nom">
            </div>
            <div class="form-group">
                <strong>Prenom*</strong>
                <input type="text" name="prenom" class="form-control" placeholder="Enter Prenom">
            </div>
            <div class="form-group">
                <strong>Login*</strong>
                <input type="text" name="login" class="form-control" placeholder="Enter Login">
            </div>
            <div class="form-group">
                <strong>Password*</strong>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <strong>email*</strong>
                <input type="text" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <strong>Tel*</strong>
                <input type="text" name="tel" class="form-control" placeholder="Enter tel">
            </div>
            <div class="form-group">
                <strong>Specialite*</strong>
                <input type="text" name="specialite" class="form-control" placeholder="Enter Specialite">
            </div>
            <div class="form-group">
                <strong>Role*</strong>
                <input type="text" name="role" class="form-control" placeholder="Enter Role">
            </div>
            
            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>



@endsection


