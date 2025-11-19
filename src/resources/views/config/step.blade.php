@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold mb-2">{{ $step->step_name }}</h1>
        <p class="text-gray-600">Step {{ $step->step_number }}</p>
    </div>
    
    @include("config.templates.{$step->template}")
    
    <div class="flex justify-between mt-8">
        @if($prevStep)
        <a href="{{ route('config.step', [$product->code, $prevStep->step_key]) }}" 
           class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
            ← ย้อนกลับ
        </a>
        @else
        <div></div>
        @endif
        
        @if($nextStep)
        <button id="next-btn" 
                class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 disabled:bg-gray-300 disabled:cursor-not-allowed"
                disabled>
            ถัดไป →
        </button>
        @else
        <a href="{{ route('config.summary') }}" 
           class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600">
            ดูสรุป →
        </a>
        @endif
    </div>
</div>

<script>
let selectedOption = '{{ $selectedOption }}';

function selectOption(optionCode) {
    fetch('{{ route("config.select") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            step_key: '{{ $step->step_key }}',
            option_code: optionCode
        })
    }).then(() => {
        selectedOption = optionCode;
        document.getElementById('next-btn')?.removeAttribute('disabled');
        
        // Update UI
        document.querySelectorAll('.option-card, .option-item').forEach(el => {
            el.classList.remove('selected');
        });
        document.querySelector(`[data-option="${optionCode}"]`)?.classList.add('selected');
    });
}

document.getElementById('next-btn')?.addEventListener('click', () => {
    @if($nextStep)
    window.location.href = '{{ route("config.step", [$product->code, $nextStep->step_key]) }}';
    @endif
});

// Enable next button if already selected
if (selectedOption) {
    document.getElementById('next-btn')?.removeAttribute('disabled');
    document.querySelector(`[data-option="${selectedOption}"]`)?.classList.add('selected');
}
</script>
@endsection