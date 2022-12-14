<div class="fixed w-full top-0 bg-opacity-90 backdrop-blur-lg bg-white z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="flex justify-between items-center py-3 md:justify-start md:space-x-10">
            <div class="flex justify-start items-center lg:w-0 lg:flex-1">
                <a href="{{route('home.index')}}">
                    <span class="sr-only">Workflow</span>
                    <img class="h-8 w-auto sm:h-10" src="https://www.nasco.co.th/wp-content/uploads/2019/08/Logo-infinity.png"
                         alt="">
                </a>
                <nav class="hidden md:flex space-x-7">
                    <div class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        {{--                    <div class="dropdown dropdown-end">--}}
                        {{--                        <label tabindex="0" class="text-base font-medium text-gray-600 hover:text-gray-900">Products</label>--}}
                        {{--                        <ul tabindex="0" class="menu dropdown-content p-2 shadow bg-base-100 rounded-box w-52 mt-4">--}}
                        {{--                            <li><a>Item 1</a></li>--}}
                        {{--                            <li><a>Item 2</a></li>--}}
                        {{--                        </ul>--}}
                        {{--                    </div>--}}
                        <div class="hidden absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-yellow-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Analytics</p>
                                            <p class="mt-1 text-sm text-gray-500">Get a better understanding of where your
                                                traffic is coming from.</p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-yellow-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Engagement</p>
                                            <p class="mt-1 text-sm text-gray-500">Speak directly to your customers in a more
                                                meaningful way.</p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-yellow-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Security</p>
                                            <p class="mt-1 text-sm text-gray-500">Your customers&#039; data will be safe and
                                                secure.</p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-yellow-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Integrations</p>
                                            <p class="mt-1 text-sm text-gray-500">Connect with third-party tools that you&#039;re
                                                already using.</p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <svg class="flex-shrink-0 h-6 w-6 text-yellow-600"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">Automations</p>
                                            <p class="mt-1 text-sm text-gray-500">Build strategic funnels that will drive
                                                your customers to convert</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                    <div class="flow-root">
                                        <a href="#"
                                           class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span class="ml-3">Watch Demo</span>
                                        </a>
                                    </div>

                                    <div class="flow-root">
                                        <a href="#"
                                           class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                            </svg>
                                            <span class="ml-3">Contact Sales</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('review.index')}}" class="text-xs tracking-widest uppercase font-medium text-gray-500 hover:text-gray-900"> Customer reviews </a>
                    <a href="{{route('pricing.index')}}" class="text-xs tracking-widest uppercase font-medium text-gray-500 hover:text-gray-900"> Pricing </a>
                    <a href="{{route('blog.index')}}" class="text-xs tracking-widest uppercase font-medium text-gray-500 hover:text-gray-900"> Blog </a>
                    <a href="{{route('login.index')}}" class="text-xs tracking-widest uppercase font-medium text-gray-500 hover:text-gray-900"> Log in </a>
                    @auth
                        <a href="{{route('reviews.index')}}" class="text-xs tracking-widest uppercase font-medium text-gray-500 hover:text-gray-900"> Admin </a>
                    @endauth
                </nav>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex items-center space-x-2 justify-end md:flex-1 lg:w-0">
                <x-button-link color="primary btn-wide rounded" href=" https://myshopify.com/admin/api/auth?api_key=9316d2267397f884acc8357d7edd11f5">
                    Get started
                </x-button-link>
            </div>
        </div>
    </div>

    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-yellow-600.svg"
                             alt="Workflow">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6 hidden">
                    <nav class="grid gap-y-8">
                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Analytics </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Engagement </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Security </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Integrations </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Automations </span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6 hidden">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Pricing </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Docs </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Help Center </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Guides </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Events </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Security </a>
                </div>
                <div>
                    <a href="#"
                       class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-700">
                        Sign up </a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="#" class="text-yellow-600 hover:text-yellow-500"> Sign in </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
