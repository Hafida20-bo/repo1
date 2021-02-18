@extends('posts.layout')
  
@section('content')

 @php
   $poster = App\Models\Post::all();
   $data = App\Models\Lettre::all();
@endphp
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   @foreach($poster as $post) @endforeach
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>patient:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>
    </div>
   

<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lettres.create') }}"> Create New letter</a>
            </div>
        </div>
</div>


 <table class="table table-bordered">
        <tr>
            
            <th>Nom Medecin</th>
            <th>Nom Patient</th>
            <th>Date</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value )  @foreach($poster as $post) @endforeach
<!--{{ $value->nom_patient }};
{{ $post->title }};<br>-->
@if( $value->nom_patient == $post->title )
        
        <tr>
            
           <td>{{ $value->nom_medecin }}</td>
           <td>{{ $value->nom_patient }}</td>
           <td>{{ $value->date }}</td>
           <td>{{ $value->description }}</td>
            <td>
                <form action="{{ route('lettres.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('lettres.show',$value->id) }}">voir</a>    
                    <a class="btn btn-primary" href="{{ route('lettres.edit',$value->id) }}">modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
       @endif
        @endforeach
    </table>  
  

   @endsection