<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 {{ $isActiveGroup ? 'bg-slate-900' : '' }}"
    x-data="{ open: {{ $isActiveGroup ? '1' : '0' }} }">
    <a class="block text-slate-200 hover:text-white truncate transition duration-150 {{ $isActiveGroup ? 'hover:text-slate-200' : '' }}"
        href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    {{ $svgPaths }}
                </svg>
                <span
                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $groupTitle }}</span>
            </div>
            <div
                class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 {{ $isActiveGroup ? 'rotate-180' : '' }}"
                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                </svg>
            </div>
        </div>
    </a>

    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
        <ul class="pl-9 mt-1 {{ ! $isActiveGroup ? 'hidden' : '' }}"
            :class="open ? '!block' : 'hidden'">
            @foreach($subItems as $subItem)
                <li class="mb-1 last:mb-0">
                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate {{ Route::is($subItem['route']) ? '!text-indigo-500' : '' }}"
                        href="{{ route($subItem['route']) }}">
                        <span
                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $subItem['title'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</li>
