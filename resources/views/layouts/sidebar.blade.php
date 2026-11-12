<!-- ============ SIDEBAR ============ -->
<aside id="sidebar"
    class="sidebar-transition w-64 bg-white border-r border-gray-200 flex flex-col z-30 fixed lg:relative h-full -translate-x-full lg:translate-x-0">

    <!-- Logo -->
    <div class="h-16 flex items-center justify-between px-6 border-b border-gray-100">
        <div class="flex items-center space-x-2">
            <div
                class="w-9 h-9 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center shadow-lg shadow-indigo-500/30">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                    </path>
                </svg>
            </div>
            <div>
                <h1 class="text-base font-bold text-gray-900">EduTutorHub</h1>
                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Admin Panel</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto py-6 px-4">
        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mb-3">Main Menu</p>
        <ul class="space-y-1">
            <li>
                <a href="#"
                    class="nav-active relative flex items-center px-3 py-2.5 rounded-lg text-indigo-600 font-semibold text-sm">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Students
                    <span
                        class="ml-auto bg-indigo-100 text-indigo-600 text-xs font-semibold px-2 py-0.5 rounded-full">2,847</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                        </path>
                    </svg>
                    Tutors
                    <span
                        class="ml-auto bg-yellow-100 text-yellow-700 text-xs font-semibold px-2 py-0.5 rounded-full">12
                        pending</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                    Live Sessions
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                        </path>
                    </svg>
                    Bookings
                </a>
            </li>
        </ul>

        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mt-6 mb-3">Finance</p>
        <ul class="space-y-1">
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    Payments
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                    Reports
                </a>
            </li>
        </ul>

        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mt-6 mb-3">System</p>
        <ul class="space-y-1">
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 font-medium text-sm transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    Help & Support
                </a>
            </li>
        </ul>
    </nav>

    <!-- Upgrade Card -->
    <div class="p-4 border-t border-gray-100">
        <div
            class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl p-4 text-white relative overflow-hidden">
            <div class="absolute -right-4 -top-4 w-20 h-20 bg-white/10 rounded-full"></div>
            <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-white/10 rounded-full"></div>
            <div class="relative">
                <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <h3 class="font-bold text-sm mb-1">Upgrade to Pro</h3>
                <p class="text-xs text-indigo-100 mb-3">Unlock advanced analytics & features</p>
                <button
                    class="w-full bg-white text-indigo-600 text-xs font-semibold py-2 rounded-lg hover:bg-indigo-50 transition">Upgrade
                    Now</button>
            </div>
        </div>
    </div>
</aside>
