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
                <h2> Voir  La Lettre</h2> <br>
            </div>
            
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de medecin</strong>
                {{ $lettre->nom_medecin }} <br><br>
            </div>

            <div class="form-group">
                <strong>Nom de patient</strong>
                {{ $lettre->nom_patient }} <br><br>
            </div>

            <div class="form-group">
                <strong>Date</strong>
                {{ $lettre->date }} <br><br>
            </div>

             <div class="form-group">
                <strong>Description</strong>
                {{ $lettre->description }} <br><br>
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