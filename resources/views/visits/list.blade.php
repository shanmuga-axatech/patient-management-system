<?php
use App\Http\Controllers\Visits;
?>
@extends('layout.template') @section('list','visits')
@section('add','visits/create') @section('content') @if (session('msg'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"
		aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	{{ session('msg') }}
</div>
@endif

<ul class="list-group">
	<li class="list-group-item">{{$patient_name}}</li>
	<li class="list-group-item"><strong>ID:</strong> {{$patient_no}}</li>
	<li class="list-group-item"><strong>Age:</strong> {{$age}}</li>
	<li class="list-group-item"><strong>Contact No:</strong>
		{{$contact_no}}</li>
</ul>
<hr />
@foreach($visits as $item)
<div class="panel panel-primary">

	<div class="panel-heading">
		<h3 class="panel-title">#{{$item->visit_id}} :: updated at
			{{date('d/m/Y H:i:s',strtotime($item->updated_at))}}</h3>
	</div>

	<ul class="list-group">
		<li class="list-group-item"
			title="Download Lab Details : {{$item->labdetails}}"><span
			class="badge custom-badge"><a href="{{Visits::getDownloadLink($item, 'lab')}}" class="color-white"><i
					class="glyphicon glyphicon-download-alt"></i></a></span> <strong>Lab</strong>:{{substr($item->labdetails,0,40)}}</li>

		<li class="list-group-item"
			title="Download Prescription Details: {{$item->prescription}}"><span
			class="badge custom-badge"><a href="{{Visits::getDownloadLink($item, 'pre')}}" class="color-white"><i
					class="glyphicon glyphicon-download-alt"></i></a></span> <strong>Pre</strong>:{{substr($item->prescription,0,40)}}</li>

		<li class="list-group-item"
			title="Download Scan Report Details: {{$item->scanreports}}"><span
			class="badge custom-badge"><a href="{{Visits::getDownloadLink($item, 'scn')}}" class="color-white"><i
					class="glyphicon glyphicon-download-alt"></i></a></span> <strong>Scn</strong>:
			{{substr($item->scanreports,0,40)}}</li>
	</ul>

	<div class="panel-footer">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center">
				<a class="btn btn-danger btn-xs btn-block"
					href="/visits/{{$item->visit_id}}/delete"><i
					class="glyphicon glyphicon-trash"></i> Delete</a>
			</div>
		</div>
	</div>
</div>
@endforeach


<div class="col-md-12 text-center">
	<nav aria-label="">
		<ul class="pager">
			<li><a href="{{$visits->previousPageUrl()}}"><span aria-hidden="true">&larr;</span>
					Previous</a></li>
			<li><a href="{{$visits->nextPageUrl()}}">Next <span
					aria-hidden="true">&rarr;</span></a></li>
		</ul>
	</nav>
</div>
@endsection
