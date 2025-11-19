@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-8">สรุปการเลือก</h1>
    
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">{{ $product->name }}</h2>
        
        @foreach($selected as $option)
        <div class="border-b py-4 last:border-b-0">
            <div class="flex items-start justify-between mb-2">
                <div>
                    <span class="text-gray-600 text-sm">{{ $option->step->step_name }}</span>
                    <h3 class="text-lg font-semibold">{{ $option->option_name }}</h3>
                </div>
                @if($option->thumbnail)
                <img src="{{ $option->thumbnail }}" alt="{{ $option->option_name }}" class="w-20 h-20 object-cover rounded">
                @endif
            </div>
            
            @if($option->inspections->count() > 0)
            <div class="mt-3">
                <p class="text-sm font-semibold text-gray-700 mb-2">จุดตรวจ:</p>
                <div class="grid grid-cols-4 gap-2">
                    @foreach($option->inspections as $inspection)
                    <div class="text-center">
                        <img src="{{ $inspection->image }}" alt="{{ $inspection->note }}" class="w-full h-24 object-cover rounded mb-1">
                        @if($inspection->note)
                        <p class="text-xs text-gray-600">{{ $inspection->note }}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>
    
    <form action="{{ route('config.send') }}" method="POST" class="bg-white rounded-lg shadow-lg p-6">
        @csrf
        <h3 class="text-xl font-semibold mb-4">ส่งข้อมูลทางอีเมล</h3>
        <div class="mb-4">
            <label class="block text-gray-700 mb-2">อีเมลของคุณ</label>
            <input type="email" name="email" required 
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="your@email.com">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 font-semibold">
            ส่งอีเมล
        </button>
    </form>
</div>
@endsection