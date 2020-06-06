@csrf
<div id="searchForm" class="ml-5">
  <div class="form-group">
    <select id="class_id" class="form-control w-25" name="class_id" autofocus>
      <option value="" selected>すべて</option>
      @foreach($items as $item)
      <option value="{{ $item -> id }}" {{ isset($className) && $className->id==$item->id ? 'selected' : '' }}>{{ $item -> className }}</option>
      @endforeach
   </select>
 </div>
  <div class="form-group">
    <div id="templateBox[0]" class="templateBox">
      <div class="form-inline" style="padding-bottom:5px">
        <input type="text" id='search' name="search[0]" class="form-control search w-75" placeholder="検索語句追加" value="">
        <input type="button" id='delBtn' name="delBtn" class="btn delBtn" value="削除">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class ="form-inline">
      <input type="button" id="addBox" class="btn" value="追加">
      <input type="submit" class="btn w-50 ml-5" value="検索実行" style="margin-right:50px;">
    </div>
  </div>
</div>
