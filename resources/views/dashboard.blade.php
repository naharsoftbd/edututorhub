<x-app-layout>


    <!-- Scrollable Content -->

        <!-- Page Header -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-8">
            <div>
                <h1 class="text-2xl lg:text-3xl font-bold text-gray-900">Dashboard Overview</h1>
                <p class="text-gray-500 mt-1">Welcome back, Alex! Here's what's happening today.</p>
            </div>
            <div class="flex items-center space-x-3 mt-4 lg:mt-0">
                <button
                    class="flex items-center px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Export
                </button>
                <button
                    class="flex items-center px-4 py-2 bg-indigo-600 rounded-lg text-sm font-medium text-white hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/30">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add New
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 lg:gap-6 mb-8">
            <!-- Total Students -->
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <span
                        class="flex items-center text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                        +12.5%
                    </span>
                </div>
                <p class="text-sm text-gray-500 font-medium">Total Students</p>
                <h3 class="text-3xl font-bold text-gray-900 mt-1">2,847</h3>
                <p class="text-xs text-gray-400 mt-2">+312 new this month</p>
            </div>

            <!-- Active Tutors -->
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                            </path>
                        </svg>
                    </div>
                    <span
                        class="flex items-center text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                        +8.2%
                    </span>
                </div>
                <p class="text-sm text-gray-500 font-medium">Active Tutors</p>
                <h3 class="text-3xl font-bold text-gray-900 mt-1">486</h3>
                <p class="text-xs text-gray-400 mt-2">12 pending approval</p>
            </div>

            <!-- Revenue -->
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <span
                        class="flex items-center text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                        +24.8%
                    </span>
                </div>
                <p class="text-sm text-gray-500 font-medium">Total Revenue</p>
                <h3 class="text-3xl font-bold text-gray-900 mt-1">$84,295</h3>
                <p class="text-xs text-gray-400 mt-2">+$16,820 this month</p>
            </div>

            <!-- Live Sessions -->
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-pulse"></span>
                    </div>
                    <span
                        class="flex items-center text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 bg-red-500 rounded-full mr-1 animate-pulse"></span>
                        Live
                    </span>
                </div>
                <p class="text-sm text-gray-500 font-medium">Live Sessions</p>
                <h3 class="text-3xl font-bold text-gray-900 mt-1">142</h3>
                <p class="text-xs text-gray-400 mt-2">Active right now</p>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-8">
            <!-- Revenue Chart -->
            <div class="xl:col-span-2 bg-white rounded-xl p-6 border border-gray-100 shadow-sm">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Revenue Overview</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Monthly earnings breakdown</p>
                    </div>
                    <div class="flex items-center space-x-2 mt-3 sm:mt-0 bg-gray-100 rounded-lg p-1">
                        <button
                            class="px-3 py-1.5 text-xs font-semibold text-gray-600 rounded-md hover:bg-white transition">Week</button>
                        <button
                            class="px-3 py-1.5 text-xs font-semibold bg-white text-indigo-600 rounded-md shadow-sm">Month</button>
                        <button
                            class="px-3 py-1.5 text-xs font-semibold text-gray-600 rounded-md hover:bg-white transition">Year</button>
                    </div>
                </div>
                <div class="h-72">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>

            <!-- User Distribution -->
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">User Distribution</h3>
                        <p class="text-sm text-gray-500 mt-0.5">By role type</p>
                    </div>
                    <button class="p-1.5 hover:bg-gray-100 rounded-lg transition">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="h-48 flex items-center justify-center">
                    <canvas id="distributionChart"></canvas>
                </div>
                <div class="mt-4 space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-indigo-500 rounded-full mr-2"></div>
                            <span class="text-sm text-gray-600">Students</span>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">2,847</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                            <span class="text-sm text-gray-600">Tutors</span>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">486</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-emerald-500 rounded-full mr-2"></div>
                            <span class="text-sm text-gray-600">Admins</span>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">12</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tables Row -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

            <!-- Recent Transactions -->
            <div class="xl:col-span-2 bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="flex items-center justify-between p-6 border-b border-gray-100">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Recent Transactions</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Latest payment activity</p>
                    </div>
                    <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800">View all
                        →</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-100">
                            <tr>
                                <th
                                    class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-3">
                                    User</th>
                                <th
                                    class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-3">
                                    Type</th>
                                <th
                                    class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-3">
                                    Amount</th>
                                <th
                                    class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-3">
                                    Status</th>
                                <th
                                    class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider px-6 py-3">
                                    Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-br from-pink-400 to-red-500 flex items-center justify-center text-white text-xs font-bold mr-3">
                                            SM</div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-900">Sarah Miller</p>
                                            <p class="text-xs text-gray-500">sarah@edu.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">Tutor Payout</td>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-900">$245.00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></span>
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 12, 2026</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white text-xs font-bold mr-3">
                                            JD</div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-900">John Davis</p>
                                            <p class="text-xs text-gray-500">john@edu.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">Subscription</td>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-900">$49.99</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></span>
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 12, 2026</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center text-white text-xs font-bold mr-3">
                                            EW</div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-900">Emma Wilson</p>
                                            <p class="text-xs text-gray-500">emma@edu.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">Session Booking</td>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-900">$75.00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                                        <span class="w-1.5 h-1.5 bg-yellow-500 rounded-full mr-1.5"></span>
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 11, 2026</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center text-white text-xs font-bold mr-3">
                                            MJ</div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-900">Michael Johnson</p>
                                            <p class="text-xs text-gray-500">michael@edu.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">Refund</td>
                                <td class="px-6 py-4 text-sm font-semibold text-red-600">-$30.00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-700">
                                        <span class="w-1.5 h-1.5 bg-red-500 rounded-full mr-1.5"></span>
                                        Refunded
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 11, 2026</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center text-white text-xs font-bold mr-3">
                                            LB</div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-900">Lisa Brown</p>
                                            <p class="text-xs text-gray-500">lisa@edu.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">Tutor Payout</td>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-900">$520.00</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></span>
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 10, 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pending Tutor Approvals -->
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="flex items-center justify-between p-6 border-b border-gray-100">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Pending Approvals</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Tutor applications</p>
                    </div>
                    <span
                        class="bg-yellow-100 text-yellow-700 text-xs font-bold px-2.5 py-1 rounded-full">12</span>
                </div>
                <div class="divide-y divide-gray-100">
                    <!-- Item 1 -->
                    <div class="p-4 hover:bg-gray-50 transition">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center text-white text-sm font-bold mr-3">
                                    DR</div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Dr. Robert Chen</p>
                                    <p class="text-xs text-gray-500">Mathematics • PhD</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
                            <span>⭐ 4.9 rating</span>
                            <span>Applied 2h ago</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="flex-1 bg-indigo-600 text-white text-xs font-semibold py-2 rounded-lg hover:bg-indigo-700 transition">Approve</button>
                            <button
                                class="flex-1 bg-gray-100 text-gray-700 text-xs font-semibold py-2 rounded-lg hover:bg-gray-200 transition">Review</button>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="p-4 hover:bg-gray-50 transition">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-rose-500 flex items-center justify-center text-white text-sm font-bold mr-3">
                                    AL</div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Amanda Lee</p>
                                    <p class="text-xs text-gray-500">English Literature</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
                            <span>⭐ 4.7 rating</span>
                            <span>Applied 5h ago</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="flex-1 bg-indigo-600 text-white text-xs font-semibold py-2 rounded-lg hover:bg-indigo-700 transition">Approve</button>
                            <button
                                class="flex-1 bg-gray-100 text-gray-700 text-xs font-semibold py-2 rounded-lg hover:bg-gray-200 transition">Review</button>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="p-4 hover:bg-gray-50 transition">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center text-white text-sm font-bold mr-3">
                                    KP</div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Kevin Park</p>
                                    <p class="text-xs text-gray-500">Computer Science</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
                            <span>⭐ 5.0 rating</span>
                            <span>Applied 1d ago</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="flex-1 bg-indigo-600 text-white text-xs font-semibold py-2 rounded-lg hover:bg-indigo-700 transition">Approve</button>
                            <button
                                class="flex-1 bg-gray-100 text-gray-700 text-xs font-semibold py-2 rounded-lg hover:bg-gray-200 transition">Review</button>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-t border-gray-100 text-center">
                    <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800">View all
                        applications →</a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center text-sm text-gray-500">
            <p>&copy; 2026 EduTutorHub Admin Panel. All rights reserved.</p>
        </div>
</x-app-layout>
