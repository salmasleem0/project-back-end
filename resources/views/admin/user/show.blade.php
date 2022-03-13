@extends("layouts.frontend")
 @section('content')
 <h1>show page</h1>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" class="form-control" value="{{$products->name}}" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">price</label>
            <input type="text" class="form-control" value="{{$products->price}}" readonly>
          </div> 
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" class="form-control" name="description"  value="{{$products->description}}"readonly>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input type="text" class="form-control" value="{{$products->image}}" readonly>
          </div>
      </form>
     
  @endsection