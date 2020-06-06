@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'テンプレートの修正'])
    @if (count($errors) > 0)
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{asset('templates/edit')}}" method="post">
      @csrf
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">分類：</label>
        <div class="col-sm-10">
          <select id="class_id" class="form-control @error('class_id') is-invalid @enderror" name="class_id" autofocus>
            @foreach($classes as $class)
            <option value="{{ $class -> id }}" {{ $class->id == $item->class_id ? 'selected' : '' }}>{{ $class -> className }}</option>
            @endforeach
         </select>
       </div>
       </div>
       <div class="form-group row">
         <label class="col-sm-2 col-form-label">件名：</label>
         <div class="col-sm-10">
          <input type ="text" name="name" value="{{ $item->name }}" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">本文：</label>
        <div class="col-sm-10">
          <textarea id="textarea" class="form-control" name="body">{{ $item->body }}</textarea>
        </div>
      </div>
     	<div class="form-group row">
       <label class="col-sm-2 col-form-label">注意事項：</label>
       <div class="col-sm-10">
         <textarea id="caution" class="form-control" name="caution">{{ $item->caution }}</textarea>
    	</div>
    	</div>
      <div class="text-center" style="padding-top:10px">
        <input type="hidden" name="id" value="{{ $item->id }}">
        <button type="submit" class="btn btn-primary">テンプレートの修正を実行</button>
      </div>
    </form>

	</div>
</div>

@endsection
