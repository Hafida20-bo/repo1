@extends('admin.admin')

@section('content')

 @php 
$data=App\Models\Ligne::all();
 @endphp

<style>
    
body {font-family: Arial, Helvetica, sans-serif;}



.container {
  padding: 20px;
  background-color: #f1f1f1;
}

p {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  
  box-sizing: border-box;
}

@media print {
  #printPageButton {
    display: none;
   border:none;

  }
}

</style>

 <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 >Ordonnance Médicale</h1><br>
            </div>
           
        </div>
    </div>
    

  <div class="container" style="background-color:white">
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Medecin*</strong>
                {{ $perscription->medecin }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br><br><strong>Patient*</strong>
                {{ $perscription->patient }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br><br><strong>Date*</strong>
                {{ $perscription->date }}
            </div>
        </div>


      
        </div>

  </div>

<div >

    
   

        
    <div class="pull-right" >
             <br><br> <a class="btn btn-info" href="{{ url()->previous() }}"id="printPageButton"> Retoure</a>
            </div>
</div>
<br><br><br>


<h1 id="printPageButton">Ajouter une ligne</h1><br>

<form id="printPageButton" action="{{ route('lignes.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                
                <input type="hidden" name="idP" class="form-control" value="{{$perscription->id}}">
            </div>
            <div class="form-group">
                <strong>Medicament *</strong>
                <input type="text" name="medicament" class="form-control" placeholder="Enter Medicament">
            </div>
            <div class="form-group">
                <br><strong>Dose *</strong>
                <input type="text" name="dose" class="form-control" placeholder="Enter Dose">
            </div>
            <div class="form-group">
               <br> <strong>Moment de prise *</strong>
                <input type="text" name="moment" class="form-control" placeholder="Enter Moment de prise">
            </div>
            
            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 ">
             <br><br>   <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
   
</form>



<br><br>


<table class="table table-bordered" >
        <tr id="printPageButton">
     
            <th style="display:none;">idP</th>
            <th>MEDICAMENT</th>
            <th>DOSE</th>
            <th>MOMENT DE PRISE</th>
            <th width="280px">Action</th>
        </tr>
<!--td style="display:none;"-->

        @foreach ($data as $key => $value)
        @if($value->idP==$perscription->id)
        <tr>
            <td style="display:none;">{{ $value->idP }}</td>
            <td>{{ $value->medicament }}</td>
            <td>{{ $value->dose }}</td>
            <td>{{ $value->moment}}</td>
            <td id="printPageButton">
                <form  action="{{ route('lignes.destroy',$value->id) }}" method="POST" >   
                    <a class="btn btn-info" href="{{ route('lignes.show',$value->id) }}" id="printPageButton">Voir</a>    
                    <a class="btn btn-primary" href="{{ route('lignes.edit',$value->id) }}"id="printPageButton">Modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
    </table>
    <div class="col-xs-12 col-sm-12 col-md-12 ">
             <br>   <button id="printPageButton" class="btn btn-info" onClick="window.print();">Imprimer</button>
        </div>  

</div>
@endsection
