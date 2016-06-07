@extends('layouts.layout')


@section('content')
	<div class="row">
	<div class="col-xs-12 col-md-7">
		<span class="text-large">Yo dawg, I heard you you like text generators </span>
		<br>
		<br>
		<br>
		@if(!isset($lorem))
		Modifications
		<div>
			<form method="post" action="/text">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" id="capital" name="capital" value="0">
				<input type="hidden" id="lower" name="lower" value="0">
				<div class="input">
					<div class="input-text">Number of paragraps</div>
					<input type="text" name="paragraphs" class="" value="1"> 
				</div>
				<div class="input">
					<div class="input-text">Jacked up text</div>
					<div class="checkbox-custom capital"> <i class="fa fa-wrench" aria-hidden="true"></i></div>
				</div> 
				<div class="input">
					<div class="input-text">Slamed text</div>
					<div class="checkbox-custom lowercase"> <i class="fa fa-wrench" aria-hidden="true"></i></div>
				</div>
				<button type="submit" id="post">
					PIMP MY <br> TEXT
				</button> 								 
			</form>
		</div>
		@else
			{!!$lorem!!}
		@endif

	</div>
	<div class="col-xs-12 col-md-5">
		<div class="answer"></div>
	</div>	
		
	</div>
    
@endsection