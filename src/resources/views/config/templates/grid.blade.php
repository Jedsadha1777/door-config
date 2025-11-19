<div class="grid grid-cols-4 gap-6">
    @foreach($step->options as $option)
    <div class="option-card bg-white rounded-lg shadow-lg p-4 cursor-pointer hover:shadow-xl transition {{ in_array($option->option_code, $blocked) ? 'opacity-50 cursor-not-allowed' : '' }}"
         data-option="{{ $option->option_code }}"
         onclick="{{ in_array($option->option_code, $blocked) ? '' : "selectOption('{$option->option_code}')" }}">
        @if($option->thumbnail)
        <img src="{{ $option->thumbnail }}" alt="{{ $option->option_name }}" class="w-full h-32 object-cover rounded mb-3">
        @endif
        <h3 class="text-center font-semibold">{{ $option->option_name }}</h3>
        @if(in_array($option->option_code, $blocked))
        <p class="text-red-500 text-sm text-center mt-2">ไม่สามารถเลือกได้</p>
        @endif
    </div>
    @endforeach
</div>

<style>
.option-card.selected {
    border: 3px solid #3b82f6;
}
</style>