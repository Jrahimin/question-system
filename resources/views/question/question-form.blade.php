@csrf
<div class="form-group">
    <label for="title">Question Title</label>
    <input type="text" name="title" value="{{ old('title', $question->title) }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">

    @if($errors->has('title'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('title') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="body">Question in Detail</label>
    <textarea rows="6" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{ old('body', $question->body) }}</textarea>

    @if($errors->has('body'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('body') }}</strong>
        </div>
    @endif
</div>
<div class="form-group text-right">
    <button type="submit" class="btn btn-primary">{{ $submitBtnTxt }}</button>
</div>
