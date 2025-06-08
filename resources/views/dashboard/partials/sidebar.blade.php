@php
    $app_brand = [
        // 'bg' => '#5508b9',
        // 'bg-dark' => '#550899',

        'primary' => '#854D0E', // 'yellow-800 primary
    'bg-accent' => '#CA8A04', // yellow-600 border
    'bg-color' => '#A16207', // yellow-700 hover
    ];
    // hover:bg-blue-700 == color : #0828ad accent : 0828b9
@endphp


<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">

        {{-- Start of Sidebar Menu --}}
        <ul class="space-y-2 font-medium mt-2">

            {{-- Admin access to main dashboard --}}
            <li class="">
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'text-white bg-[' . $app_brand['primary'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class='fa fa-pie-chart'></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                </a>
            </li>
            <li class="" title="Products">
                <a href="{{ route('admin.products.index') }}"
                    class="{{ request()->routeIs('admin.products.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-cube"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li class="" title="Orders">
                <a href="{{ route('admin.orders.index') }}"
                    class="{{ request()->routeIs('admin.orders.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class='fa fa-th-large'></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-yellow-800 bg-yellow-100 rounded-full ms-3 dark:bg-yellow-900 dark:text-yellow-300">
                        {{ Number::abbreviate($totalConfirmedOrders ?? 0) }}
                    </span>
                </a>
            </li>
            <li class="" title="Transactions">
                <a href="{{ route('admin.transactions.index') }}"
                    class="{{ request()->routeIs('admin.transactions.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-money"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Transactions</span>
                </a>
            </li>

            <hr>

            <li class="">
                <a href="{{ route('admin.brands.index') }}"
                    class="{{ request()->routeIs('admin.brands.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-circle"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Brands</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.categories.index') }}"
                    class="{{ request()->routeIs('admin.categories.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Category</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.promotions.index') }}"
                    class="{{ request()->routeIs('admin.promotions.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-tags"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Promotion</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.customizations.index') }}"
                    class="{{ request()->routeIs('admin.customizations.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-flag"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Customizations</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.faqs.index') }}"
                    class="{{ request()->routeIs('admin.faqs.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-book"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Faqs</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.assets.index') }}"
                    class="{{ request()->routeIs('admin.assets.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-folder-open-o"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Assets</span>
                </a>
            </li>

            <hr>

            <li class="">
                <a href="{{ route('admin.users.index') }}"
                    class="{{ request()->routeIs('admin.users.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-users"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.newsletters.index') }}"
                    class="{{ request()->routeIs('admin.newsletters.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-bell"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Subscribers</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.messages.index') }}"
                    class="{{ request()->routeIs('admin.messages.*') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-comments"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Messages</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-red-800 bg-red-100 rounded-full ms-3 dark:bg-red-900 dark:text-red-300">
                        {{ Number::abbreviate($unreadMessages ?? 0) }}
                    </span>
                </a>
            </li>

            <hr>

            <li class="">
                <a href="{{ route('admin.profile') }}"
                    class="{{ request()->routeIs('admin.profile') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-user"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.settings') }}"
                    class="{{ request()->routeIs('admin.settings') ? 'text-white bg-[' . $app_brand['bg-color'] . ']' : '' }}
                        flex items-center p-2 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white hover:bg-[{{ $app_brand['primary'] }}] dark:hover:bg-gray-700 group">
                    <div
                        class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <i class="fa fa-gear"></i>
                    </div>
                    <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
                </a>
            </li>

            <li>
                <form method="post" action="{{ route('logout') }}"
                    class="hover:bg-red-700 dark:hover:bg-gray-700 text-gray-900 hover:text-gray-100 rounded-lg dark:text-white w-full">
                    @csrf
                    <button type="submit" class="w-100 py-2 flex items-center rounded-lg group">
                        <div
                            class="flex-shrink-0 w-8 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class='fa fa-sign-out'></i>
                        </div>
                        <span class="flex-1 pl-5 whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
        <!-- End of Sidebar Menu -->
    </div>
</aside>
