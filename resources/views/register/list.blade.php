@extends('layout.template') 
@section('list','register')
@section('add','register/create')
@section('content')

@if (session('msg'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('msg') }}
    </div>
@endif

@foreach($patients as $item)
<div class="panel panel-primary">

  <div class="panel-heading">
    <h3 class="panel-title">ID: {{$item->patient_no}} / {{$item->first_name}}</h3>
  </div>
  
  <ul class="list-group">
    <li class="list-group-item">{{$item->first_name}} {{$item->last_name}}</li>
    <li class="list-group-item">Age: {{$item->age}}</li>
    <li class="list-group-item">Contact No: {{$item->contact_no}}</li>
    <li class="list-group-item">{{substr($item->remarks, 0, 100).'...'}}</li>
  </ul>
  
  <div class="panel-footer">
  	<div class="row">
  		<div class="col-md-4 col-xs-4 text-left">
   			<a class="btn btn-danger btn-xs" href="/register/{{$item->patient_id}}/delete"><i class="glyphicon glyphicon-trash"></i> Delete</a>
   		</div>
   		
   		<div class="col-md-4 col-xs-4 text-center">
   			<a class="btn btn-warning btn-xs" href="/register/{{$item->patient_id}}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
   		</div>
   		<div class="col-md-4 col-xs-4 text-right">
   			<a class="btn btn-warning btn-xs" href="/register/{{$item->patient_id}}/edit"><i class="glyphicon glyphicon-edit"></i> Edit</a>
   		</div>
   		
   	</div>
  </div>
</div>
@endforeach

<div class="col-md-12 text-center">
<nav aria-label="">
  <ul class="pager">
    <li><a href="{{$patients->previousPageUrl()}}"><span aria-hidden="true">&larr;</span> Previous</a></li>
    <li><a href="{{$patients->nextPageUrl()}}">Next <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
</div>
@endsection