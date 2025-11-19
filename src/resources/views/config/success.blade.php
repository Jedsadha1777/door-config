@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto text-center">
    <div class="bg-white rounded-lg shadow-lg p-12">
        <div class="text-green-500 text-6xl mb-4">✓</div>
        <h1 class="text-3xl font-bold mb-4">ส่งอีเมลเรียบร้อยแล้ว!</h1>
        <p class="text-gray-600 mb-8">กรุณาตรวจสอบอีเมลของคุณ</p>
        <a href="{{ route('home') }}" class="inline-block bg-blue-500 text-white px-8 py-3 rounded-lg hover:bg-blue-600">
            กลับหน้าหลัก
        </a>
    </div>
</div>
@endsection