@section('content')

<div class="contents">
	<div class="container">
		<br>
		<h1 style="padding-bottom:10px">@include('components.returnButton')テンプレートの新規登録</h1>
    @if (count($errors) > 0)
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
      <form action="{{asset('templates/add')}}" method="post">
				@csrf
	      <div class="form-group row">
	        <label class="col-sm-2 col-form-label">分類：</label>
	        <div class="col-sm-10">
						<select id="class_id" class="form-control @error('class_id') is-invalid @enderror" name="class_id" autofocus>
              @foreach($items as $item)
              <option value="{{ $item -> id }}" {{ isset($id) && $id==$item->id ? 'selected' : '' }}>{{ $item -> className }}</option>
              @endforeach
           </select>
	       </div>
	       </div>
	       <div class="form-group row">
	         <label class="col-sm-2 col-form-label">件名：</label>
	         <div class="col-sm-10">
	          <input type ="text" name="name" value="" class="form-control">
	        </div>
	      </div>
	      <div class="form-group row">
	        <label class="col-sm-2 col-form-label">本文：</label>
	        <div class="col-sm-10">
	          <textarea id="textarea" class="form-control" name="body" style="height:600px"></textarea>
	        </div>
	       </div>
	       <div class="form-group row">
	         <label class="col-sm-2 col-form-label">注意事項：</label>
	         <div class="col-sm-10">
	           <textarea id="caution" class="form-control" name="caution" style="height:200px"></textarea>
	        </div>
	      </div>
	      <div class="text-center" style="padding-top:10px">
	        <button type="submit" class="btn btn-primary">テンプレートの新規登録</button>
	      </div>
      </form>
	</div>
</div>

@endsection
