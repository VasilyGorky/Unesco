@foreach($forums as $forum)

<li id="li-comment-{{$forum->id}}" class="comment">
	<div id="comment-{{$forum->id}}" class="comment-container">
		<div class="comment-author vcard">

			@if($forum->user_id != 0)

				@if($forum->gender == 'male')
				<a class="btn btn-default" href="{{ url('profile/'.$forum->user_id) }}">
				<img alt="" src="{{ asset('/img/img_male.png') }}" class="avatar" height="75" width="75" />
				<cite class="fn">{{$forum->firstname}} </cite></a>
				@else
					<a class="btn btn-default" href="{{ url('profile/'.$forum->user_id) }}">
						<img alt="" src="{{ asset('/img/img_female.png') }}" class="avatar" height="75" width="75" />
						<cite class="fn">{{$forum->firstname}} </cite></a>
			@endif



			@else($item->user_id == 0)

				<img alt="" src="{{ asset('/img/img_unknown.png') }}" class="avatar" height="75" width="75" />
				<cite class="fn">{{$forum->firstname}} </cite>

			@endif


		</div>

		<div class="comment-meta commentmetadata">
			<div class="intro">
				<div class="commentDate">
					{{ is_object($forum->created_at) ? $forum->created_at->format('d.m.Y в H:i') : ''}}
				</div>
				@if($forum->user_id == 0)
					<div align="right" style="color: red">не авторизован</div>
					@endif

			</div>
			<div class="comment-body">
				<p>{{ $forum->text }}</p>
			</div>
			<div class="reply group">
				<a class="comment-reply-link" href="#respond" onclick="return addComment.moveForm('comment-{{$forum->id}}', '{{$forum->id}}', 'respond', '{{$forum->item_id}}')">Ответить</a>
			<div align="left">
				@if(\Illuminate\Support\Facades\Auth::check() && Auth::user()->isAdmin())

					{!! Form::open(['url' => 'admin/item/comment/'.$forum->id, 'method'=>'delete', 'style' => '']) !!}
					{{ Form::submit('Удалить x', ['class' => 'btn']) }}
					{!! Form::close() !!}
				@endif
			</div>
			</div>
		</div>
	</div>


	@if(isset($com[$forum->id]))
		<ul class="children">
			@include('forumComments.comment', ['forums' => $com[$forum->id]])
		</ul>
	@endif

</li>

@endforeach