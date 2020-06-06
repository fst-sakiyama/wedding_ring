@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'基本情報一覧'])
		<table class="table">
			<thead>
				<tr>
					<th>略称</th>
					<th>正式名称</th>
					<th>
						<a href="{{asset('/basic_data/add')}}">@include('components.newEntry')</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
				<tr>
					<td><a href="{{asset('/basic_data/detail?id=')}}{{$item->id}}">{{ $item -> shortName }}</a></td>
          <td><a href="{{$item->pageURL}}" target="blank">{{ $item -> formalName }}</a></td>
					<td>
            <a href="{{asset('/basic_data/edit?id=')}}{{$item->id}}">
							<spam  style="padding-right:20px">
								<button type="button" class="btn btn-outline-success" style="width:100px">修正</button>
							</span>
						</a>
            <a href="{{asset('/basic_data/remove?id=')}}{{$item->id}}">
							<button type="button" class="btn btn-outline-danger" style="width:100px">削除</button>
						</a>
          </td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if(!empty($deleted[0]->id))
		<br>
		<h3>削除済</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
          <th>略称</th>
					<th>正式名称</th>
					<th>

					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($deleted as $delete)
				<tr>
					<td>{{ $delete -> shortName }}</td>
					<td>{{ $delete -> formalName }}</td>
					<td>
						<div class="form-row">
						<form action="{{asset('/basic_data/restore?id=')}}{{ $delete->id }}" method="POST">
							@csrf
							<div class="form-group col-2">
								<input type="submit" class="btn btn-outline-success" value="復旧" name="restore" style="width:100px">
							</div>
						</form>
						<!-- <form action="{{asset('/basic_data/force_delete?id=')}}{{ $delete->id }}" method="POST">
							@csrf
							<div class="form-group col-2">
								<input type="submit" class="btn btn-outline-danger" value="完全削除" name="force_delete" style="width:100px">
							</div>
						</form> -->
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
