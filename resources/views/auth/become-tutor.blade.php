<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTutorHub - Login & Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)'
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)'
                            },
                            '100%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar and smooth transitions */
        body {
            font-family: 'Inter', sans-serif;
        }

        .form-view {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .form-hidden {
            display: none;
            opacity: 0;
            transform: translateY(10px);
        }

        .form-visible {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* Password toggle */
        .toggle-password {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans antialiased">

    <div class="flex min-h-screen">

        <!-- ========================================== -->
        <!-- LEFT COLUMN: BRANDING & HERO (Hidden on mobile) -->
        <!-- ========================================== -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-900 relative overflow-hidden flex-col justify-between p-12">

            <!-- Animated Background Blobs -->
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-yellow-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob" style="animation-delay: 4s;"></div>

            <!-- Content -->
            <div class="relative z-10">
                <!-- Logo -->
                <div class="flex items-center space-x-3 mb-16">
                    <div class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-white tracking-tight">EduTutorHub</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl xl:text-5xl font-extrabold text-white leading-tight mb-6">
                    Unlock Your <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-pink-400">Full Potential.</span>
                </h1>
                <p class="text-lg text-indigo-100/80 max-w-md leading-relaxed">
                    Connect with expert tutors, master new skills, and achieve your academic goals with our personalized learning platform.
                </p>
            </div>

            <!-- Features List -->
            <div class="relative z-10 space-y-4 mb-12">
                <div class="flex items-center space-x-4 bg-white/5 backdrop-blur-sm p-4 rounded-xl border border-white/10">
                    <div class="w-10 h-10 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold">Verified Expert Tutors</h3>
                        <p class="text-indigo-200/70 text-sm">Rigorously vetted professionals in 100+ subjects.</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 bg-white/5 backdrop-blur-sm p-4 rounded-xl border border-white/10">
                    <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold">Flexible Scheduling</h3>
                        <p class="text-indigo-200/70 text-sm">Learn at your own pace, 24/7 availability.</p>
                    </div>
                </div>
            </div>

            <!-- Footer / Trust -->
            <div class="relative z-10 flex items-center space-x-4 text-indigo-200/60 text-sm">
                <div class="flex -space-x-2">
                    <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-indigo-900"></div>
                    <div class="w-8 h-8 rounded-full bg-gray-400 border-2 border-indigo-900"></div>
                    <div class="w-8 h-8 rounded-full bg-gray-500 border-2 border-indigo-900"></div>
                </div>
                <p>Join 50,000+ students already learning.</p>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- RIGHT COLUMN: FORMS -->
        <!-- ========================================== -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12 bg-white">
            <div class="w-full max-w-md">

                <!-- Mobile Logo (Only shows on small screens) -->
                <div class="lg:hidden flex items-center justify-center space-x-2 mb-8">
                    <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gray-900">EduTutorHub</span>
                </div>

                <!-- Smart Toggle Switch -->
                <div class="flex bg-gray-100 p-1.5 rounded-xl mb-8 border border-gray-200">
                    <button id="loginToggle" onclick="switchView('login')" class="w-1/2 py-2.5 rounded-lg bg-white shadow-sm text-indigo-600 font-semibold text-sm transition-all duration-200">
                        Welcome Back
                    </button>
                    <button id="registerToggle" onclick="switchView('register')" class="w-1/2 py-2.5 rounded-lg text-gray-500 font-semibold text-sm hover:text-gray-700 transition-all duration-200">
                        Create Account
                    </button>
                </div>

                <!-- ================= LOGIN FORM ================= -->
                <div id="loginView" class="form-view form-visible">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Sign in to your account</h2>
                    <p class="text-gray-500 mb-8">Enter your credentials to access your dashboard.</p>

                    <form class="space-y-5" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Email Address</label>
                            <input type="email" name="email" placeholder="name@university.edu" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition text-gray-900 placeholder-gray-400">
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-1.5">
                                <label class="block text-sm font-medium text-gray-700">Password</label>
                                <a href="#" class="text-xs font-semibold text-indigo-600 hover:text-indigo-800">Forgot password?</a>
                            </div>
                            <div class="relative">
                                <input type="password" name="password" id="loginPass" placeholder="••••••••" class="w-full px-4 py-3 pr-10 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition text-gray-900 placeholder-gray-400">
                                <span class="toggle-password absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600" onclick="togglePassword('loginPass', this)">
                                    <svg class="eye-open w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg class="eye-closed w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-indigo-600 text-white py-3.5 rounded-xl font-semibold hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition shadow-lg shadow-indigo-500/20 transform active:scale-[0.98]">
                            Sign In
                        </button>
                    </form>

                    <div class="mt-8">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-xs uppercase"><span class="bg-white px-3 text-gray-400 font-medium tracking-wider">Or continue with</span></div>
                        </div>
                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <button class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05" />
                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
                                </svg>
                                Google
                            </button>
                            <button class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.477 0 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V19c0 .27.16.59.67.5C17.14 18.16 20 14.42 20 10A10 10 0 0010 0z" clip-rule="evenodd"></path>
                                </svg>
                                GitHub
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ================= REGISTER FORM ================= -->
                <div id="registerView" class="form-view form-hidden">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Create your account</h2>
                    <p class="text-gray-500 mb-8">Start your learning journey today.</p>

                    <form class="space-y-5" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Full Name</label>
                            <input type="text" placeholder="John Doe" name="name" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition text-gray-900 placeholder-gray-400">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Email Address</label>
                            <input type="email" name="email" placeholder="name@university.edu" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition text-gray-900 placeholder-gray-400">
                        </div>

                        <!-- SMART ROLE SELECTION CARDS -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2.5">How will you use EduTutorHub?</label>
                            <div class="grid grid-cols-2 gap-3">
                                <!-- Student Card -->
                                <label class="cursor-pointer group">
                                    <input type="radio" name="role" value="student" class="peer sr-only" checked>
                                    <div class="p-4 border-2 border-gray-200 rounded-xl peer-checked:border-indigo-500 peer-checked:bg-indigo-50/50 transition-all duration-200 group-hover:border-gray-300">
                                        <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mb-3 peer-checked:bg-indigo-500 peer-checked:text-white transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Student</h3>
                                        <p class="text-xs text-gray-500 mt-0.5">Find a tutor</p>
                                    </div>
                                </label>

                                <!-- Tutor Card -->
                                <label class="cursor-pointer group">
                                    <input type="radio" name="role" value="tutor" class="peer sr-only">
                                    <div class="p-4 border-2 border-gray-200 rounded-xl peer-checked:border-indigo-500 peer-checked:bg-indigo-50/50 transition-all duration-200 group-hover:border-gray-300">
                                        <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-3 peer-checked:bg-purple-500 peer-checked:text-white transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                            </svg>
                                        </div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Tutor</h3>
                                        <p class="text-xs text-gray-500 mt-0.5">Teach students</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                            <div class="relative">
                                <input type="password" name="password" id="regPass" placeholder="Min. 8 characters" class="w-full px-4 py-3 pr-10 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition text-gray-900 placeholder-gray-400">
                                <span class="toggle-password absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600" onclick="togglePassword('regPass', this)">
                                    <svg class="eye-open w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg class="eye-closed w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Confirm Password</label>
                            <div class="relative">
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Min. 8 characters" class="w-full px-4 py-3 pr-10 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition text-gray-900 placeholder-gray-400">
                                <span class="toggle-password absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600" onclick="togglePassword('regPass', this)">
                                    <svg class="eye-open w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg class="eye-closed w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>



                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded transition">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-500">I agree to the <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Terms</a> and <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Privacy Policy</a></label>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-indigo-600 text-white py-3.5 rounded-xl font-semibold hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition shadow-lg shadow-indigo-500/20 transform active:scale-[0.98]">
                            Create Account
                        </button>
                    </form>
                </div>

                <!-- Bottom Text -->
                <p class="text-center text-sm text-gray-500 mt-8">
                    <span id="bottomText">Don't have an account?</span>
                    <button onclick="switchView(document.getElementById('loginView').classList.contains('form-hidden') ? 'login' : 'register')" class="font-semibold text-indigo-600 hover:text-indigo-800" id="bottomLink">
                        Sign up for free
                    </button>
                </p>
            </div>
        </div>
    </div>

    <script>
        function switchView(view) {
            const loginView = document.getElementById('loginView');
            const registerView = document.getElementById('registerView');
            const loginToggle = document.getElementById('loginToggle');
            const registerToggle = document.getElementById('registerToggle');
            const bottomText = document.getElementById('bottomText');
            const bottomLink = document.getElementById('bottomLink');

            if (view === 'login') {
                // Show Login
                loginView.classList.remove('form-hidden');
                loginView.classList.add('form-visible');
                registerView.classList.remove('form-visible');
                registerView.classList.add('form-hidden');

                // Toggle Styles
                loginToggle.className = 'w-1/2 py-2.5 rounded-lg bg-white shadow-sm text-indigo-600 font-semibold text-sm transition-all duration-200';
                registerToggle.className = 'w-1/2 py-2.5 rounded-lg text-gray-500 font-semibold text-sm hover:text-gray-700 transition-all duration-200';

                // Bottom Text
                bottomText.textContent = "Don't have an account?";
                bottomLink.textContent = "Sign up for free";
            } else {
                // Show Register
                registerView.classList.remove('form-hidden');
                registerView.classList.add('form-visible');
                loginView.classList.remove('form-visible');
                loginView.classList.add('form-hidden');

                // Toggle Styles
                registerToggle.className = 'w-1/2 py-2.5 rounded-lg bg-white shadow-sm text-indigo-600 font-semibold text-sm transition-all duration-200';
                loginToggle.className = 'w-1/2 py-2.5 rounded-lg text-gray-500 font-semibold text-sm hover:text-gray-700 transition-all duration-200';

                // Bottom Text
                bottomText.textContent = "Already have an account?";
                bottomLink.textContent = "Sign in";
            }
        }

        function togglePassword(inputId, iconContainer) {
            const input = document.getElementById(inputId);
            const eyeOpen = iconContainer.querySelector('.eye-open');
            const eyeClosed = iconContainer.querySelector('.eye-closed');

            if (input.type === 'password') {
                input.type = 'text';
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            } else {
                input.type = 'password';
                eyeOpen.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
        }
    </script>
</body>

</html>
