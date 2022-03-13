
@extends("layouts.frontend")
 @section('content') 
<div class="container px-6 mx-auto">
    <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
            <img src="{{ url($product->image) }}" alt="a" class="w-full max-h-60">
            <div class="flex items-end justify-end w-full bg-cover">      
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{$product->name}}</h3>
                <span class="mt-2 text-gray-500">${{$product->price}}</span>
                <form action="{{route('cart.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$product->id}}"  name="id">
                    <input type="hidden" value="{{$product->name}}"name="name">
                    <input type="hidden" value="{{$product->price}}"name="price">
                    <input type="hidden" value="{{$product->image}}"name="image">
                    <input type="hidden" value="1" name="quantity">
                     <div style="width: 60vh;">
                    <a class="btn btn-info col-2" href="{{route('posts.show',$product->id)}}">show</a>
                    <a class="btn btn-warning col-2"href="{{route('posts.edit',$product->id)}}">edit</a>
                    <form  method="POST" action="{{route('posts.destroy',$product->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                     </div>
                </div>            
                </div>
                @endforeach
                <a class="btn btn-outline-secondary" href= "{{route('posts.create')}}">add product</a>
                <a class="btn btn-primary" href="showusers">show users</a>
                </div>
             
               @endsection