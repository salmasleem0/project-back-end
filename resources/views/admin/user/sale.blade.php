@extends("layouts.frontend")
 @section('content') 
<div class="container px-6 mx-auto">
    <h3 class="text-2xl font-medium text-gray-700">sales List</h3>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($sales as $sale)
        <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
            <img src="{{ url($sale->image) }}" alt="b" class="w-full max-h-60">
            <div class="flex items-end justify-end w-full bg-cover">
                
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $sale->name }}</h3>
                <span class="sp mt-2 text-gray-500">${{ $sale->price }}</span>
                <style>
                    .sp {
                        color: red;
                    }
                </style>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $sale->id }}" name="id">
                    <input type="hidden" value="{{ $sale->name }}"name="name">
                    <input type="hidden" value="{{ $sale->price }}" name="price">
                    <input type="hidden" value="{{ $sale->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                </form>
            </div>
            
        </div>
        @endforeach
    </div>
    @endsection