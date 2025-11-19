{{-- resources/views/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-4xl font-bold mb-2 text-center">Door Configuration</h1>
    <p class="text-gray-600 text-center mb-12">เลือกสินค้าที่ต้องการ Config</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($products as $product)
        <a href="{{ route('config.start', $product->code) }}" 
           class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
            @if($product->thumbnail)
            <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
            @else
            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                <span class="text-gray-400 text-4xl">🚪</span>
            </div>
            @endif
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-2">{{ $product->name }}</h2>
                <p class="text-gray-600">{{ $product->code }}</p>
                <div class="mt-4">
                    <span class="inline-block bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold">
                        เริ่ม Config →
                    </span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection