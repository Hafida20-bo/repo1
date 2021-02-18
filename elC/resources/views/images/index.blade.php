@php $data=App\Models\Crud::all();@endphp
@extends('images.parent')
@section('main')
<div class="pull-right">
                <a class="btn btn-success" href="{{ route('crud.create') }}"> Ajouter une Imagerie</a>
            </div>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">Nom de patient </th>
  <th width="35%">prenom de patient</th>
  <th width="35%">Labelle</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->nomPatient }}</td>
   <td>{{ $row->prenomPatient }}</td>
   <td>{{ $row->labelle }}</td>
   <td>
    
   </td>
  </tr>
 @endforeach
</table>

@endsection