
@extends("layouts.frontend")
@section('content') 
    
<div class="container">
<form method="POST" action="{{route('posts.store')}}"> 
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">name</label>
      <input type="text" class="form-control"  name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">price</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">description</label>
        <input type="text" class="form-control" name="description">
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">image</label>
      <input type="text" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a class="btn btn-dark" href="/dashboard">back</a>

</div>
  @endsection 