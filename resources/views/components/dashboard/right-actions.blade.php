@props(['buttons'])

<div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
    @foreach ($buttons as $button)
        <a href="{{ route($button['route']) }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
            <img src="{{ $button['icon'] }}" class="w-8 h-8 fill-current opacity-50 shrink-0" viewBox="0 0 16 16" alt="">
            <span class="xs:block ml-2">{{ $button['text'] }}</span>
        </a>
    @endforeach
</div>

