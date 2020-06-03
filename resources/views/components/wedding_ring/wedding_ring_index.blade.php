@section('content')

<div class="contents">
	<div class="container">
		<br>
		<h1>テンプレート</h1>
		<h5>分類：テンプレート</h5>
		<div style="padding-bottom:10px">
			<form class="form-horizontal" action="{{asset('subjects')}}" method="post">
			@include('components.searchBox',['items' => $ringClass,'className'=>$className])
			</form>
		</div>
		<div class="d-flex" style="padding: 0px 0px 10px 300px">
	    <button id="cntContact" type="button" class="w-50 btn btn-outline-primary mr-auto" data-text-default="今回が初回お問合せです" data-text-clicked="2回目以降のお問合せです">今回が初回お問合せです</button>
	    <button type="button" class="w-25 btn btn-success" onclick="copyToClipboard()">CopyText</button>
		</div>
  		<textarea id="textarea" class="form-control">テンプレート</textarea>
		<div style="padding-top:20px">
			<textarea readonly id="caution" class="form-control">テンプレート</textarea>
		</div>
	</div>
</div>

@endsection
