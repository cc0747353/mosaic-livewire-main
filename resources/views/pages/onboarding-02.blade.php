<x-empty-layout>
    <main class="bg-white">

        <div class="relative flex">

            <!-- Content -->
            <div class="w-full md:w-1/2">

                <div class="min-h-screen h-full flex flex-col after:flex-1">

                    <div class="flex-1">

                        <!-- Header -->
                        <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                            <!-- Logo -->
                            <a class="block" href="{{ route('dashboard.index') }}">
                                <svg width="32" height="32" viewBox="0 0 32 32">
                                    <defs>
                                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%" />
                                            <stop stop-color="#A5B4FC" offset="100%" />
                                        </linearGradient>
                                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%" />
                                            <stop stop-color="#38BDF8" offset="100%" />
                                        </linearGradient>
                                    </defs>
                                    <rect fill="#6366F1" width="32" height="32" rx="16" />
                                    <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5" />
                                    <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)" />
                                    <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)" />
                                </svg>
                            </a>
                            <div class="text-sm">
                                Have an account? <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('login') }}">Sign In</a>
                            </div>
                        </div>

                        <!-- Progress bar -->
                        <div class="px-4 pt-12 pb-8">
                            <div class="max-w-md mx-auto w-full">
                                <div class="relative">
                                    <div class="absolute left-0 top-1/2 -mt-px w-full h-0.5 bg-slate-200" aria-hidden="true"></div>
                                    <ul class="relative flex justify-between w-full">
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-indigo-500 text-white" href="{{ route('onboarding-01') }}">1</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-indigo-500 text-white" href="{{ route('onboarding-02') }}">2</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-slate-100 text-slate-500" href="{{ route('onboarding-03') }}">3</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center justify-center w-6 h-6 rounded-full text-xs font-semibold bg-slate-100 text-slate-500" href="{{ route('onboarding-04') }}">4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-8">
                        <div class="max-w-md mx-auto">

                            <h1 class="text-3xl text-slate-800 font-bold mb-6">Tell us about your company ✨</h1>
                            <!-- Form -->
                            <form>
                                <div class="sm:flex space-y-3 sm:space-y-0 sm:space-x-4 mb-8">
                                    <label class="flex-1 relative block cursor-pointer">
                                        <input type="radio" name="radio-buttons" class="peer sr-only" checked />
                                        <div class="h-full text-center bg-white px-4 py-6 rounded border border-slate-200 hover:border-slate-300 shadow-sm duration-150 ease-in-out">
                                            <svg class="inline-flex w-10 h-10 shrink-0 fill-current mb-2" viewBox="0 0 40 40">
                                                <circle class="text-indigo-100" cx="20" cy="20" r="20" />
                                                <path class="text-indigo-500" d="m26.371 23.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 24 17v-1.828A4.087 4.087 0 0 0 20 11a4.087 4.087 0 0 0-4 4.172V17a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V27a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z" />
                                            </svg>
                                            <div class="font-medium text-slate-800 mb-1">Individual</div>
                                            <div class="text-sm">Lorem ipsum is place text commonly used.</div>
                                        </div>
                                        <div class="absolute inset-0 border-2 border-transparent peer-checked:border-indigo-400 rounded pointer-events-none" aria-hidden="true"></div>
                                    </label>
                                    <label class="flex-1 relative block cursor-pointer">
                                        <input type="radio" name="radio-buttons" class="peer sr-only" />
                                        <div class="h-full text-center bg-white px-4 py-6 rounded border border-slate-200 hover:border-slate-300 shadow-sm duration-150 ease-in-out">
                                            <svg class="inline-flex w-10 h-10 shrink-0 fill-current mb-2" viewBox="0 0 40 40">
                                                <circle class="text-indigo-100" cx="20" cy="20" r="20" />
                                                <path class="text-indigo-500" d="m26.371 23.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 24 17v-1.828A4.087 4.087 0 0 0 20 11a4.087 4.087 0 0 0-4 4.172V17a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V27a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z" />
                                                <circle class="text-indigo-100" cx="20" cy="20" r="20" />
                                                <path class="text-indigo-300" d="m30.377 22.749-3.709-1.5a1 1 0 0 1-.623-.926v-.878A3.989 3.989 0 0 0 28.027 16v-1.828c.047-2.257-1.728-4.124-3.964-4.172-2.236.048-4.011 1.915-3.964 4.172V16a3.989 3.989 0 0 0 1.982 3.445v.878a1 1 0 0 1-.623.928c-.906.266-1.626.557-2.159.872-.533.315-1.3 1.272-2.299 2.872 1.131.453 6.075-.546 6.072.682V28a2.99 2.99 0 0 1-.182 1h7.119A.996.996 0 0 0 31 28v-4.323a1 1 0 0 0-.623-.928Z" />
                                                <path class="text-indigo-500" d="m22.371 24.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 20 18v-1.828A4.087 4.087 0 0 0 16 12a4.087 4.087 0 0 0-4 4.172V18a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V28a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z" />
                                            </svg>
                                            <div class="font-medium text-slate-800 mb-1">Organization</div>
                                            <div class="text-sm">Lorem ipsum is place text commonly used.</div>
                                        </div>
                                        <div class="absolute inset-0 border-2 border-transparent peer-checked:border-indigo-400 rounded pointer-events-none" aria-hidden="true"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between space-x-6 mb-8">
                                    <div>
                                        <div class="font-medium text-slate-800 text-sm mb-1">💸 Lorem ipsum is place text commonly?</div>
                                        <div class="text-xs">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="form-switch">
                                            <input type="checkbox" id="switch" class="sr-only" checked />
                                            <label class="bg-slate-400" for="switch">
                                                <span class="bg-white shadow-sm" aria-hidden="true"></span>
                                                <span class="sr-only">Switch label</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a class="text-sm underline hover:no-underline" href="{{ route('onboarding-01') }}">&lt;- Back</a>
                                    <a class="btn bg-indigo-500 hover:bg-indigo-600 text-white ml-auto" href="{{ route('onboarding-03') }}">Next Step -&gt;</a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Image -->
            <div class="hidden md:block absolute top-0 bottom-0 right-0 md:w-1/2" aria-hidden="true">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/onboarding-image.jpg') }}" width="760" height="1024" alt="Onboarding" />
                <img class="absolute top-1/4 left-0 -translate-x-1/2 ml-8 hidden lg:block" src="{{ asset('images/auth-decoration.png') }}" width="218" height="224" alt="Authentication decoration" />
            </div>

        </div>

    </main>
</x-empty-layout>
