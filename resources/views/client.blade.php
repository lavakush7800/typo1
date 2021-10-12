@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Add Clients</h2>
  <form method="post" action="/clents-data">
      @csrf
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="name" placeholder="" name="name">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="" name="mobile">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="" name="address">
    </div>
    <button type="submit" class="btn btn-dark btn-block">Submit</button>
  </form>
</div>
@endsection

