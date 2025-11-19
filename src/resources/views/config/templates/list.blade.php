<div class="space-y-4">
    @foreach($step->options as $option)
    <div class="option-item bg-white rounded-lg shadow p-6 cursor-pointer hover:shadow-lg transition flex items-center {{ in_array($option->option_code, $blocked) ? 'opacity-50 cursor-not-allowed' : '' }}"
         data-option="{{ $option->option_code }}"
         onclick="{{ in_array($option->option_code, $blocked) ? '' : "selectOption('{$option->option_code}')" }}">
        @if($option->thumbnail)
        <img src="{{ $option->thumbnail }}" alt="{{ $option->option_name }}" class="w-24 h-24 object-cover rounded mr-6">
        @endif
        <div class="flex-1">
            <h3 class="text-xl font-semibold">{{ $option->option_name }}</h3>
            @if(in_array($option->option_code, $blocked))
            <p class="text-red-500 mt-2">ไม่สามารถเลือกได้</p>
            @endif
        </div>
    </div>
    @endforeach
</div>

<style>
.option-item.selected {
    border: 3px solid #3b82f6;
}
</style>