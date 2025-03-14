<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="block" href="{{ route('dashboard.index') }}">
                <img class="mt-2" src="/logo-white.svg" width="170px" height="30px" alt="">
            </a>
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
                </h3>

                <ul class="mt-3">
                    {{-- Dashboard Link --}}
                    @php
                        $isDashboardActive = in_array(Request::segment(1), ['dashboard']);
                    @endphp
                    <x-sidebar-link :active="$isDashboardActive" :force-open="$isDashboardActive" href="#0" segment="dashboard">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isDashboardActive">
                                <path
                                    class="fill-current @if ($isDashboardActive) text-indigo-500 @else text-slate-400 @endif"
                                    d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                <path
                                    class="fill-current @if ($isDashboardActive) text-indigo-600 @else text-slate-600 @endif"
                                    d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                <path
                                    class="fill-current @if ($isDashboardActive) text-indigo-200 @else text-slate-400 @endif"
                                    d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Dashboard
                        </x-slot>
                        <x-slot name="dropdown">
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.index')" :href="route('dashboard.index')">Main</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.transfer')"
                                :href="route('dashboard.transfer')">Transfer</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.payment-method')" :href="route('dashboard.payment-method')">Payment
                                Methods</x-sidebar-dropdown-link>
                        </x-slot>
                    </x-sidebar-link>

                    {{-- Transactions Link --}}
                    @php
                        $isTransactionsActive = in_array(Request::segment(1), ['transactions']);
                    @endphp
                    <x-sidebar-link :active="$isTransactionsActive" :force-open="$isTransactionsActive" href="#0" segment="transactions">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isTransactionsActive">
                                <path
                                    class="fill-current @if ($isTransactionsActive) text-indigo-300 @else text-slate-400 @endif"
                                    d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z" />
                                <path
                                    class="fill-current @if ($isTransactionsActive) text-indigo-600 @else text-slate-700 @endif"
                                    d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z" />
                                <path
                                    class="fill-current @if ($isTransactionsActive) text-indigo-500 @else text-slate-600 @endif"
                                    d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Transactions
                        </x-slot>
                        <x-slot name="dropdown">
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.transactions')" :href="route('dashboard.transactions')">All
                                Transactions</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.transactions.transfers')" :href="route('dashboard.transactions.transfers')">Transfer
                                History</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.transactions.deposits')" :href="route('dashboard.transactions.deposits')">Deposit
                                History</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.transactions.withdrawals')" :href="route('dashboard.transactions.withdrawals')">Withdrawal
                                History</x-sidebar-dropdown-link>
                        </x-slot>
                    </x-sidebar-link>

                    {{-- Loans Link --}}

                    @php
                        $isLoansActive = in_array(Request::segment(1), ['loans']);
                    @endphp
                    <x-sidebar-link :active="$isLoansActive" :force-open="$isLoansActive" href="#0" segment="loans">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isLoansActive">
                                <path
                                    class="fill-current @if ($isLoansActive) text-indigo-500 @else text-slate-600 @endif"
                                    d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z" />
                                <path
                                    class="fill-current @if ($isLoansActive) text-indigo-300 @else text-slate-400 @endif"
                                    d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Loans
                        </x-slot>
                        <x-slot name="dropdown">
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.loans')" :href="route('dashboard.loans')">Loan
                                Plans</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.loans.request-loan')" :href="route('dashboard.loans.request-loan')">Request
                                Loan</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.loans.loan-history')" :href="route('dashboard.loans.loan-history')">Loan
                                History</x-sidebar-dropdown-link>
                        </x-slot>
                    </x-sidebar-link>

                    {{-- Referrals --}}
                    @php
                        $isReferralsActive = in_array(Request::segment(1), ['referrals']);
                    @endphp

                    <x-sidebar-link :active="$isReferralsActive" :href="route('dashboard.referrals')">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isReferralsActive">
                                <path
                                    class="fill-current @if ($isReferralsActive) text-indigo-500 @else text-slate-600 @endif"
                                    d="M20 7a3 3 0 01-3 3H7a3 3 0 01-3-3 3 3 0 013-3h10a3 3 0 013 3z" />
                                <path
                                    class="fill-current @if ($isReferralsActive) text-indigo-300 @else text-slate-400 @endif"
                                    d="M20 17a3 3 0 01-3 3H7a3 3 0 01-3-3 3 3 0 013-3h10a3 3 0 013 3z" />
                                <path
                                    class="fill-current @if ($isReferralsActive) text-indigo-600 @else text-slate-700 @endif"
                                    d="M20 22H4a2 2 0 01-2-2V4a2 2 0 012-2h16a2 2 0 012 2v16a2 2 0 01-2 2zM4 16h16V8H4v8z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Referrals
                        </x-slot>
                    </x-sidebar-link>

                    {{-- Investments Link --}}
                    @php
                        $isInvestmentsActive = in_array(Request::segment(1), ['investments']);
                    @endphp
                    <x-sidebar-link :active="$isInvestmentsActive" :force-open="$isInvestmentsActive" href="#0" segment="investments">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isInvestmentsActive">
                                <path
                                    class="fill-current @if ($isInvestmentsActive) text-indigo-300 @else text-slate-400 @endif"
                                    d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z" />
                                <path
                                    class="fill-current @if ($isInvestmentsActive) text-indigo-500 @else text-slate-700 @endif"
                                    d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z" />
                                <path
                                    class="fill-current @if ($isInvestmentsActive) text-indigo-600 @else text-slate-600 @endif"
                                    d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Investments
                        </x-slot>
                        <x-slot name="dropdown">
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.investments')" :href="route('dashboard.investments')">My
                                Holdings</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.investments.market-data')" :href="route('dashboard.investments.market-data')">Market
                                Data</x-sidebar-dropdown-link>
                        </x-slot>
                    </x-sidebar-link>

                    {{-- Insights Link --}}
                    @php
                        $isInsightsActive = in_array(Request::segment(1), ['insights']);
                    @endphp
                    <x-sidebar-link :active="$isInsightsActive" :force-open="$isInsightsActive" href="#0" segment="insights">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isInsightsActive">
                                <path
                                    class="fill-current @if ($isInsightsActive) text-indigo-300 @else text-slate-400 @endif"
                                    d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z" />
                                <path
                                    class="fill-current @if ($isInsightsActive) text-indigo-500 @else text-slate-700 @endif"
                                    d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z" />
                                <path
                                    class="fill-current @if ($isInsightsActive) text-indigo-600 @else text-slate-600 @endif"
                                    d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Insights
                        </x-slot>
                        <x-slot name="dropdown">
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.insights')" :href="route('dashboard.insights')">Spending
                                Analysis</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.insights.funds-management')" :href="route('dashboard.insights.funds-management')">Funds
                                Management</x-sidebar-dropdown-link>
                        </x-slot>
                    </x-sidebar-link>

                    {{-- Notifications Link --}}
                    @php
                        $isNotificationsActive = in_array(Request::segment(1), ['notifications']);
                    @endphp
                    <x-sidebar-link :active="$isNotificationsActive" :href="route('dashboard.notifications')">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isNotificationsActive">
                                <path
                                    class="fill-current @if ($isNotificationsActive) text-indigo-500 @else text-slate-600 @endif"
                                    d="M19 6h-.2c-1.57-2.69-4.38-4.5-7.4-4.5C7.2 1.5 4.4 3.31 2.8 6H2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h17c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1zM12 15c-2.757 0-5 2.243-5 5h10c0-2.757-2.243-5-5-5z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Notifications
                        </x-slot>
                    </x-sidebar-link>

                    {{-- Account Link --}}
                    @php
                        $isAccountActive = in_array(Request::segment(1), ['account', 'settings']);
                    @endphp
                    <x-sidebar-link :active="$isAccountActive" :force-open="$isAccountActive" href="#0" segment="account">
                        <x-slot name="icon">
                            <x-sidebar-link-icon :active="$isAccountActive">
                                <path
                                    class="fill-current @if ($isAccountActive) text-indigo-500 @else text-slate-600 @endif"
                                    d="M12 16c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5zm0-8c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3z" />
                                <path
                                    class="fill-current @if ($isAccountActive) text-indigo-300 @else text-slate-400 @endif"
                                    d="M12 24c-2.21 0-4.223-.892-5.612-2.388C5.39 19.633 5 17.857 5 16v-1c0-5.22 4.469-9.5 10-9.5s10 4.28 10 9.5v1c0 1.857-.39 3.633-1.388 5.612C16.223 23.108 14.21 24 12 24zM7 16v-1c0-3.86 3.139-7 7-7s7 3.14 7 7v1c0 1.304-.232 2.534-.647 3.657-1.659 4.282-11.343 4.282-13.353 0C7.232 18.534 7 17.304 7 16z" />
                            </x-sidebar-link-icon>
                        </x-slot>
                        <x-slot name="label">
                            Account
                        </x-slot>
                        <x-slot name="dropdown">
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.account')" :href="route('dashboard.account')">My
                                Profile</x-sidebar-dropdown-link>
                            <x-sidebar-dropdown-link :active="Route::is('dashboard.settings')"
                                :href="route('dashboard.settings')">Settings</x-sidebar-dropdown-link>
                        </x-slot>
                    </x-sidebar-link>
                </ul>



                {{-- <ul class="mt-3">

                    <!-- Dashboard -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">

                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['dashboard'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('dashboard')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('dashboard.index') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Main</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('analytics')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('analytics') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Analytics</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('fintech')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('fintech') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Fintech</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </li>

                    <!-- E-Commerce -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['ecommerce']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-700' }} @endif"
                                            d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">E-Commerce</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['ecommerce'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['ecommerce'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('customers')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('customers') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customers</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('orders')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('orders') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Orders</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('invoices')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('invoices') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Invoices</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('shop')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('shop') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Shop</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('shop-2')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('shop-2') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Shop
                                            2</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('product')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('product') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Single
                                            Product</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('cart')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('cart') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cart</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('cart-2')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('cart-2') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cart
                                            2</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('cart-3')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('cart-3') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cart
                                            3</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('pay')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('pay') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pay</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Community -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['community'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['community']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['community'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['community'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['community'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Community</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['community'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['community'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('users-tabs')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('users-tabs') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Users
                                            - Tabs</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('users-tiles')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('users-tiles') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Users
                                            - Tiles</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('profile')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('profile') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Profile</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('feed')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('feed') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Feed</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('forum')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('forum') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Forum</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('forum-post')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('forum-post') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Forum
                                            - Post</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('meetups')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('meetups') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Meetups</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('meetups-post')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('meetups-post') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Meetups
                                            - Post</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Finance -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['finance'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['finance']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['finance'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['finance'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['finance'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-700' }} @endif"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['finance'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Finance</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['finance'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['finance'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('credit-cards')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('credit-cards') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cards</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('transactions')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('transactions') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Transactions</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('transaction-details')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('transaction-details') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Transaction
                                            Details</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Job Board -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['job'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['job']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['job'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['job'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-700' }} @endif"
                                            d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['job'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['job'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Job
                                        Board</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['job'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['job'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('job-listing')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('job-listing') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Listing</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('job-post')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('job-post') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Job
                                            Post</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('company-profile')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('company-profile') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Company
                                            Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Tasks -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['tasks'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['tasks']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['tasks'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['tasks'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['tasks'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M1 1h22v23H1z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['tasks'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tasks</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['tasks'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['tasks'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('tasks-kanban')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('tasks-kanban') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Kanban</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('tasks-list')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('tasks-list') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Messages -->
                    <li
                        class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['messages'])) {{ 'bg-slate-900' }} @endif">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['messages'])) {{ 'hover:text-slate-200' }} @endif"
                            href="{{ route('messages') }}">
                            <div class="flex items-center justify-between">
                                <div class="grow flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['messages'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['messages'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Messages</span>
                                </div>
                                <!-- Badge -->
                                <div class="flex flex-shrink-0 ml-2">
                                    <span
                                        class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-indigo-500 px-2 rounded">4</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <!-- Inbox -->
                    <li
                        class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['inbox'])) {{ 'bg-slate-900' }} @endif">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['inbox'])) {{ 'hover:text-slate-200' }} @endif"
                            href="{{ route('inbox') }}">
                            <div class="flex items-center">
                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['inbox'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['inbox'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                </svg>
                                <span
                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
                            </div>
                        </a>
                    </li>

                    <!-- Calendar -->
                    <li
                        class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['calendar'])) {{ 'bg-slate-900' }} @endif">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['calendar'])) {{ 'hover:text-slate-200' }} @endif"
                            href="{{ route('calendar') }}">
                            <div class="flex items-center">
                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['calendar'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M1 3h22v20H1z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['calendar'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                                </svg>
                                <span
                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Calendar</span>
                            </div>
                        </a>
                    </li>

                    <!-- Campaigns -->
                    <li
                        class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'bg-slate-900' }} @endif">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'hover:text-slate-200' }} @endif"
                            href="{{ route('campaigns') }}">
                            <div class="flex items-center">
                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                        d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                                    <path
                                        class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                        d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                </svg>
                                <span
                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Campaigns</span>
                            </div>
                        </a>
                    </li>

                    <!-- Settings -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['settings'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['settings']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['settings'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['settings'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Settings</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['settings'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['settings'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('account')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('account') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My
                                            Account</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('notifications')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('notifications') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My
                                            Notifications</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('apps')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('apps') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Connected
                                            Apps</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('plans')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('plans') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Plans</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('billing')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('billing') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Billing
                                            & Invoices</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('feedback')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('feedback') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Give
                                            Feedback</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Utility -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['utility'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['utility']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['utility'])) {{ 'hover:text-slate-200' }} @endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <circle
                                            class="fill-current @if (in_array(Request::segment(1), ['utility'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            cx="18.5" cy="5.5" r="4.5" />
                                        <circle
                                            class="fill-current @if (in_array(Request::segment(1), ['utility'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            cx="5.5" cy="5.5" r="4.5" />
                                        <circle
                                            class="fill-current @if (in_array(Request::segment(1), ['utility'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            cx="18.5" cy="18.5" r="4.5" />
                                        <circle
                                            class="fill-current @if (in_array(Request::segment(1), ['utility'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            cx="5.5" cy="18.5" r="4.5" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Utility</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['utility'])) {{ 'rotate-180' }} @endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['utility'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('changelog')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('changelog') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Changelog</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('roadmap')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('roadmap') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Roadmap</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('faqs')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('faqs') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">FAQs</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('empty-state')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('empty-state') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Empty
                                            State</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('404')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('404') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">404</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('knowledge-base')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('knowledge-base') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Knowledge
                                            Base</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul> --}}
            </div>

            <!-- More group -->
            {{-- <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">More</span>
                </h3>
                <ul class="mt-3">

                    <!-- Authentication -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                        <a class="block text-slate-200 hover:text-white transition duration-150"
                            :class="open && 'hover:text-slate-200'" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-600" d="M8.07 16H10V8H8.07a8 8 0 110 8z" />
                                        <path class="fill-current text-slate-400" d="M15 12L8 6v5H0v2h8v5z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Authentication</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                        :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1" :class="{ 'hidden': !open }" x-cloak>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                            href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign
                                                In</span>
                                        </a>
                                    </form>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                            href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign
                                                Up</span>
                                        </a>
                                    </form>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                            href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Reset
                                                Password</span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Onboarding -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                        <a class="block text-slate-200 hover:text-white transition duration-150"
                            :class="open && 'hover:text-slate-200'" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-600"
                                            d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                        <path class="fill-current text-slate-400"
                                            d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Onboarding</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                        :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['onboarding'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                        href="{{ route('onboarding-01') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step
                                            1</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                        href="{{ route('onboarding-02') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step
                                            2</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                        href="{{ route('onboarding-03') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step
                                            3</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                        href="{{ route('onboarding-04') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Step
                                            4</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Components -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['component'])) {{ 'bg-slate-900' }} @endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['component']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white transition duration-150"
                            :class="open && 'hover:text-slate-200'" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <circle
                                            class="fill-current @if (in_array(Request::segment(1), ['component'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            cx="16" cy="8" r="8" />
                                        <circle
                                            class="fill-current @if (in_array(Request::segment(1), ['component'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            cx="8" cy="16" r="8" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Components</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                        :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['component'])) {{ 'hidden' }} @endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('button-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('button-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Button</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('form-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('form-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Input
                                            Form</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('dropdown-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('dropdown-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dropdown</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('alert-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('alert-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Alert
                                            & Banner</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('modal-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('modal-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Modal</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('pagination-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('pagination-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pagination</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('tabs-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('tabs-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tabs</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('breadcrumb-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('breadcrumb-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('badge-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('badge-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Badge</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('avatar-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('avatar-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Avatar</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('tooltip-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('tooltip-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tooltip</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('accordion-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('accordion-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Accordion</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('icons-page')) {{ '!text-indigo-500' }} @endif"
                                        href="{{ route('icons-page') }}">
                                        <span
                                            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div> --}}
        </div>

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400"
                            d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
