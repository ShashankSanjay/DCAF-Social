@extends('site.layouts.default')
 
{{-- Web site Title --}}
@section('title')
DCAF
@stop

{{-- Outline --}}
@section('outline')
	@if ( Session::get('error') )
    	<div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif

    @if ( Session::get('notice') )
    	<div class="alert">{{ Session::get('notice') }}</div>
    @endif
@stop
