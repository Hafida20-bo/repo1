@extends('admin.admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Une Certificat Medicale</h2>
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
  
    <form action="{{ route('certificats.update',$certificat->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom de medecin*</strong>
                    <input type="text" name="medecin" value="{{ $certificat->medecin }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nom de patient*</strong>
                    <input type="text" name="patient" value="{{ $certificat->patient }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date *</strong>
                    <input type="text" name="date" value="{{ $certificat->date }}" class="form-control" placeholder="Title">
                </div>
            </div>

         
 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description *</strong>
                    <input type="text" name="description" value="{{ $certificat->description }}" class="form-control" placeholder="Title">
                </div>
            </div>
           


        
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
   
    </form>
@endsection