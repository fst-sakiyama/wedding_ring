@section('content')

<div class="contents">
	<div class="container">
		<br>
        @include('components.titleText',['title'=>'検索結果～テンプレ対応できない回答作成システム'])
		<br>

        @foreach($items as $item)
        <div class="row">
            <div class="col-sm-12">
                <div class="mb-sm-2">
                    <textarea class="form-control copyArea" style="height:100px">{{ $item->answer }}</textarea>
                </div>
            </div>
        </div>
        @endforeach


	</div>
</div>

@endsection
