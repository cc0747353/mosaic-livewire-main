@props(['active' => false, 'href' => '#0', 'forceOpen' => false, 'segment' => ''])

<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if ($active) bg-slate-900 @endif"
    x-data="{ open: {{ $forceOpen ? 'true' : 'false' }} }">

    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if ($active) hover:text-slate-200 @endif"
        href="{{ $href }}" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                {{ $icon }}
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $label }}</span>
            </div>
            @if(isset($dropdown))
            <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if ($active) rotate-180 @endif"
                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                </svg>
            </div>
            @endif
        </div>
    </a>

    @if(isset($dropdown))
    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
        <ul class="pl-9 mt-1 @if (!$active) hidden @endif" :class="open ? '!block' : 'hidden'">
            {{ $dropdown }}
        </ul>
    </div>
    @endif
</li>
