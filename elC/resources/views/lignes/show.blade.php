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


<div class="pull-right">
                <a class="btn btn-info" href="{{ url()->previous() }}"> Retoure</a>
            </div>
<br>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Voir la Ligne de perscription</h2><br>
            </div>
            
        </div>
    </div>
    

  <div class="container" style="background-color:white">
   
    <div class="row">
        <!--div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>idp*</strong>
                {{ $ligne->idP }}
            </div>
        </div-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Medicament*</strong><br>
                {{ $ligne->medicament }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dose*</strong><br>
                {{ $ligne->dose }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Moment*</strong><br>
                {{ $ligne->moment }}
            </div>
        </div>


      
        </div>


        
    </div>
  </div>


    </div>
   


@endsection
