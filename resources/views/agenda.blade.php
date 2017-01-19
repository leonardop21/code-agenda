@extends('layout')

@section('content')

@foreach($peoples as person)
	<div class="col-md-6">
		@include('templates.contato')
	</div>

@endforeach

@endsection