<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>soso shop</title>
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <div  class="bg-white">
            <div class="container px-6 py-3 mx-auto">
               <div class="flex items-center justify-between">
                  <div class="flex items-center justify-end w-full">
                     <button class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                     </button>
                  </div>
               </div>
               <nav  class="p-6 mt-4 text-white bg-yellow-300 sm:flex sm:justify-center sm:items-center">
               <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                    <span class="font-semibold text-xl tracking-tight">shopping</span>
                </div>
                  <div class="flex flex-col sm:flex-row">
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="user">Home</a>
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="products">Shop</a>
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="women">women</a>
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="men">men</a>
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="sale">sale</a>
                     <a href="{{ route('cart.list') }}" class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                           <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        {{ Cart::getTotalQuantity()}}
                        my cart
                     </a>
                  </div>
               </nav>
            </div>
         
         <main class="my-8">
            @yield('content')
         </main>
      </div>
   </body>
</html>