
@extends("layouts.frontend")
 @section('content') 
 <div class="container">
    <form method="POST" action="{{route('posts.update',$products->id)}}"> 
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">username</label>
          <input type="text" class="form-control"  name="name"  value="{{$products->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">price</label>
            <input type="text" class="form-control" name="price" value="{{$products->price}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" class="form-control" name="description"  value="{{$products->description}}">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">image</label>
          <input type="text" class="form-control" name="image" value="{{$products->image}}">
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
      </form>
   @endsection
  