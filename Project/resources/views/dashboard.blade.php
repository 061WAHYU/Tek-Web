<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
    <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">PRODUCT</h2>
    <div class="grid grid-cols-4 gap-6">
      <div class="bg-white shadow rounded overflow-hidden">
        <div class="relative">
          <img src="img/shoes2.png" class="w-full shadow-md">
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-pink-500 transition">Jordan</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-pink-600 font-semibold">$100.00</p>
          </div>
        </div>
        <a href="#" class="block w-full text-center text-white bg-green-600 border-green-600 rounded-b hover:bg-green-800">Add To Cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden">
        <div class="relative">
          <img src="img/shoes2.png" class="w-full shadow-md">
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-pink-500 transition">Jordan</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-pink-600 font-semibold">$100.00</p>
          </div>
        </div>
        <a href="#" class="block w-full text-center text-white bg-green-600 border-green-600 rounded-b hover:bg-green-800">Add To Cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden">
        <div class="relative">
          <img src="img/shoes2.png" class="w-full shadow-md">
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-pink-500 transition">Jordan</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-pink-600 font-semibold">$100.00</p>
          </div>
        </div>
        <a href="#" class="block w-full text-center text-white bg-green-600 border-green-600 rounded-b hover:bg-green-800">Add To Cart</a>
      </div>
      <div class="bg-white shadow rounded overflow-hidden">
        <div class="relative">
          <img src="img/shoes2.png" class="w-full shadow-md">
        </div>
        <div class="pt-4 pb-3 px-4">
          <a href="#">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-pink-500 transition">Jordan</h4>
          </a>
          <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-pink-600 font-semibold">$100.00</p>
          </div>
        </div>
        <a href="#" class="block w-full text-center text-white bg-green-600 border-green-600 rounded-b hover:bg-green-800">Add To Cart</a>
      </div>
    </div>
  </div>
</x-app-layout>
