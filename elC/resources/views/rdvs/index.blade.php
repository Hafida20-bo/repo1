@extends('admin.admin')

@section('content')
@php
  
   $data = App\Models\Rdv::all();
   
@endphp





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>


    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('rdvs.create') }}"> Creer un Rdv</a>
            </div>
        </div>
    </div>
   <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
        <table id="example5" class="table">
       <thead class="thead-dark">
        <tr>
           
            <th>Medecin*</th>
            <th>Patient</th>
           
            <th>date de debut</th>
            <th>date de fin</th>
            <th>Motif</th>
            <th width="280px">Action</th>
        </tr></thead>
        @foreach ($data as $key => $value)
        <tbody><tr>
          
            <td>{{ $value->medecin }}</td>
            <td>{{ $value->patient }}</td>
            
            <td>{{ $value->date_debut }}</td>
            <td>{{ $value->date_fin }}</td>
            <td>{{ $value->motif }}</td>
            <td>
                <form action="{{ route('rdvs.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('rdvs.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('rdvs.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            
        </tr>
        </tbody>
        @endforeach
    </table>  <script>$(document).ready(function() {
    $('#example5').DataTable();
} );</script>
    

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<br><br>
<h1 style="color:#eb4559">Calendrier</h1><br><br>

<div id='calendar'></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
            @foreach($data as $key => $value)
                
            
               {
        title: '{{ $value->medecin. ' \n' . $value->patient. '\n '.$value->date_debut.'\n'.$value->date_fin.'\n'.$value->motif }}',
        
        
        start: '{{ $value->date_debut }}',
        textColor: 'white',
        backgroundColor: '#'
      },
            @endforeach  
            ],
        })
    });
</script>      
    
@endsection