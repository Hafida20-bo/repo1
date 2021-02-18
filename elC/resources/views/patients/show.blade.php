 

@extends('admin.admin')

@section('content')

 @php
   $poster = App\Models\Patient::all();
   $data = App\Models\Lettre::all();
   $rd = App\Models\Rdv::all();
   $cert = App\Models\Certificat::all();
   $imag = App\Models\Crud::all();
   $ord=App\Models\Perscription::all();
@endphp







@if(auth()->user()->role == 'admin'||auth()->user()->role == 'medecin')
                     


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}



.container1 {
  padding: 20px;
  background-color: #f1f1f1;
}


</style>
<body>

<h2>Clinique Medicale</h2>


  <div class="container1">
    <h2>Voir les Information du {{ $patient->prenom }}</h2>
    <table >
        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                {{ $patient->id }}
            </div>
        </div></td>
        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                {{ $patient->nom }}
            </div>
        </div></td>



        <td></td></tr>
        


        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom*</strong>
                {{ $patient->prenom }}
            </div>
        </div></td>



            <td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de naissance*</strong>
                {{ $patient->date_naissance }}
            </div>
        </div></td></tr>








        <tr><td> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de securite*</strong>
                {{ $patient->num_securite }}
            </div>
        </div>
</td>


<td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email*</strong>
                {{ $patient->email }}
            </div>
        </div></td></tr>




        <tr><td><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone*</strong>
                {{ $patient->tel }}
            </div>
        </div></td>


            <td> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Maladie*</strong>
                {{ $patient->maladie }}
            </div>
        </div></td></tr>
        <tr>
            <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Antecedent*</strong>
                {{ $patient->antecedent }}
            </div>
        </div></td>




            <td> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commentaire*</strong>
                {{ $patient->commentaire }}
            </div>
        </div></td><br></tr>

    </table>

  <div class="container1" style="background-color:white">
    


</body>
</html>






    
   



        
   















<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>



<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>LES PERSCRIPTIONS </h2><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('perscriptions.create') }}"> Ajouter une perscription</a>
            </div>
        </div>
    </div>
   
  
   
   <table id="example2" class="table " style="">
        <thead class="thead-dark">
        <tr>
            
            <th>MEDECIN</th>
            
            <th>DATE</th>
            <th width="280px">Action</th>
        </tr>
</thead>


        @foreach ($ord as $key => $value)
       
       
@if( $value->patient == $patient->nom )
       <tbody> <tr>
           
            <td>{{ $value->medecin }}</td>
           
            <td>{{ $value->date}}</td>
            
            <td>
                <form action="{{ route('perscriptions.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('perscriptions.show',$value->id) }}">Voir</a>    
                    <a class="btn btn-primary" href="{{ route('perscriptions.edit',$value->id) }}">Modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>

        </tr></tbody> 
@endif
        @endforeach
    </table> <script >$(document).ready(function() {
    $('#example2').DataTable();
} );</script>
   

<br>








































<hr>





 <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>LES RENDEZ-VOUS </h2><br>
            </div>

 
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('rdvs.create') }}"> Create New RDV</a>
            </div> 
        
</div>


 <table id="example1" class="table">
        <thead class="thead-dark">
         <tr>
            
            <th>Medecin</th>
           
           
            <th>Date de debut</th>
            <th>Date de fin</th>
            <th>Motif</th>

            <th width="280px">Action</th>
        </tr></thead>

        @foreach ($rd as $key => $valeur )  

@if( $valeur->patient == $patient->nom )
        <tbody>
        <tr>
            
           <td>{{ $valeur->medecin }}</td>
           
           
           <td>{{ $valeur->date_debut }}</td>
           <td>{{ $valeur->date_fin }}</td>
           <td>{{ $valeur->motif }}</td>
    ²        <td>
                <form action="{{ route('rdvs.destroy',$valeur->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('rdvs.show',$valeur->id) }}">voir</a>    
                    <a class="btn btn-primary" href="{{ route('rdvs.edit',$valeur->id) }}">modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr></tbody>
       @endif
        @endforeach
    </table><script >$(document).ready(function() {
    $('#example1').DataTable();
} );</script> 












