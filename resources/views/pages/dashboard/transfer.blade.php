<x-app-layout>
    <div class="lg:relative lg:flex">

        <!-- Content -->
        <div class="px-4 sm:px-6 lg:px-8 py-8 lg:grow lg:pr-8 xl:pr-16 2xl:ml-[80px]">
            <div class="lg:max-w-[640px] lg:mx-auto">

                <!-- Cart items -->
                <div class="mb-6 lg:mb-0">
                    <div class="mb-3">
                        <div class="flex text-sm font-medium text-slate-400 space-x-2">
                            <span class="text-slate-500">Review</span>
                            <span>-&gt;</span>
                            <span class="text-slate-500">Payment</span>
                            <span>-&gt;</span>
                            <span class="text-indigo-500">Confirm</span>
                        </div>
                    </div>
                    <header class="mb-6">
                        <!-- Title -->
                        <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-2">Thank you for your order ✨</h1>
                        <p>You will soon receive a confirmation email with details of your order and a link to download
                            the files.</p>
                    </header>
                    <!-- Billing Information -->
                    <div>
                        <div class="text-slate-800 font-semibold mb-4">Billing Information</div>
                        <form>
                            <div class="space-y-4">
                                <!-- 1st row -->

                                <!-- Post Block -->
                                <div class="bg-white shadow-md rounded border border-slate-200 p-5">
                                    <div class="flex items-center space-x-3 mb-5">
                                        <img class="rounded-full shrink-0" src="{{ asset('images/user-40-02.jpg') }}"
                                            width="40" height="40" alt="User 02" />
                                        <div class="grow">
                                            <label for="status-input" class="sr-only">What's happening, Mark?</label>
                                            <input id="status-input"
                                                class="form-input w-full bg-slate-100 border-transparent focus:bg-white focus:border-slate-300 placeholder-slate-500"
                                                type="text" placeholder="What's happening, Mark?">
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="grow flex space-x-5">
                                            <button
                                                class="inline-flex items-center text-sm font-medium text-slate-600 hover:text-slate-700">
                                                <svg class="w-4 h-4 fill-indigo-400 mr-2"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0 0h2v16H0V0Zm14 0h2v16h-2V0Zm-3 7H5c-.6 0-1-.4-1-1V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1v5c0 .6-.4 1-1 1ZM6 5h4V2H6v3Zm5 11H5c-.6 0-1-.4-1-1v-5c0-.6.4-1 1-1h6c.6 0 1 .4 1 1v5c0 .6-.4 1-1 1Zm-5-2h4v-3H6v3Z" />
                                                </svg>
                                                <span>Media</span>
                                            </button>
                                            <button
                                                class="inline-flex items-center text-sm font-medium text-slate-600 hover:text-slate-700">
                                                <svg class="w-4 h-4 fill-indigo-400 mr-2"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.974 14c-.3 0-.7-.2-.9-.5l-2.2-3.7-2.1 2.8c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l3-4c.2-.3.5-.4.9-.4.3 0 .6.2.8.5l2 3.3 3.3-8.1c0-.4.4-.7.8-.7s.8.2.9.6l4 8c.2.5 0 1.1-.4 1.3-.5.2-1.1 0-1.3-.4l-3-6-3.2 7.9c-.2.4-.6.6-1 .6Z" />
                                                </svg>
                                                <span>GIF</span>
                                            </button>
                                            <button
                                                class="inline-flex items-center text-sm font-medium text-slate-600 hover:text-slate-700">
                                                <svg class="w-4 h-4 fill-indigo-400 mr-2"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.793 10.002a.5.5 0 0 1 .353.853l-1.792 1.793a.5.5 0 0 1-.708 0l-1.792-1.793a.5.5 0 0 1 .353-.853h3.586Zm5.014-4.63c1.178 2.497 1.833 5.647.258 7.928-1.238 1.793-3.615 2.702-7.065 2.702S2.173 15.092.935 13.3c-1.575-2.28-.92-5.431.258-7.927A2.962 2.962 0 0 1 0 3.002a3 3 0 0 1 3-3c.787 0 1.496.309 2.029.806a5.866 5.866 0 0 1 5.942 0A2.96 2.96 0 0 1 13 .002a3 3 0 0 1 3 3c0 .974-.472 1.827-1.193 2.37Zm-1.387 6.79c1.05-1.522.417-3.835-.055-5.078C12.915 5.89 11.192 2.002 8 2.002s-4.914 3.89-5.365 5.082c-.472 1.243-1.106 3.556-.055 5.079.843 1.22 2.666 1.839 5.42 1.839s4.577-.62 5.42-1.84ZM6.67 6.62c.113.443.102.68-.433 1.442-.535.761-1.06 1.297-1.658 1.297-.597 0-1.08-.772-1.07-1.483.01-.71.916-2.306 1.997-2.306.784 0 1.05.607 1.163 1.05Zm3.824-1.05c1.08 0 1.987 1.596 1.997 2.306.01.71-.473 1.483-1.07 1.483-.598 0-1.123-.536-1.658-1.297-.535-.762-.546-1-.432-1.442.113-.443.38-1.05 1.163-1.05Z" />
                                                </svg>
                                                <span>Emoji</span>
                                            </button>
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="btn-sm bg-indigo-500 hover:bg-indigo-600 text-white whitespace-nowrap">Send
                                                -&gt;</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2nd row -->
                                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-address">Address</label>
                                        <input id="card-address" class="form-input w-full" type="text" />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-city">Town/City</label>
                                        <input id="card-city" class="form-input w-full" type="text" />
                                    </div>
                                </div>
                                <!-- 3rd row -->
                                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1"
                                            for="card-state">State/Country</label>
                                        <input id="card-state" class="form-input w-full" type="text" />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-country">Country <span
                                                class="text-rose-500">*</span></label>
                                        <select id="card-country" class="form-select w-full">
                                            <option>Italy</option>
                                            <option>USA</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 4th row -->
                                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1"
                                            for="card-postcode">Postcode</label>
                                        <input id="card-postcode" class="form-input w-full" type="text" />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-vat">VAT ID</label>
                                        <input id="card-vat" class="form-input w-full" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit"
                                        class="btn bg-white border-slate-200 hover:border-slate-300 text-indigo-500">Download
                                        Invoice</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Divider -->
                    <hr class="my-6 border-t border-slate-200" />
                    <!-- Billing footer -->
                    <div class="bg-white rounded border border-slate-200 p-4">
                        <div
                            class="text-center md:text-left md:flex md:items-center md:justify-between space-y-2 md:space-y-0 md:space-x-2">
                            <div class="text-sm">Enjoy a <span class="font-medium text-slate-800">20% OFF</span>
                                discount on your next order 🎉</div>
                            <div class="relative inline-flex text-center px-3 py-1 rounded bg-emerald-500">
                                <div class="absolute w-3 h-3 rounded-full bg-white left-0 -translate-x-1/2 top-1/2 -translate-y-1/2"
                                    aria-hidden="true"></div>
                                <div class="absolute w-3 h-3 rounded-full bg-white right-0 translate-x-1/2 top-1/2 -translate-y-1/2"
                                    aria-hidden="true"></div>
                                <span class="text-sm text-emerald-50 font-medium uppercase">XMAS22</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
