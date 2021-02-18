@extends('admin.admin')
   
@section('content')

 @php
   
   $data = App\Models\User::all();

@endphp
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
                <a class="btn btn-info" href="{{ route('users.create') }}"> Ajouter un Utilisateur</a>
            </div>
    </div> <br>


    <table id="example" class="table " style="">
        <thead class="thead-dark">
          <tr>
            
            <th>Nom</th>
            <th>Prenom</th>
            <th>Login</th>
            
            <th>Email</th>
            <th>Tel</th>
            <th>Specialite</th>
            <th>Role</th>
            
            
            <th width="280px" align="center">Action</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $key => $value)
        <tr>
            
            <td>{{ $value->name }}</td>
            <td>{{ $value->prenom }}</td>
            <td>{{ $value->login}}</td>
            
            <td>{{ $value->email}}</td>
            <td>{{ $value->tel}}</td>
            <td>{{ $value->specialite}}</td>
            <td style="color:blue">{{ $value->role}}</td>
            
            <td>
                <form action="{{ route('users.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('users.show',$value->id) }}">Voir</a>    
                    <a class="btn btn-primary" href="{{ route('users.edit',$value->id) }}">Modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
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