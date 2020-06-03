@section('content')

<div class="contents">
	<div class="container">
		<br>
		<h1 style="padding-bottom:10px">@include('components.returnButton')分類の新規作成</h1>
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
      <form action="{{asset('classes/add')}}" method="post">
        @csrf
        <tr>
          <th>分類名：</th>
          <td>
            <input type ="text" name="className" value="{{old('className')}}">
            <input type="hidden" name="seq" value="{{ $item+=1 }}">
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" class="btn btn-primary">部署新規登録</button>
          </td>
        </tr>
      </form>
		</table>
	</div>
</div>

@endsection
