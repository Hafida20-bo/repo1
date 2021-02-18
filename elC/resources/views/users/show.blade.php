@extends('admin.admin')

@section('content')

 <style>
body {font-family: Arial, Helvetica, sans-serif;}



.container {
  padding: 20px;
  background-color: #f1f1f1;
}

p {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  
  box-sizing: border-box;
}




</style>
<body>




  <div class="container">
    <h2>Voir les Utilisateurs</h2>
     <br>
   

  <div class="container" style="background-color:white">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                {{ $user->name }}
            </div>
        </div><br><br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom*</strong>
                {{ $user->prenom }}
            </div>
        </div>
<br><br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Login*</strong>
                {{ $user->login }}
            </div>
        </div>

    <br><br>    


 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email*</strong>
                {{ $user->email }}
            </div>
        </div>
<br><br>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone*</strong>
                {{ $user->tel }}
            </div>
        </div>

<br><br>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Specialité*</strong>
                {{ $user->specialite }}
            </div>
        </div>
<br><br>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role*</strong>
                {{ $user->role }}
            </div>
        </div>
      <br><br>
        </div>
  </div>

  </div>
</div>

 </div>
    <!--div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Retoure</a>
            </div>
        </div>
    </div-->
   
   

@endsection
 


  