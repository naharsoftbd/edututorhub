
    @include('layouts.header')

        <main class="pt-24">
            <!-- SMART HERO SECTION -->
            <section class="relative overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-purple-50">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;utf8,<svg xmlns=\" http://www.w3.org/2000/svg\"
                    viewBox=\"0 0 200 200\" opacity=\"0.03\">
                    <path fill=\"%234F46E5\" d=\"M45.3 48.6L78 25.3l32.7 23.3L143 48.6l-32.7 23.3L143 95.2l-32.7 23.3L143
                        141.8l-32.7-23.3-32.7 23.3-32.7-23.3L45.3 141.8l32.7-23.3L45.3 95.2l32.7-23.3z\" />
                </div>
                <div class="relative max-w-7xl mx-auto px-6 py-16 lg:py-24 flex flex-col lg:flex-row items-center gap-12">
                    <div class="flex-1 text-center lg:text-left animate-fade-in-up">
                        <div
                            class="inline-flex items-center gap-2 bg-white/70 backdrop-blur-sm rounded-full px-4 py-1.5 border border-indigo-100 mb-6">
                            <span class="relative flex h-2 w-2"><span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400"></span><span
                                    class="relative rounded-full h-2 w-2 bg-indigo-500"></span></span><span
                                class="text-sm font-semibold text-indigo-700">AI-Matched · 10k+ Active Tutors</span>
                        </div>
                        <h1 class="text-5xl lg:text-7xl font-extrabold tracking-tight text-gray-900 leading-tight">Supercharge Your
                            <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Tutoring
                                Career</span>
                        </h1>
                        <p class="text-gray-600 text-lg md:text-xl mt-6 max-w-2xl mx-auto lg:mx-0">Join the smartest tuition ecosystem
                            — connect with students, access live jobs, and grow your impact with AI tools.</p>
                        <div class="flex flex-wrap gap-4 justify-center lg:justify-start mt-8"><button
                                class="px-8 py-3.5 bg-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:bg-indigo-700 transition">Start
                                Free Trial</button><button
                                class="px-8 py-3.5 bg-white text-gray-800 font-semibold rounded-xl border shadow-sm hover:bg-gray-50 transition"><i
                                    class="fas fa-play-circle text-indigo-500 mr-2"></i>Watch Demo</button></div>
                    </div>
                    <div class="flex-1 relative flex justify-center animate-float">
                        <div class="glass-card rounded-3xl shadow-xl p-6 w-full max-w-md border border-white/40">
                            <div class="flex justify-between items-center mb-3"><span class="text-indigo-700 font-bold">🔥 Live
                                    Demand</span><i class="fas fa-chart-line text-indigo-500"></i></div>
                            <div class="space-y-3">
                                <div class="flex justify-between"><span>Math Tutors needed</span><span class="font-bold">124+</span></div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-500 h-2 rounded-full w-3/4"></div>
                                </div>
                                <div class="flex justify-between"><span>Science Jobs</span><span class="font-bold">89</span></div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full w-2/3"></div>
                                </div>
                                <div class="mt-4 p-3 bg-indigo-50 rounded-xl text-sm"><i class="fas fa-robot mr-2"></i> AI matches you in
                                    under 2 min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- STATS BLOCK -->
            <section class="max-w-7xl mx-auto px-6 -mt-8 relative z-20">
                <div
                    class="grid grid-cols-2 md:grid-cols-4 gap-5 bg-white rounded-3xl shadow-xl p-6 md:p-8 border border-gray-100">
                    <div class="text-center">
                        <div class="text-4xl font-black text-indigo-600 stat-number">12,847</div>
                        <div class="text-gray-600 text-sm mt-1">Registered Tutors</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-purple-600 stat-number">58.2k</div>
                        <div class="text-gray-600 text-sm mt-1">Total Applications</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-emerald-600 stat-number">3,240</div>
                        <div class="text-gray-600 text-sm mt-1">Live Tuition Jobs</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-amber-600 stat-number">94k+</div>
                        <div class="text-gray-600 text-sm mt-1">Total Stakeholders</div>
                    </div>
                </div>
            </section>

            <!-- SERVICE CATEGORIES SLIDER -->
            <section class="py-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12"><span class="text-indigo-600 font-semibold text-sm uppercase tracking-wide"><i
                                class="fas fa-sliders-h mr-1"></i>Browse by category</span>
                        <h2 class="text-4xl font-bold mt-2">Service Categories</h2>
                    </div>
                    <div class="relative px-4 md:px-10">
                        <div class="swiper categorySwiper overflow-hidden pb-12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white rounded-2xl p-6 text-center shadow-md border hover:shadow-xl transition hover:border-indigo-200">
                                        <div class="w-16 h-16 mx-auto rounded-2xl bg-indigo-100 flex items-center justify-center text-3xl">📐
                                        </div>
                                        <h3 class="text-xl font-bold mt-4">Mathematics</h3>
                                        <p class="text-gray-500 text-sm">Algebra, Calculus, Stats</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md border hover:shadow-xl">
                                        <div class="w-16 h-16 mx-auto rounded-2xl bg-emerald-100 flex items-center justify-center text-3xl">🧪
                                        </div>
                                        <h3 class="text-xl font-bold mt-4">Sciences</h3>
                                        <p class="text-gray-500 text-sm">Physics, Chem, Bio</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md border hover:shadow-xl">
                                        <div class="w-16 h-16 mx-auto rounded-2xl bg-rose-100 flex items-center justify-center text-3xl">🌐
                                        </div>
                                        <h3 class="text-xl font-bold mt-4">Languages</h3>
                                        <p class="text-gray-500 text-sm">English, Spanish, French</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md border hover:shadow-xl">
                                        <div class="w-16 h-16 mx-auto rounded-2xl bg-cyan-100 flex items-center justify-center text-3xl">💻
                                        </div>
                                        <h3 class="text-xl font-bold mt-4">Coding & Tech</h3>
                                        <p class="text-gray-500 text-sm">Python, Web Dev, AI</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md border hover:shadow-xl">
                                        <div class="w-16 h-16 mx-auto rounded-2xl bg-amber-100 flex items-center justify-center text-3xl">📜
                                        </div>
                                        <h3 class="text-xl font-bold mt-4">Humanities</h3>
                                        <p class="text-gray-500 text-sm">History, Economics</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md border hover:shadow-xl">
                                        <div class="w-16 h-16 mx-auto rounded-2xl bg-violet-100 flex items-center justify-center text-3xl">🎯
                                        </div>
                                        <h3 class="text-xl font-bold mt-4">Test Prep</h3>
                                        <p class="text-gray-500 text-sm">SAT, GRE, GMAT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev-custom swiper-button-custom absolute left-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-left"></i></div>
                        <div class="swiper-button-next-custom swiper-button-custom absolute right-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </section>

            <!-- MEET YOUR EXPERT TUTORS SLIDER (FIXED - NOW FULLY WORKING SLIDER) -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold">Meet Your <span class="text-indigo-600">Expert Tutors</span></h2>
                        <p class="text-gray-500">Top-rated educators across disciplines — swipe to explore</p>
                    </div>
                    <div class="relative px-4 md:px-12">
                        <div class="swiper expertSwiper overflow-hidden pb-12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition-all group">
                                        <div
                                            class="w-28 h-28 rounded-full mx-auto overflow-hidden border-4 border-indigo-100 group-hover:border-indigo-300 transition">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-full h-full object-cover">
                                        </div>
                                        <h4 class="font-bold text-xl mt-4">Dr. Alan Grant</h4>
                                        <p class="text-indigo-600 font-medium">Physics Expert</p>
                                        <div class="flex justify-center text-yellow-400 text-sm mt-1">★★★★★</div>
                                        <p class="text-xs text-gray-400 mt-2">PhD · 15+ years experience</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition-all group">
                                        <div
                                            class="w-28 h-28 rounded-full mx-auto overflow-hidden border-4 border-indigo-100 group-hover:border-indigo-300">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-full h-full object-cover">
                                        </div>
                                        <h4 class="font-bold text-xl mt-4">Prof. Linda Zhao</h4>
                                        <p class="text-indigo-600 font-medium">Chemistry Specialist</p>
                                        <div class="flex justify-center text-yellow-400 text-sm mt-1">★★★★★</div>
                                        <p class="text-xs text-gray-400 mt-2">Research fellow · MIT</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition-all group">
                                        <div
                                            class="w-28 h-28 rounded-full mx-auto overflow-hidden border-4 border-indigo-100 group-hover:border-indigo-300">
                                            <img src="https://randomuser.me/api/portraits/men/45.jpg" class="w-full h-full object-cover">
                                        </div>
                                        <h4 class="font-bold text-xl mt-4">Michael Rivera</h4>
                                        <p class="text-indigo-600 font-medium">CS & AI</p>
                                        <div class="flex justify-center text-yellow-400 text-sm mt-1">★★★★☆</div>
                                        <p class="text-xs text-gray-400 mt-2">Ex-Google Engineer</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition-all group">
                                        <div
                                            class="w-28 h-28 rounded-full mx-auto overflow-hidden border-4 border-indigo-100 group-hover:border-indigo-300">
                                            <img src="https://randomuser.me/api/portraits/women/89.jpg" class="w-full h-full object-cover">
                                        </div>
                                        <h4 class="font-bold text-xl mt-4">Dr. Emily Stone</h4>
                                        <p class="text-indigo-600 font-medium">Molecular Biology</p>
                                        <div class="flex justify-center text-yellow-400 text-sm mt-1">★★★★★</div>
                                        <p class="text-xs text-gray-400 mt-2">Oxford Ph.D.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition-all group">
                                        <div
                                            class="w-28 h-28 rounded-full mx-auto overflow-hidden border-4 border-indigo-100 group-hover:border-indigo-300">
                                            <img src="https://randomuser.me/api/portraits/men/75.jpg" class="w-full h-full object-cover">
                                        </div>
                                        <h4 class="font-bold text-xl mt-4">Prof. James Wu</h4>
                                        <p class="text-indigo-600 font-medium">Mathematics Olympiad</p>
                                        <div class="flex justify-center text-yellow-400 text-sm mt-1">★★★★★</div>
                                        <p class="text-xs text-gray-400 mt-2">IMO gold medalist coach</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination expert-pagination"></div>
                        </div>
                        <div class="swiper-button-prev-expert swiper-button-custom absolute left-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-left"></i></div>
                        <div class="swiper-button-next-expert swiper-button-custom absolute right-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </section>

            <!-- FEATURED TUTORS SLIDER -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold">🌟 Featured Tutors</h2>
                        <p class="text-gray-500">Handpicked elite educators with proven results</p>
                    </div>
                    <div class="relative px-4 md:px-12">
                        <div class="swiper featuredSwiper overflow-hidden pb-12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="glass-card rounded-2xl p-5 flex flex-col items-center text-center"><img
                                            src="https://randomuser.me/api/portraits/women/33.jpg" class="w-24 h-24 rounded-full object-cover">
                                        <h3 class="font-bold mt-3">Sarah Johnson</h3>
                                        <p class="text-sm text-gray-600">Math · 12+ yrs</p><span
                                            class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full mt-2">Top 1% Tutor</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="glass-card rounded-2xl p-5 flex flex-col items-center text-center"><img
                                            src="https://randomuser.me/api/portraits/men/22.jpg" class="w-24 h-24 rounded-full object-cover">
                                        <h3 class="font-bold mt-3">James Wu</h3>
                                        <p class="text-sm text-gray-600">Physics Olympiad</p><span
                                            class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full mt-2">Gold Medalist</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="glass-card rounded-2xl p-5 flex flex-col items-center text-center"><img
                                            src="https://randomuser.me/api/portraits/women/55.jpg" class="w-24 h-24 rounded-full object-cover">
                                        <h3 class="font-bold mt-3">Priya Mehta</h3>
                                        <p class="text-sm text-gray-600">Coding & Robotics</p><span
                                            class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full mt-2">Mentor of Year</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="glass-card rounded-2xl p-5 flex flex-col items-center text-center"><img
                                            src="https://randomuser.me/api/portraits/men/75.jpg" class="w-24 h-24 rounded-full object-cover">
                                        <h3 class="font-bold mt-3">Carlos Mendez</h3>
                                        <p class="text-sm text-gray-600">Spanish & ESL</p><span
                                            class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full mt-2">Native Speaker</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination featured-pagination"></div>
                        </div>
                        <div class="swiper-button-prev-featured swiper-button-custom absolute left-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-left"></i></div>
                        <div class="swiper-button-next-featured swiper-button-custom absolute right-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </section>

            <!-- FIND YOUR SUBJECT SPECIALIST SLIDER -->
            <section class="py-16 bg-gradient-to-r from-indigo-50 to-purple-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold">🔍 Find Your Subject Specialist</h2>
                        <p class="text-gray-600">Filter by niche & book instantly</p>
                    </div>
                    <div class="relative px-4 md:px-12">
                        <div class="swiper subjectSwiper overflow-hidden pb-12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl p-5 flex gap-4 items-center shadow-md hover:shadow-lg transition"><i
                                            class="fas fa-calculator text-4xl text-indigo-500"></i>
                                        <div>
                                            <h4 class="font-bold text-lg">Calculus Specialist</h4>
                                            <p class="text-xs text-gray-500">27 tutors available</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl p-5 flex gap-4 items-center shadow-md"><i
                                            class="fas fa-flask text-4xl text-indigo-500"></i>
                                        <div>
                                            <h4 class="font-bold text-lg">Lab Sciences</h4>
                                            <p class="text-xs text-gray-500">42 tutors</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl p-5 flex gap-4 items-center shadow-md"><i
                                            class="fas fa-code text-4xl text-indigo-500"></i>
                                        <div>
                                            <h4 class="font-bold text-lg">Web Development</h4>
                                            <p class="text-xs text-gray-500">19 experts</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl p-5 flex gap-4 items-center shadow-md"><i
                                            class="fas fa-language text-4xl text-indigo-500"></i>
                                        <div>
                                            <h4 class="font-bold text-lg">IELTS/TOEFL</h4>
                                            <p class="text-xs text-gray-500">34 specialists</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl p-5 flex gap-4 items-center shadow-md"><i
                                            class="fas fa-chart-line text-4xl text-indigo-500"></i>
                                        <div>
                                            <h4 class="font-bold text-lg">Statistics & Data</h4>
                                            <p class="text-xs text-gray-500">21 tutors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination subject-pagination"></div>
                        </div>
                        <div class="swiper-button-prev-subject swiper-button-custom absolute left-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-left"></i></div>
                        <div class="swiper-button-next-subject swiper-button-custom absolute right-0 top-1/2 -translate-y-1/2"><i
                                class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </section>

            <!-- HOW DOES IT WORK FOR TUTORS? -->
            <section class="py-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-14">
                        <h2 class="text-4xl font-bold">How does it work for <span class="text-indigo-600">tutors?</span></h2>
                        <p class="text-gray-500 mt-2">From signup to success in 4 simple steps</p>
                    </div>
                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-indigo-100 rounded-2xl flex items-center justify-center text-3xl font-black text-indigo-700 mx-auto group-hover:bg-indigo-200 transition">
                                1</div>
                            <h3 class="font-bold text-xl mt-4">Create Profile</h3>
                            <p class="text-gray-500 text-sm">Showcase your expertise & qualifications</p>
                        </div>
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-indigo-100 rounded-2xl flex items-center justify-center text-3xl font-black text-indigo-700 mx-auto group-hover:bg-indigo-200 transition">
                                2</div>
                            <h3 class="font-bold text-xl mt-4">Get Matched</h3>
                            <p class="text-gray-500 text-sm">AI connects you with relevant students</p>
                        </div>
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-indigo-100 rounded-2xl flex items-center justify-center text-3xl font-black text-indigo-700 mx-auto group-hover:bg-indigo-200 transition">
                                3</div>
                            <h3 class="font-bold text-xl mt-4">Teach Live</h3>
                            <p class="text-gray-500 text-sm">Use smart whiteboard & analytics</p>
                        </div>
                        <div class="text-center group">
                            <div
                                class="w-20 h-20 bg-indigo-100 rounded-2xl flex items-center justify-center text-3xl font-black text-indigo-700 mx-auto group-hover:bg-indigo-200 transition">
                                4</div>
                            <h3 class="font-bold text-xl mt-4">Get Paid</h3>
                            <p class="text-gray-500 text-sm">Secure earnings & build reputation</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TESTIMONIALS -->
            <section class="py-20 bg-gray-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12"><span class="text-indigo-600 font-semibold">❤️ Real voices</span>
                        <h2 class="text-4xl font-bold mt-2">What students & parents say</h2>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="glass-card p-6 rounded-2xl shadow-md">
                            <div class="flex gap-1 text-yellow-400 mb-3">★★★★★</div>
                            <p class="italic text-gray-700">“My son improved from C to A in math within 3 months. The tutors are
                                top-notch!”</p>
                            <div class="mt-4 font-semibold">— Linda Park, Parent</div>
                        </div>
                        <div class="glass-card p-6 rounded-2xl shadow-md">
                            <div class="flex gap-1 text-yellow-400 mb-3">★★★★★</div>
                            <p class="italic text-gray-700">“I found an amazing coding mentor. The platform is intuitive and
                                interactive.”</p>
                            <div class="mt-4 font-semibold">— Rohan S., Student</div>
                        </div>
                        <div class="glass-card p-6 rounded-2xl shadow-md">
                            <div class="flex gap-1 text-yellow-400 mb-3">★★★★★</div>
                            <p class="italic text-gray-700">“As a tutor, I’ve grown my client base by 200% using the referral system.”
                            </p>
                            <div class="mt-4 font-semibold">— Dr. Kim, Tutor</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY CHOOSE US -->
            <section class="py-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-4xl font-bold">Why Choose <span class="text-indigo-600">EduTutorHub?</span></h2>
                            <div class="mt-6 space-y-4">
                                <div class="flex gap-3"><i class="fas fa-check-circle text-indigo-500 text-xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold">AI-Powered Matching</h3>
                                        <p class="text-gray-500">Smart algorithm that aligns student needs with your teaching style.</p>
                                    </div>
                                </div>
                                <div class="flex gap-3"><i class="fas fa-chalkboard-user text-indigo-500 text-xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold">Virtual Classroom Suite</h3>
                                        <p class="text-gray-500">Whiteboard, recording, quizzes, and live analytics.</p>
                                    </div>
                                </div>
                                <div class="flex gap-3"><i class="fas fa-shield-alt text-indigo-500 text-xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold">Secure Payments & Insured</h3>
                                        <p class="text-gray-500">Timely payouts, dispute resolution, and tutor protection.</p>
                                    </div>
                                </div>
                                <div class="flex gap-3"><i class="fas fa-chart-line text-indigo-500 text-xl mt-1"></i>
                                    <div>
                                        <h3 class="font-bold">Growth Analytics</h3>
                                        <p class="text-gray-500">Track student progress and improve retention.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-indigo-100 rounded-3xl p-8 text-center"><i
                                class="fas fa-trophy text-6xl text-indigo-600 mb-4"></i>
                            <p class="font-bold text-2xl">Trusted by 10,000+ <br>tutors globally</p><button
                                class="mt-6 bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition">Join the
                                community →</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- DOWNLOAD APP BLOCK -->
            <section class="py-16 bg-gradient-to-r from-indigo-700 to-purple-700 text-white">
                <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
                    <div>
                        <h2 class="text-3xl font-bold">📱 Download the EduTutorHub App</h2>
                        <p class="mt-2 text-indigo-100">Manage sessions, get notifications, teach on the go.</p>
                        <div class="flex gap-4 mt-5"><button
                                class="bg-black/30 backdrop-blur-sm px-5 py-2 rounded-xl flex items-center gap-2 hover:bg-black/40 transition"><i
                                    class="fab fa-apple text-2xl"></i><span>App Store</span></button><button
                                class="bg-black/30 backdrop-blur-sm px-5 py-2 rounded-xl flex items-center gap-2 hover:bg-black/40 transition"><i
                                    class="fab fa-google-play text-2xl"></i><span>Google Play</span></button></div>
                    </div><img src="https://images.unsplash.com/photo-1545063328-c8e3faffa16f"
                        class="w-80 rounded-[40px] shadow-2xl" />
                </div>
            </section>

            <!-- WE WERE FEATURED ON -->

            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6 text-center">

                    <p class="text-blue-600 font-bold mb-3">MEDIA COVERAGE</p>
                    <h2 class="text-5xl font-black mb-12">We Were Featured On</h2>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center opacity-70">
                        <div class="bg-slate-50 rounded-3xl p-10 text-3xl font-black">BBC</div>
                        <div class="bg-slate-50 rounded-3xl p-10 text-3xl font-black">Forbes</div>
                        <div class="bg-slate-50 rounded-3xl p-10 text-3xl font-black">CNN</div>
                        <div class="bg-slate-50 rounded-3xl p-10 text-3xl font-black">TechCrunch</div>
                    </div>
                </div>
            </section>

            <!-- TOP CTA -->
            <section class="py-20 bg-gradient-to-r from-indigo-700 to-purple-700 text-white">
                <!-- TOP CTA -->
                <div class="max-w-7xl mx-auto px-6">
                    <div class="glass rounded-[40px]">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div>
                                <p class="text-blue-400 font-bold mb-3">START LEARNING TODAY</p>
                                <h2 class="text-5xl font-black leading-tight mb-6">
                                    Ready To Find The Perfect Tutor?
                                </h2>
                                <p class="text-slate-400 text-lg leading-relaxed">
                                    Join thousands of students and parents using TutorX to achieve academic excellence.
                                </p>
                            </div>

                            <div class="flex flex-wrap lg:justify-end gap-4">
                                <button
                                    class="px-8 py-5 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-600 font-bold text-lg hover:scale-105 transition">
                                    Find Tutors
                                </button>

                                <button
                                    class="px-8 py-5 rounded-2xl border border-white/10 bg-white/5 font-bold hover:bg-white/10 transition">
                                    Become A Tutor
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @include('layouts.footer')
</body>

</html>
