@extends('admin.admin')
   
@section('content')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

   
    @if ($message = Session::get('success'))
        <div class="alert alert-info">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
   
    <div class="row" style="margin-top: 2rem;">
        
           
            
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('patients.create') }}"> Ajouter un Patient</a>
            </div>
    </div> <br>


    <table id="example" class="table " style="">
        <thead class="thead-dark">
          <tr>
           
            <th>Nom</th>
            <th>Prenom</th>
            <th width="180px">Date de naissance</th>
            <th width="180px">Numero de securite</th>
            <th>Email</th>
            <th>Telephone</th>
@if(auth()->user()->role == 'admin'||auth()->user()->role == 'medecin')
                     
            <th>Maladie</th>
            <th>Allergie</th>
            <th>Antecedent</th>
            <th>Commentaire</th>@endif


            @if(auth()->user()->role == 'secretaire')
            @can('delete')   
            <th>Maladie</th>
            <th>Allergie</th>
            <th>Antecedent</th>
            <th>Commentaire</th>
            @endcan
            @endif
            
            <th width="280px" align="center">Action</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $key => $value)
        <tr>
            
            <td>{{ $value->nom }}  </td>
            <td>{{ $value->prenom }}</td>
            <td>{{ $value->date_naissance}}</td>
            <td>{{ $value->num_securite }}</td>
            <td>{{ $value->email}}</td>
            <td>{{ $value->tel}}</td>


           @if(auth()->user()->role == 'admin'||auth()->user()->role == 'medecin')
            

            <td>{{ $value->maladie}}</td>
            <td>{{ $value->allergie}}</td>
            <td>{{ $value->antecedent}}</td>
            <td>{{ $value->commmentaire}}</td>
            <td>  <form action="{{ route('patients.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('patients.show',$value->id) }}">Voir</a>    
                    <a class="btn btn-primary" href="{{ route('patients.edit',$value->id) }}">Modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>

           

@else   
    @can('DELETE')   
    
            <td>{{ $value->maladie}}</td>
            <td>{{ $value->allergie}}</td>
            <td>{{ $value->antecedent}}</td>
            <td>{{ $value->commmentaire}}</td> 
    @endcan 
@endif
            
   
        </tr>

        @endforeach
        </tbody>
        
    </table></div>
      <script >$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );</script>        


@endsection