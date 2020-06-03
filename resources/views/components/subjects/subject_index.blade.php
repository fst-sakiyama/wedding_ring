@section('content')

<div class="contents">
	<div class="container">
		<br>
		@if(isset($className))
		<h1 style="padding-bottom:10px">@include('components.returnButton'){{ $className->className }}</h1>
		@else
		<h1 style="padding-bottom:10px">@include('components.returnButton')件名一覧</h1>
		@endif
		<div style="padding-bottom:10px">
		<form class="form-horizontal" action="{{asset('subjects')}}" method="post">
		@include('components.searchBox',['items' => $ringClass,'className'=>$className])
		</form>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>分類</th>
					<th>件名</th>
					<th>注意事項</th>
					<th>
						<a href="{{asset('/templates/add')}}{{ isset($className) ? '?id='.$className->id : '' }}">@include('components.newEntry')</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
				<tr>
					<td>{{ $item -> class -> className }}</td>
          <td><a href="{{asset('/bodys?id=')}}{{$item->id}}">{{ $item -> name }}</a></td>
					<td>{{ isset($item->caution) ? 'あり' : 'なし' }}</td>
					<td>
            <a href="{{asset('/templates/edit?id=')}}{{$item->id}}">
							<spam  style="padding-right:20px">
								<button type="button" class="btn btn-outline-success" style="width:100px">修正</button>
							</span>
						</a>
            <a href="{{asset('/templates/remove?id=')}}{{$item->id}}">
							<button type="button" class="btn btn-outline-danger" style="width:100px">削除</button>
						</a>
          </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if(isset($deleted))
		<br>
		<h3>削除済</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>分類</th>
					<th>件名</th>
					<th>注意事項</th>
					<th>

					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($deleted as $delete)
				<tr>
					<td>{{ $delete -> class -> className }}</td>
					<td>{{ $delete -> name }}</td>
					<td>{{ isset($delete->caution) ? 'あり' : 'なし' }}</td>
					<td>
						<div class="form-row">
						<form action="{{asset('/subjects/restore?id=')}}{{ $delete->id }}" method="POST">
							@csrf
							<div class="form-group col-2">
								<input type="submit" class="btn btn-outline-success" value="復旧" name="restore" style="width:100px">
							</div>
						</form>
						<form action="{{asset('/subjects/force_delete?id=')}}{{ $delete->id }}" method="POST">
							@csrf
							<div class="form-group col-2">
								<input type="submit" class="btn btn-outline-danger" value="完全削除" name="force_delete" style="width:100px">
							</div>
						</form>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	</div>
</div>

@endsection
