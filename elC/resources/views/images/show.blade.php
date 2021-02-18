
@extends('images.parent')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
 <h3>Nom de Patient -  {{ $data->nomPatient }} </h3>
 <h3>Prenom de Patient-  {{ $data->prenomPatient }} </h3>
 <h3>Libelle -  {{ $data->labelle }}</h3>
</div>
@endsection