@extends('admin.layout.appadmin')
@section('content')
    <form>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Text Field</label> 
        <div class="col-8">
          <input id="text1" name="text1" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Text Field</label> 
        <div class="col-8">
          <input id="text" name="text" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Text Field</label> 
        <div class="col-8">
          <input id="text2" name="text2" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Text Field</label> 
        <div class="col-8">
          <input id="text3" name="text3" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Text Field</label> 
        <div class="col-8">
          <input id="text4" name="text4" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Text Field</label> 
        <div class="col-8">
          <input id="text5" name="text5" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Text Field</label> 
        <div class="col-8">
          <input id="text6" name="text6" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>

@endsection