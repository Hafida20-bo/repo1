@extends('admin.admin')
   
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('perscriptions.create') }}"> Ajouter une perscriptiont</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>MEDECIN</th>
            <th>PATIENT</th>
            <th>DATE</th>
            <th width="280px">Action</th>
        </tr>


        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->medecin }}</td>
            <td>{{ $value->patient }}</td>
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
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection