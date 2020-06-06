@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'分類の修正'])
    @if (count($errors) > 0)
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
		<table class="table">
      <form action="{{asset('classes/edit')}}" method="post">
        @csrf
        <tr>
          <th>現在の分類名：</th>
          <td>
            <input disabled type ="text" name="className" value="{{ $item->className }}">
          </td>
        </tr>
        <tr>
          <th>新しい分類名：</th>
          <td>
            <input type ="text" name="className" value="">
            <input type="hidden" name="id" value="{{ $item->id }}">
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" class="btn btn-primary">分類名修正</button>
          </td>
        </tr>
      </form>
		</table>
	</div>
</div>

@endsection
