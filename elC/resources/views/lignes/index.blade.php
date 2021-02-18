@extends('admin.admin')
   
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lignes.create') }}"> Ajouter une Ligne perscriptiont</a>
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
            <th type="hidden">NO</th>
             <th type="hidden">iPp</th>
            <th>MEDICAMENT</th>
            <th>DOSE</th>
            <th>MOMENT DE PRISE</th>
            <th width="280px">Action</th>
        </tr>


        @foreach ($data as $key => $value)
        <tr>
            <td type="hidden">{{ ++$i }}</td>
             <td type="hidden">{{ $value->idP }}</td>
            <td>{{ $value->medicament }}</td>
            <td>{{ $value->dose }}</td>
            <td>{{ $value->moment}}</td>
            
            <td>
                <form action="{{ route('lignes.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('lignes.show',$value->id) }}">Voir</a>    
                    <a class="btn btn-primary" href="{{ route('lignes.edit',$value->id) }}">Modifier</a>   
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