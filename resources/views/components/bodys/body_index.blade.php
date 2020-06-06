@section('content')

<div class="contents">
	<div class="container">
		<br>
		<h1>@include('components.returnButton'){{ $item->name }}</h1>
		<h5 style="padding-left:80px">分類：{{ $item->class->className }}</h5>
		<div class="col-sm-12">
			<div class="mb-sm-3">
				<div class="form-row">
					<div class="col-sm-8">
					    @include('components.cntContact')
					</div>
					<div class="col-sm-4 text-right">
					    @include('components.copyText')
					</div>
				</div>
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
