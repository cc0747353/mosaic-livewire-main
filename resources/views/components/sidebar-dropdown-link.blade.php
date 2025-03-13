@props(['active' => false, 'href'])

<li class="mb-1 last:mb-0">
    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if ($active) !text-indigo-500 @endif"
        href="{{ $href }}">
        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $slot }}</span>
    </a>
</li>
