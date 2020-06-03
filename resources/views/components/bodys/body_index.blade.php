@section('content')

<div class="contents">
	<div class="container">
		<br>
		<h1>@include('components.returnButton'){{ $item->name }}</h1>
		<h5 style="padding-left:80px">分類：{{ $item->class->className }}</h5>
		<div style="padding:5px 0px">
			<div class="d-flex" style="padding: 0px 0px 10px 300px">
	      <button id="cntContact" type="button" class="w-50 btn btn-outline-primary mr-auto" data-text-default="今回が初回お問合せです" data-text-clicked="2回目以降のお問合せです">今回が初回お問合せです</button>
	      <button type="button" class="w-25 btn btn-success" onclick="copyToClipboard()">CopyText</button>
			</div>
		</div>
		@if(isset($item->caution))
    	<!-- <textarea readonly id="caution" class="form-control" style="height:200px">{{ $item -> caution }}</textarea> -->
			<div style="padding-bottom:20px">
				<textarea readonly id="caution" class="form-control">{{ $item -> caution }}</textarea>
			</div>
		@endif
			<textarea id="textarea" class="form-control">{{ $item->body }}</textarea>
	</div>
</div>

@endsection