<hr>






<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>


 
            <div class="pull-left">
                <h2>Certificat Medicale</h2>
            </div>


<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('certificats.create') }}"> Creer Une certificat</a>
            </div>
        </div>
</div>



 <table id="example6" class="table">
       <thead class="thead-dark">
        <tr>
            
            <th>Nom Medecin</th>
            
            <th>Date</th>
           
            <th width="280px">Action</th>
        </tr></thead>

        @foreach ($cert as $key => $value )  

@if( $value->patient == $patient->nom )
        <tbody>
        <tr>
            
            <td>{{ $value->medecin }}</td>
           
           <td>{{ $value->date }}</td>
          
            <td>
                <form action="{{ route('certificats.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('certificats.show',$value->id) }}">voir</a>    
                    <a class="btn btn-primary" href="{{ route('certificats.edit',$value->id) }}">modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr></tbody>
       @endif
        @endforeach
    </table>  <script >$(document).ready(function() {
    $('#example6').DataTable();
} );</script>





<hr>






















<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>


 
            <div class="pull-left">
                <h2>LES LETTRES D'ORIENTATION</h2>
            </div>


<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('lettres.create') }}"> Creer Une Letter</a>
            </div>
        </div>
</div>



 <table id="example" class="table">
       <thead class="thead-dark">
        <tr>
            
            <th>Nom Medecin</th>
           
            <th>Date</th>
            
            <th width="280px">Action</th>
        </tr></thead>

        @foreach ($data as $key => $value )  

@if( $value->nom_patient == $patient->nom )
        <tbody>
        <tr>
            
            <td>{{ $value->nom_medecin }}</td>
           
           <td>{{ $value->date }}</td>
           
            <td>
                <form action="{{ route('lettres.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('lettres.show',$value->id) }}">voir</a>    
                    <a class="btn btn-primary" href="{{ route('lettres.edit',$value->id) }}">modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr></tbody>
       @endif
        @endforeach
    </table>  <script >$(document).ready(function() {
    $('#example').DataTable();
} );</script>





<hr>























































































































































































 
    
<h2>L'Imagerie</h2><br>

<div class="pull-right">
                <a class="btn btn-info" href="{{ route('crud.create') }}"> Ajouter une Imagerie</a>
            </div>
<table id="example3" class="table " style="">
        <thead class="thead-dark">
 <tr>
  <th>Image</th>
  
  <th>Labelle</th>
  <th>Action</th>
 </tr></thead>
 @foreach($imag as $row)
 @if($row->nomPatient == $patient->nom && $row->prenomPatient == $patient->prenom)
 <tbody>
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   
   <td>{{ $row->labelle }}</td>
   <td>
      <form action="{{ route('crud.destroy',$row->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('crud.show',$row->id) }}">Voir</a>    
                    <a class="btn btn-primary" href="{{ route('crud.edit',$row->id) }}">Modifier</a>
                     
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
   </td>
  </tr>
</tbody> 
@endif
@endforeach
</table><script >$(document).ready(function() {
    $('#example3').DataTable();
} );</script>








</div>























@else

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}



.container1 {
  padding: 20px;
  background-color: #f1f1f1;
}


</style>
<body>




  <div class="container1">
    <h2>Voir Les Information Du {{ $patient->prenom }}</h2>
    <br></br>

  <div class="container1" style="background-color:white">
    


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                {{ $patient->id }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom*</strong>
                {{ $patient->nom }}
            </div>
        </div>
        


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom*</strong>
                {{ $patient->prenom }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de naissance*</strong>
                {{ $patient->date_naissance }}
            </div>
        </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de securite*</strong>
                {{ $patient->num_securite }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email*</strong>
                {{ $patient->email }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone*</strong>
                {{ $patient->tel }}
            </div>
        </div>




@endif
</div>


</body>
</html>

@endsection






