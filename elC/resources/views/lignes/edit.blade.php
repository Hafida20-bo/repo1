@extends('admin.admin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier une Ligne perscription</h2><br>
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
  
    <form action="{{ route('lignes.update',$ligne->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                    <input type="hidden" name="idP" value="{{ $ligne->idP }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Medicament*</strong><br>
                    <input type="text" name="medicament" value="{{ $ligne->medicament }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dose*</strong><br>
                    <input type="text" name="dose" value="{{ $ligne->dose }}" class="form-control" placeholder="Title">
                </div>
            </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Moment *</strong><br>
                    <input type="text" name="moment" value="{{ $ligne->moment }}" class="form-control" placeholder="Title">
                </div>
            </div>

         

           


        
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>  <button type="submit" class="btn btn-info">Modifier</button>
            </div>
        </div>
   
    </form>
@endsection