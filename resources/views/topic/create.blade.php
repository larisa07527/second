@extends('layout.master')
@section('menu')
@parent
@endsection
@section('content')
	<div class="row">		
		@if(count(session('errors'))>0)
			<div class="alert alert-danger">
				@foreach(session('errors')->all() as $er)
				 {{$er}}<br>
				@endforeach
			</div>
			@endif
			@if(session('message'))
					<div class="alert alert-success">
						{{session('message')}}
					</div>
			@endif
	</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div  align="center">
			<div class="label label-info" align="center" style="margin:10px;">{{$page}}</div>
		</div>
		{!! Form::model($topic, array('action'=>'TopicController@store')) !!}
			<div class="form-group">
				{!! Form::label('topicname','Название темы') !!}
				{!! Form::text('topicname',"",array('class'=>'form-control')) !!}
			</div>
			<button type="submit" class="btn btn-success">Добавить тему</button>
		{!! Form::close() !!}
	</div>

</div>
@endsection
