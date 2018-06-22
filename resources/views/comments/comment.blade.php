@foreach($items as $item)

<li id="li-comment-{{$item->id}}" class="comment">
	<div id="comment-{{$item->id}}" class="comment-container">
		<div class="comment-author vcard">

			@if($item->user_id != 0)

				@if($item->gender == 'male')
				<a class="btn btn-default" href="{{ url('profile/'.$item->user_id) }}">
				<img alt="" src="{{ asset('/img/img_male.png') }}" class="avatar" height="75" width="75" />
				<cite class="fn">{{$item->firstname}} </cite></a>
				@else
					<a class="btn btn-default" href="{{ url('profile/'.$item->user_id) }}">
						<img alt="" src="{{ asset('/img/img_female.png') }}" class="avatar" height="75" width="75" />
						<cite class="fn">{{$item->firstname}} </cite></a>
			@endif



			@else($item->user_id == 0)

				<img alt="" src="{{ asset('/img/img_unknown.png') }}" class="avatar" height="75" width="75" />
				<cite class="fn">{{$item->firstname}} </cite>

			@endif


		</div>

		<div class="comment-meta commentmetadata">
			<div class="intro">
				<div class="commentDate">
					{{ is_object($item->created_at) ? $item->created_at->format('d.m.Y в H:i') : ''}}
				</div>
				@if($item->user_id == 0)
					<div align="right" style="color: red">не авторизован</div>
					@endif

			</div>
			<div class="comment-body">
				<p>{{ $item->text }}</p>
			</div>
			<div class="reply group">
				<a class="comment-reply-link" href="#respond" onclick="return addComment.moveForm('comment-{{$item->id}}', '{{$item->id}}', 'respond', '{{$item->item_id}}')">Ответить</a>
			<div align="left">
				@if(\Illuminate\Support\Facades\Auth::check() && Auth::user()->isAdmin())

					{!! Form::open(['url' => 'admin/item/comment/'.$item->id, 'method'=>'delete', 'style' => '']) !!}
					{{ Form::submit('Удалить x', ['class' => 'btn']) }}
					{!! Form::close() !!}
				@endif
			</div>
			</div>
		</div>
	</div>


	@if(isset($com[$item->id]))
		<ul class="children">
			@include('comments.comment', ['items' => $com[$item->id]])
		</ul>
	@endif

</li>

@endforeach