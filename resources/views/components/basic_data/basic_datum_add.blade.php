@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'基本情報の新規登録'])
    @if (count($errors) > 0)
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
      <form action="{{asset('basic_data/add')}}" method="post">
				@csrf
        <div class="form-group row">
	        <label class="col-sm-2 col-form-label">略称：</label>
	        <div class="col-sm-10">
 	          <input type ="text" name="shortName" value="{{ old('shortName') }}" class="form-control" required>
          </select>
	       </div>
       </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">正式名称：</label>
          <div class="col-sm-10">
            <input type ="text" name="formalName" value="{{ old('formalName') }}" class="form-control" required>
          </div>
        </div>

				<div class="form-group row">
	        <label class="col-sm-2 col-form-label">URL：</label>
	        <div class="col-sm-10">
	          <input type="text" name="pageURL" value="{{ old('pageURL') }}" class="form-control" required>
	        </div>
	       </div>

	       <div class="form-group row">
	         <label class="col-sm-2 col-form-label">エントリー完了メール【件名】：</label>
	         <div class="col-sm-10">
	           <input type="text" name="subjectEntry" value="{{ old('subjectEntry') }}" class="form-control">
	        </div>
	      </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">エントリー完了メール【本文】：</label>
          <div class="col-sm-10">
            <textarea type="text" name="bodyEntry" class="form-control" style="height:200px">{{ old('bodyEntry') }}</textarea>
         </div>
       </div>

       <div class="form-group row">
         <label class="col-sm-2 col-form-label">正式応募完了メール【件名】：</label>
         <div class="col-sm-10">
           <input type="text" name="subjectApply" value="{{ old('subjectApply') }}" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">正式応募完了メール【本文】：</label>
        <div class="col-sm-10">
          <textarea type="text" name="bodyApply" class="form-control" style="height:200px">{{ old('bodyApply') }}</textarea>
       </div>
     </div>

	      <div class="text-center" style="padding-top:10px">
	        <button type="submit" class="btn btn-primary">テンプレートの新規登録</button>
	      </div>
      </form>
	</div>
</div>

@endsection
