
<div class="form-group">
    <select id="shortName" class="form-control w-25" name="shortName">
      <option value="0" selected>キャンペーン略称</option>
      @foreach($items as $item)
      <option value="{{ $item -> id }}">{{ $item -> shortName }}</option>
      @endforeach
    </select>
</div>

<div id="basicData">
    @foreach($items as $item)
    <div id="{{ $item->id }}" class="basicData d-none">
        <div class="mx-sm-2">
            <div class="px-sm-2">
                <div class="form-group row">
                    <label class="w-25 col-form-label">正式名称：</label>
                    <div class="w-75">
                    <input type ="text" name="formalName" value="{{ $item->formalName }}" class="form-control copyArea" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="w-25 col-form-label">URL：</label>
                    <div class="w-75">
                    <input type="text" name="pageURL" value="{{ $item->pageURL}}" class="form-control copyArea" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="w-25 col-form-label">エントリー完了メール【件名】：</label>
                    <div class="w-75">
                    <input type="text" name="subjectEntry" value="{{ $item->subjectEntry }}" class="form-control copyArea" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="w-25 col-form-label">エントリー完了メール【本文】：</label>
                    <div class="w-75">
                    <textarea type="text" name="bodyEntry" class="form-control copyArea" readonly>{{ $item->bodyEntry }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="w-25 col-form-label">正式応募完了メール【件名】：</label>
                    <div class="w-75">
                    <input type="text" name="subjectApply" value="{{ $item->subjectApply }}" class="form-control copyArea" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="w-25 col-form-label">正式応募完了メール【本文】：</label>
                    <div class="w-75">
                    <textarea type="text" name="bodyApply" class="form-control copyArea" readonly>{{ $item->bodyApply }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
