@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'回答集の修正'])

        <div class="row">
            <div class="col-sm-12">
                <form action="{{ asset('answers/edit') }}" method="post">
                    <input type="hidden" id="id" name="id" value="{{ $item->id }}">
                @include('components.answerAddForm',['thisTitle'=>'回答集の修正','item'=>$item])
                </form>
            </div>
        </div>
	</div>
</div>

@endsection
