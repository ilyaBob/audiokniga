<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="{{$name}}" name="{{$name}}" @checked(old($name, $value))>
    <label class="form-check-label" for="{{$name}}">{{$title}}</label>
</div>
@error($name)
<div class="alert alert-danger mt-3">{{$message}}</div>
@enderror
