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
		{!! Form::model($block, array('action'=>'BlockController@store','files'=>true,'class'=>'form')) !!}
			<div class="form-group">
				{!! Form::label('topicid','Все топики') !!}
				{!! Form::select('topicid',$topics,array('class'=>'form-control')) !!}
				<a href="{{url('topic/create')}}" class="btn btn-info">Добавить новый топик</a>
			</div>
			<div class="form-group">
				{!! Form::label('title','Название блока') !!}
				{!! Form::text('title',"",array('class'=>'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('content','Добавить комментарий') !!}
				{!! Form::textarea('content',"",array('class'=>'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('imagepath','Добавить картинку') !!}
				{!! Form::file('imagepath',"",array('class'=>'form-control')) !!}
			</div>		
			<button type="submit" class="btn btn-success">Добавить block</button>
		{!! Form::close() !!}
	</div>
</div>
@endsection
