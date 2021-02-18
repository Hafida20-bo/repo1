@extends('admin.admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Une Perscription</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('perscriptions.index') }}"> Retoure</a>
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
  
    <form action="{{ route('perscriptions.update',$perscription->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom de medecin*</strong>
                    <input type="text" name="medecin" value="{{ $perscription->medecin }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nom de patient*</strong>
                    <input type="text" name="patient" value="{{ $perscription->patient }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date *</strong>
                    <input type="text" name="date" value="{{ $perscription->date }}" class="form-control" placeholder="Title">
                </div>
            </div>

         

           


        
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
   
    </form>
@endsection