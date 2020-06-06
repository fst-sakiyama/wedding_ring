@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'基本情報の修正'])
    @if (count($errors) > 0)
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{asset('basic_data/edit')}}" method="post">
      @csrf
	      <div class="form-group row">
	        <label class="col-sm-2 col-form-label">略称：</label>
	        <div class="col-sm-10">
 	          <input type ="text" name="shortName" value="{{ $item->shortName }}" class="form-control">
          </select>
	       </div>
       </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">正式名称：</label>
          <div class="col-sm-10">
            <input type ="text" name="formalName" value="{{ $item->formalName }}" class="form-control">
          </div>
        </div>

				<div class="form-group row">
	        <label class="col-sm-2 col-form-label">URL：</label>
	        <div class="col-sm-10">
	          <input type="text" name="pageURL" value="{{ $item->pageURL}}" class="form-control">
	        </div>
	       </div>

	       <div class="form-group row">
	         <label class="col-sm-2 col-form-label">エントリー完了メール【件名】：</label>
	         <div class="col-sm-10">
	           <input type="text" name="subjectEntry" value="{{ $item->subjectEntry }}" class="form-control">
	        </div>
	      </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">エントリー完了メール【本文】：</label>
          <div class="col-sm-10">
            <textarea type="text" name="bodyEntry" class="form-control" style="height:200px">{{ $item->bodyEntry }}</textarea>
         </div>
       </div>

       <div class="form-group row">
         <label class="col-sm-2 col-form-label">正式応募完了メール【件名】：</label>
         <div class="col-sm-10">
           <input type="text" name="subjectApply" value="{{ $item->subjectApply }}" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">正式応募完了メール【本文】：</label>
        <div class="col-sm-10">
          <textarea type="text" name="bodyApply" class="form-control" style="height:200px">{{ $item->bodyApply }}</textarea>
       </div>
     </div>

     <div class="text-center" style="padding-top:10px">
       <input type="hidden" name="id" value="{{ $item->id }}">
       <button type="submit" class="btn btn-primary">基本情報の修正を実行</button>
     </div>

   </form>
	</div>
</div>

@endsection
