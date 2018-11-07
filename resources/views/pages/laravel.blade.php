@extends('layouts.master')

@section('NoiDung')
<h2>Laravel</h2>


<?php $arrayName = array('JV' =>'JAVA' ,'P' =>'PHP' ,'L' =>'laravel'); ?>

@forelse($arrayName as $value => $key )
	@continue($value == "JV")
	
    {{$value ." ".$key}}
 @empty
 {{"Mang Rong "}}   

 @endforelse
@endsection