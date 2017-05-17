@extends('layout.template')
@section('list','doctor-notes')
@section('add','doctor-notes/create')
@section('content')

@if (session('msg'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('msg') }}
    </div>
@endif

  <ul class="list-group">
    <li class="list-group-item">{{$patient_name}}</li>
    <li class="list-group-item"><strong>ID:</strong> {{$patient_no}}</li>
    <li class="list-group-item"><strong>Age:</strong> {{$age}}</li>
    <li class="list-group-item"><strong>Contact No:</strong> {{$contact_no}}</li>
  </ul>
  <hr />
  @foreach($notes as $item)
	<div class="panel panel-primary">
	
	  <div class="panel-heading">
	    <h3 class="panel-title">#{{$item->note_id}} :: visited at {{date('d/m/Y',strtotime($item->visit_date))}}</h3>
	  </div>
	  
	  <div class="panel-body">
	    {{$item->remarks}}
	  </div>
	  
	  <div class="panel-footer">
	  	<div class="row">
	  		<div class="col-md-12 col-xs-12 text-center">
	   			<a class="btn btn-danger btn-xs btn-block" href="/doctor-notes/{{$item->note_id}}/delete"><i class="glyphicon glyphicon-trash"></i> Delete</a>
	   		</div>	   		
	   	</div>
	  </div>
	</div>
@endforeach
  
  
 <div class="col-md-12 text-center">
	<nav aria-label="">
	  <ul class="pager">
	    <li><a href="{{$notes->previousPageUrl()}}"><span aria-hidden="true">&larr;</span> Previous</a></li>
	    <li><a href="{{$notes->nextPageUrl()}}">Next <span aria-hidden="true">&rarr;</span></a></li>
	  </ul>
	</nav>
</div>
@endsection