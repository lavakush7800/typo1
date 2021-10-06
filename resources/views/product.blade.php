@extends('layouts.app')

@section('content')
<div class="container">
  <h2>LS Product</h2>
  <form method="post" action="/save" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="" name="image">
    </div>
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="name" placeholder="" name="name">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="" name="price">
    </div>
    <div class="form-group">
      <label for="description">Descriptions:</label>
      <!-- <textarea type="textarea" class="form-control" id="description" placeholder="" name="description"></textarea> -->
      <input type="text" class="form-control" id="description" placeholder="" name="description">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection

