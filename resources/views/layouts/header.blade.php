<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @fonts

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'glow': 'glow 2s ease-in-out infinite alternate'
                    },
                    keyframes: {
                        float: {
                            '0%,100%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            }
                        },
                        fadeInUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(30px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        },
                        glow: {
                            '0%': {
                                textShadow: '0 0 0px rgba(79,70,229,0)'
                            },
                            '100%': {
                                textShadow: '0 0 10px rgba(79,70,229,0.5)'
                            }
                        }
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(circle at top left, var(--tw-gradient-stops))'
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.07)',
                        'card-hover': '0 25px 35px -12px rgba(0, 0, 0, 0.15)',
                        'neon': '0 0 15px rgba(79,70,229,0.4)'
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans antialiased overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <a href="/">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-tr from-indigo-600 to-violet-500 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-indigo-700 to-purple-700 bg-clip-text text-transparent tracking-tight">EduTutorHub</span>
                    </div>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-8 text-gray-700 font-medium">
                <a href="/" class="hover:text-indigo-600 transition">Home</a>
                <a href="#" class="hover:text-indigo-600 transition">For
                    Tutors</a>
                <a href="JobBoard.php" class="hover:text-indigo-600 transition">Tuition Jobs</a>
                <a href="#" class="hover:text-indigo-600 transition">Success</a><a href="#"
                    class="hover:text-indigo-600 transition">Contact</a>
            </div>
            <div class="flex gap-3"><a href="/login"><button
                        class="px-5 py-2 text-indigo-600 font-semibold rounded-full border border-indigo-200 hover:bg-indigo-50 transition">Login</a><button
                    class="px-5 py-2 bg-indigo-600 text-white font-semibold rounded-full shadow-md hover:bg-indigo-700 transition">Become
                    Tutor</button></div>
        </div>
    </nav>
