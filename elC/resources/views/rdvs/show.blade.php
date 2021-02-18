@extends('admin.admin')
  
@section('content')

@php
$patient = App\Models\Patient::all();
$data = App\Models\Rdv::all();
@endphp

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Afficher Un  Rdv</h2><br>
            </div>
            
        </div>
    </div>
   <div class="pull-right">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Retoure</a><br><br>
            </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Medecin:</strong>
                {{ $rdv->medecin }}<br>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Patient:</strong>
                {{ $rdv->patient }}<br>
            </div>
        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de debut:</strong>
                {{ $rdv->date_debut }}<br>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de fin:</strong>
                {{ $rdv->date_fin }}<br>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Motif:</strong>
                {{ $rdv->motif }}<br>
            </div>
        </div>
        
    </div>
   


   @endsection