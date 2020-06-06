@csrf
<div class="form-group">
    <textarea id="textarea" name="answer" class="form-control mb-sm-2" required>{{ isset($item->answer) ? $item->answer : '' }}</textarea>
    <input type="submit" class="btn btn-primary w-50 float-right mb-sm-4" value="{{ $thisTitle }}">
</div>
