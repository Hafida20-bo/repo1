@extends('admin.admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier un Patient</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Retoure</a>
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
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom*</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenom*</strong>
                    <input type="text" name="prenom" value="{{ $user->prenom }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Login*</strong>
                    <input type="text" name="login" value="{{ $user->login }}" class="form-control" placeholder="Title">
                </div>
            </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password*</strong>
                    <input type="text" name="password" value="{{$user->password}}" class="form-control" placeholder="Title">
                </div>
            </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email*</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tel*</strong>
                    <input type="text" name="tel" value="{{ $user->tel }}" class="form-control" placeholder="tel">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Specialite*</strong>
                    <input type="text" name="specialite" value="{{ $user->specialite }}" class="form-control" placeholder="Title">
                </div>
            </div>
        


 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role*</strong>
                    <input type="text" name="role" value="{{ $user->role }}" class="form-control" placeholder="Title">
                </div>
            </div>
        



        
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
   
    </form>
@endsection