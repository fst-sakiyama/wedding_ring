@section('content')

<div class="contents">
	<div class="container">
		<br>
		@include('components.titleText',['title'=>'基本情報の詳細'])

	      <div class="form-group row">
	        <label class="col-sm-3 col-form-label">略称：</label>
	        <div class="col-sm-9">
 	          <input type ="text" name="shortName" value="{{ $item->shortName }}" class="form-control copyArea" readonly>
          </select>
	       </div>
       </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label">正式名称：</label>
          <div class="col-sm-9">
            <input type ="text" name="formalName" value="{{ $item->formalName }}" class="form-control copyArea" readonly>
          </div>
        </div>

		<div class="form-group row">
	        <label class="col-sm-3 col-form-label">URL：</label>
	        <div class="col-sm-9">
	          <input type="text" name="pageURL" value="{{ $item->pageURL}}" class="form-control copyArea" readonly>
	        </div>
	     </div>

	       <div class="form-group row">
	         <label class="col-sm-3 col-form-label">エントリー完了メール【件名】：</label>
	         <div class="col-sm-9">
	           <input type="text" name="subjectEntry" value="{{ $item->subjectEntry }}" class="form-control copyArea" readonly>
	        </div>
	      </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label">エントリー完了メール【本文】：</label>
          <div class="col-sm-9">
            <textarea type="text" name="bodyEntry" class="form-control copyArea" readonly>{{ $item->bodyEntry }}</textarea>
         </div>
       </div>

       <div class="form-group row">
         <label class="col-sm-3 col-form-label">正式応募完了メール【件名】：</label>
         <div class="col-sm-9">
           <input type="text" name="subjectApply" value="{{ $item->subjectApply }}" class="form-control copyArea" readonly>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">正式応募完了メール【本文】：</label>
        <div class="col-sm-9">
          <textarea type="text" name="bodyApply" class="form-control copyArea" readonly>{{ $item->bodyApply }}</textarea>
       </div>
     </div>

	</div>
</div>

@endsection
