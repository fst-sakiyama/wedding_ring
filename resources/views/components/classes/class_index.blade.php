@section('content')

<div class="contents">
	<div class="container">
		<br>
		<h1 style="padding-bottom:10px">@include('components.returnButton')分類一覧</h1>
		<table class="table">
			<thead>
				<tr>
					<th>分類名</th>
					<th>
						<a href="{{asset('/classes/add')}}">
						@include('components.newEntry')
					</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
				<tr>
          <td><a href="{{asset('/subjects?id=')}}{{$item->id}}">{{ $item -> className }}</a></td>
					<td>
            <a href="{{asset('/classes/edit?id=')}}{{$item->id}}">
							<spam  style="padding-right:20px">
								<button type="button" class="btn btn-outline-success" style="width:100px">修正</button>
							</span>
						</a>
            <!-- <a href="{{asset('/classes/remove?id=')}}{{$item->id}}">
							<button type="button" class="btn btn-outline-danger">削除</button>
						</a> -->
          </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection
