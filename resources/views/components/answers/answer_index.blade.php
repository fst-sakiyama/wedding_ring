@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'回答集一覧'])

        <div class="row">
            <div class="col-sm-12">
                <form action="{{ asset('answers/add') }}" method="post">
                    <input type="hidden" id="id" name="id" value="">
                @include('components.answerAddForm',['thisTitle'=>'回答集に追加','item'=>null])
                </form>
            </div>
        </div>

        <div id="areaBox">
            @foreach($items as $item)
            <div class="row">
				<div class="col-sm-12">
					ID：{{ $item->id }}
				</div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea id="{{ $item->id }}" class="form-control mb-sm-2 copyArea" style="height:100px">{{ $item->answer }}</textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <a href="answers/edit?id={{$item->id}}"><input type="button" class="form-control btn btn-success mb-sm-2 correctBtn" value="ID：{{ $item->id }}を修正"></a>
                    <a href="answers/remove?id={{$item->id}}"><input type="button" class="form-control btn btn-danger" value="ID：{{ $item->id }}を削除"></a>
                </div>
            </div>
            @endforeach
        </div>

		@if(!empty($deleted[0]->id))
		<br>
		<h3>削除済</h3>
		<br>
        @foreach($deleted as $delete)
		<div class="row">
			<div class="col-sm-12">
				ID：{{ $delete->id }}
			</div>
			<div class="col-sm-10">
				<div class="form-group">
					<textarea id="{{ $delete->id }}" class="form-control mb-sm-2 copyArea" style="height:100px">{{ $delete->answer }}</textarea>
				</div>
			</div>
			<div class="col-sm-2">
				<a href="answers/restore?id={{$delete->id}}"><input type="button" class="form-control btn btn-success mb-sm-2 correctBtn" value="ID：{{ $delete->id }}を復旧"></a>
				<a href="answers/force_delete?id={{$delete->id}}"><input type="button" class="form-control btn btn-danger" value="ID：{{ $delete->id }}を完全削除"></a>
			</div>
		</div>
        @endforeach
		@endif
	</div>
</div>

@endsection
