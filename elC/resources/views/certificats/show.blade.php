@extends('admin.admin')
  
@section('content')

<style>
    
    @media print {
  #printPageButton {
    display: none;
   border:none;

  }
}
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Certificat Medicale </h2><br><br>
            </div>
            
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de medecin</strong>
                {{ $certificat->medecin }}
                <br><br>
            </div>

            <div class="form-group">
                <strong>Nom de patient</strong>
                {{ $certificat->patient }}<br><br>
            </div>

            <div class="form-group">
                <strong>Date</strong>
                {{ $certificat->date }}<br><br>
            </div>

             <div class="form-group">
                <strong>Description</strong>
                {{ $certificat->description }}<br><br>
            </div>


        </div>
         
        
<div class="pull-right">
    <table  width="20%">
        <tr>
              <td> <br><br> <a class="btn btn-info" id="printPageButton" href="{{ url()->previous() }}">Retoure</a></td>
               <td> <br><br> <button id="printPageButton" class="btn btn-info" onClick="window.print();">Imprimer</button></a></td>
        </tr>
            
</table>

    
@endsection