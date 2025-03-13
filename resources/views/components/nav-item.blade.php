<!-- filepath: resources/views/components/nav-item.blade.php -->
<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), [$route])) {{ 'bg-slate-900' }} @endif"
    x-data="{ open: {{ in_array(Request::segment(1), [$route]) ? 1 : 0 }} }">
    <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), [$route])) {{ 'hover:text-slate-200' }} @endif"
        href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    {!! $icon !!}
                </svg>
                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $title }}</span>
            </div>
            <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), [$route])) {{ 'rotate-180' }} @endif"
                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                </svg>
            </div>
        </div>
    </a>
    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
        <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), [$route])) {{ 'hidden' }} @endif" :class="open ? '!block' : 'hidden'">
            @foreach ($subItems as $subItem)
                <li class="mb-1 last:mb-0">
                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is($subItem['route'])) {{ '!text-indigo-500' }} @endif"
                        href="{{ route($subItem['route']) }}">
                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $subItem['title'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</li>
