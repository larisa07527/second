@extends('layout.master')
@section('menu')
@parent
@endsection
@section('content')	
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 dleft">
		<div  align="center">
			<div class="label label-info" align="center" style="margin:10px;">Список тем</div>
		</div>
		
			{!!Form::open(['action'=>'TopicController@search'])!!}
			
				{!! Form::text('search',"",array('class'=>'form-control')) !!}
				<button class="btn btn-success" type="submit">Поиск</button>

			{!!Form::close()!!}
		<ul>
			@foreach($topics as $t)
			<li class="list-group-item">
				<a href="{{url('topic/'.$t->id)}}">{{$t->topicname}}</a>
			</li>
			@endforeach
		</ul>			
	</div>
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 dright ">
		<div  align="center">
			<div class="label label-info" align="center" style="margin:10px;">{{$page}}</div>
		</div>
		@if($id!=0)
			@foreach($blocks as $b)
			<div>
				<h2>{{$b->title}}</h2>
				@if($b->imagePath!="")
				<a href="{{url($b->imagePath)}}" target="_blank" class="wrap-image">
					<img src="{{asset($b->imagePath)}}" height="150px" alt="картинка"/>
				</a>

				@endif
				<pre class="pre_text">{{$b->content}}</pre>
			</div>
			@endforeach
		@endif
	</div>
</div>
@endsection
