<div class="flex justify-center gap-12">
    @foreach($step->options as $option)
    <div class="option-item bg-white rounded-lg shadow-lg p-8 cursor-pointer hover:shadow-xl transition text-center {{ in_array($option->option_code, $blocked) ? 'opacity-50 cursor-not-allowed' : '' }}"
         data-option="{{ $option->option_code }}"
         onclick="{{ in_array($option->option_code, $blocked) ? '' : "selectOption('{$option->option_code}')" }}">
        @if($option->thumbnail)
        <img src="{{ $option->thumbnail }}" alt="{{ $option->option_name }}" class="w-64 h-64 object-contain mx-auto mb-4">
        @endif
        <h3 class="text-2xl font-bold">{{ $option->option_name }}</h3>
        @if(in_array($option->option_code, $blocked))
        <p class="text-red-500 mt-2">ไม่สามารถเลือกได้</p>
        @endif
    </div>
    @endforeach
</div>

<style>
.option-item.selected {
    border: 3px solid #3b82f6;
}
</style>