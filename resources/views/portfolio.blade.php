@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="fixed w-full z-50 bg-white/70 backdrop-blur-xl border-b border-slate-200 transition-all duration-300 py-4">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center">
        <a href="#" class="text-2xl font-extrabold tracking-tighter text-slate-900">
            CHRIS<span class="text-emerald-600">.</span>
        </a>
        <div class="hidden md:flex space-x-8">
            <a href="#about" class="text-sm font-semibold text-slate-600 hover:text-emerald-500 transition-colors">About</a>
            <a href="#skills" class="text-sm font-semibold text-slate-600 hover:text-emerald-500 transition-colors">Skills</a>
            <a href="#experience" class="text-sm font-semibold text-slate-600 hover:text-emerald-500 transition-colors">Experience</a>
            <a href="#projects" class="text-sm font-semibold text-slate-600 hover:text-emerald-500 transition-colors">Projects</a>
            <a href="#contact" class="text-sm font-semibold text-slate-600 hover:text-emerald-500 transition-colors">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center pt-20 relative overflow-hidden bg-slate-50">
    <!-- Colorful Background Blurs -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10">
        <div class="flex flex-col-reverse md:flex-row items-center gap-12">
            <!-- Kiri: Teks -->
            <div class="w-full md:w-1/2 gs-reveal-up mt-12 md:mt-0">
                <p class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-600 font-bold tracking-wider uppercase mb-5 text-xs shadow-sm">
                    ✨ Welcome to my portfolio
                </p>
                <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 mb-4 leading-tight tracking-tight">
                    Hi, I'm <br/> 
                    <span class="text-emerald-600">Chris Teper</span>
                </h1>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-500 mb-8 h-12 flex items-center">
                    <span class="mr-2">I am a</span> <span id="typed-text" class="text-emerald-500"></span>
                </h2>
                <p class="text-lg text-slate-500 mb-10 max-w-xl leading-relaxed gs-reveal">
                    Bridging the gap between <span class="font-bold text-emerald-600">Data Analytics</span> and <span class="font-bold text-sky-600">Data Science</span> to build smart, clean, and dynamic solutions.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#projects" class="px-8 py-3.5 rounded-full bg-emerald-600 text-white font-bold hover:from-sky-400 hover:to-emerald-500 shadow-lg shadow-emerald-500/30 transition-all transform hover:-translate-y-1">View Projects</a>
                    <button onclick="openCvModal()" class="px-8 py-3.5 rounded-full bg-white border border-slate-300 text-slate-700 font-bold hover:border-emerald-400 hover:text-emerald-600 shadow-sm hover:shadow-md transition-all flex items-center gap-2 cursor-pointer">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span>Lihat CV & Resume</span>
                    </button>
                </div>
            </div>
            
            <!-- Kanan: Image -->
            <div class="w-full md:w-1/2 flex justify-center relative gs-reveal-up" style="transition-delay: 200ms;">
                <!-- Kotak dengan gradasi sebagai border -->
                <div data-tilt data-tilt-max="15" data-tilt-speed="400" data-tilt-perspective="1000" class="relative w-[85%] max-w-[280px] sm:max-w-[320px] md:max-w-[360px] aspect-[4/5] rounded-[2.5rem] bg-emerald-500 p-1.5 shadow-2xl shadow-emerald-300/50 group cursor-pointer transform transition-transform duration-500">
                    <!-- Container Gambar Dalam -->
                    <div class="w-full h-full rounded-[2.3rem] overflow-hidden bg-slate-100 relative">
                        <!-- Gradient Overlay Tipis pas dihover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/40 via-transparent to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                        
                        <img src="{{ asset('chris-keren.jpeg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Chris+Teper&background=6366f1&color=fff&size=512'" alt="Chris Profil" class="w-full h-full object-cover transform transition-transform duration-700 ease-out">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section (Bento Grid) -->
<section id="about" class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Dekorasi -->
    <div class="absolute left-0 top-0 w-[500px] h-[500px] bg-gradient-to-br from-emerald-100/40 to-transparent rounded-full blur-3xl -z-10"></div>
    
    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16 gs-reveal-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">
                About <span class="text-emerald-600">Me.</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 gs-reveal-up">
            <!-- Main Bio (Takes up 2 columns) -->
            <div class="md:col-span-2 bg-white p-8 md:p-12 rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 relative overflow-hidden group">
                <!-- Quote Icon Watermark -->
                <div class="absolute -right-4 -top-8 text-[180px] text-emerald-50/50 font-serif leading-none group-hover:scale-110 group-hover:-rotate-6 transition-transform duration-700 pointer-events-none">"</div>
                
                <h3 class="text-2xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                    <span class="w-8 h-1 bg-emerald-500 rounded-full"></span>
                    Who am I?
                </h3>
                <p class="text-slate-600 leading-relaxed text-lg text-justify">
                    Informatics graduate (Cum Laude, 3.86 GPA) with a strong passion for Data Analytics and Data Science. Experienced in transforming raw data into strategic insights through the MSIB program, independent projects, and a role as a Laboratory Assistant. Proficient in using SQL, Python, Excel, Power BI, and Tableau for data cleaning, machine learning, and data visualization. Possesses excellent analytical skills and works well in teams, ready to contribute by providing data-driven recommendations to support organizational business decisions.
                </p>
            </div>

            <!-- Info Column (Takes up 1 column) -->
            <div class="flex flex-col gap-6">
                <!-- Box 1: Current Status -->
                <div class="flex-1 bg-emerald-600 p-8 rounded-[2rem] shadow-lg shadow-emerald-200 text-white transform hover:-translate-y-2 transition-transform duration-300 flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-40 h-40" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="flex items-center gap-3 mb-2 relative z-10">
                        <span class="relative flex h-4 w-4">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-4 w-4 bg-green-500 border-2 border-emerald-600"></span>
                        </span>
                        <h4 class="text-sm font-bold uppercase tracking-widest text-emerald-200">Current Status</h4>
                    </div>
                    <div class="text-3xl font-black mb-2 relative z-10 leading-tight">Open to<br>Work</div>
                    <p class="text-emerald-100 font-medium relative z-10 mt-1 text-sm leading-relaxed">Seeking full-time roles in Data Science or Data Analyst.</p>
                </div>
                <!-- Box 2: Education -->
                <div class="flex-1 bg-white p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 transform hover:-translate-y-2 transition-transform duration-300 flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute -right-4 -bottom-4 text-sky-100 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-40 h-40" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                    </div>
                    <h4 class="text-2xl font-black text-sky-500 mb-4 relative z-10">Education</h4>
                    <div class="text-slate-800 font-bold relative z-10 text-xl mb-1">Informatics <span class="text-sky-500 text-sm bg-sky-50 px-2 py-0.5 rounded-full ml-1">Cum Laude</span></div>
                    <div class="text-slate-500 font-medium leading-tight relative z-10">Universitas Ahmad Dahlan</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tech Skills Marquee Section (Contained) -->
<section id="skills" class="py-24 bg-white relative">
    <!-- Ornamen Background -->
    <div class="absolute right-0 top-0 w-96 h-96 bg-gradient-to-b from-sky-50 to-transparent rounded-full blur-3xl -z-10 opacity-60"></div>
    
    <div class="max-w-7xl mx-auto px-6 text-center gs-reveal-up z-10 relative">
        <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-12">
            Tech <span class="text-pink-500">Skills.</span>
        </h2>

        @php
            $allSkills = [
                ['name' => 'Python', 'folder' => 'python', 'file' => 'python-original'],
                ['name' => 'Pandas', 'folder' => 'pandas', 'file' => 'pandas-original'],
                ['name' => 'NumPy', 'folder' => 'numpy', 'file' => 'numpy-original'],
                ['name' => 'scikit-learn', 'folder' => 'scikitlearn', 'file' => 'scikitlearn-original'],
                ['name' => 'Jupyter', 'folder' => 'jupyter', 'file' => 'jupyter-original'],
                ['name' => 'SQL', 'folder' => 'sqldeveloper', 'file' => 'sqldeveloper-original'],
                ['name' => 'MySQL', 'folder' => 'mysql', 'file' => 'mysql-original-wordmark'],
                ['name' => 'PostgreSQL', 'folder' => 'postgresql', 'file' => 'postgresql-original'],
                ['name' => 'Excel', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Microsoft_Office_Excel_%282019%E2%80%93present%29.svg'],
                ['name' => 'Tableau', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4b/Tableau_Logo.png'],
                ['name' => 'Power BI', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/c/cf/New_Power_BI_Logo.svg']
            ];

            // Split for two marquee rows
            $half = ceil(count($allSkills) / 2);
            $row1 = array_slice($allSkills, 0, $half);
            $row2 = array_slice($allSkills, $half);
        @endphp

        <!-- Mask Image untuk efek pudar di sisi kiri dan kanan -->
        <div class="w-full overflow-hidden pb-4" style="-webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
            
            <!-- Baris 1 (Jalan ke kiri) -->
            <div class="marquee-wrapper mb-6">
                <div class="marquee-content animate-marquee-left flex gap-4 md:gap-6 w-max">
                    @foreach($row1 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="{{ isset($skill['url']) ? $skill['url'] : 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/' . $skill['folder'] . '/' . $skill['file'] . '.svg' }}" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Duplicate -->
                    @foreach($row1 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="{{ isset($skill['url']) ? $skill['url'] : 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/' . $skill['folder'] . '/' . $skill['file'] . '.svg' }}" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Triplicate biar animasi gak patah di layar lebar -->
                    @foreach($row1 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="{{ isset($skill['url']) ? $skill['url'] : 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/' . $skill['folder'] . '/' . $skill['file'] . '.svg' }}" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Baris 2 (Jalan ke kanan) -->
            <div class="marquee-wrapper">
                <div class="marquee-content animate-marquee-right flex gap-4 md:gap-6 w-max">
                    @foreach($row2 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="{{ isset($skill['url']) ? $skill['url'] : 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/' . $skill['folder'] . '/' . $skill['file'] . '.svg' }}" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Duplicate -->
                    @foreach($row2 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="{{ isset($skill['url']) ? $skill['url'] : 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/' . $skill['folder'] . '/' . $skill['file'] . '.svg' }}" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Triplicate -->
                    @foreach($row2 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="{{ isset($skill['url']) ? $skill['url'] : 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/' . $skill['folder'] . '/' . $skill['file'] . '.svg' }}" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Experience Section -->
<section id="experience" class="py-32 bg-slate-50 relative overflow-hidden">
    <!-- Dekorasi Background -->
    <div class="absolute right-0 top-1/4 w-96 h-96 bg-sky-100/60 rounded-full blur-3xl -z-10"></div>
    <div class="absolute left-0 bottom-1/4 w-96 h-96 bg-emerald-100/60 rounded-full blur-3xl -z-10"></div>
    
    <div class="max-w-6xl mx-auto px-6">
        <div class="w-full text-center mb-24 gs-reveal-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">Experience & <span class="text-transparent bg-clip-text bg-emerald-600">Impact.</span></h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto font-medium">
                A timeline of my professional journey, where I solve real-world problems using data and mentor young tech talents.
            </p>
        </div>
        
        <div class="relative w-full max-w-4xl mx-auto">
            <!-- Center Line (Desktop) / Left Line (Mobile) -->
            <div class="absolute left-[39px] md:left-1/2 top-0 bottom-0 w-1 bg-emerald-500 transform md:-translate-x-1/2 rounded-full z-0"></div>
            
            <!-- Item 1: Data Science Mentee -->
            <div class="relative flex flex-col md:flex-row items-center justify-between mb-16 md:mb-24 gs-reveal-up group">
                <!-- Dot -->
                <div class="absolute left-[39px] md:left-1/2 w-6 h-6 rounded-full bg-emerald-500 border-4 border-slate-50 shadow-lg shadow-emerald-300 transform -translate-x-1/2 group-hover:scale-125 transition-transform duration-300 z-10"></div>
                
                <!-- Content Left (Info) -->
                <div class="w-full md:w-[45%] pl-[80px] md:pl-0 md:pr-12 text-left md:text-right mb-4 md:mb-0 relative z-10">
                    <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 font-bold text-xs rounded-full mb-3 uppercase tracking-widest shadow-sm">Data Science</span>
                    <h3 class="text-2xl font-bold text-slate-900 mb-1">Data Science Mentee</h3>
                    <h4 class="text-slate-500 font-semibold mb-2">Startup Campus (MSIB)</h4>
                </div>
                
                <!-- Content Right (Card) -->
                <div class="w-full md:w-[45%] pl-[80px] md:pl-12 text-left relative z-10">
                    <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 transform group-hover:-translate-y-2 hover:shadow-2xl hover:shadow-emerald-100 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-emerald-50 rounded-bl-[100px] -z-10"></div>
                        <p class="text-slate-600 leading-relaxed font-medium mb-6">
                            Focused on analyzing Green Economy data. Implementing machine learning models to predict future sustainability trends and identifying key economic indicators.
                        </p>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest bg-slate-50 px-3 py-1.5 rounded-md border border-slate-100">Final Score</span>
                            <span class="text-2xl font-black text-emerald-500">94.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2: Lab Assistant -->
            <div class="relative flex flex-col md:flex-row-reverse items-center justify-between gs-reveal-up group">
                <!-- Dot -->
                <div class="absolute left-[39px] md:left-1/2 w-6 h-6 rounded-full bg-sky-500 border-4 border-slate-50 shadow-lg shadow-sky-300 transform -translate-x-1/2 group-hover:scale-125 transition-transform duration-300 z-10"></div>
                
                <!-- Content Left (Info - visually on right) -->
                <div class="w-full md:w-[45%] pl-[80px] md:pl-0 md:pl-12 text-left mb-4 md:mb-0 relative z-10">
                    <span class="inline-block px-4 py-1.5 bg-sky-100 text-sky-700 font-bold text-xs rounded-full mb-3 uppercase tracking-widest shadow-sm">Education & Tech</span>
                    <h3 class="text-2xl font-bold text-slate-900 mb-1">Laboratory Assistant</h3>
                    <h4 class="text-slate-500 font-semibold mb-2">Informatics, UAD</h4>
                </div>
                
                <!-- Content Right (Card - visually on left) -->
                <div class="w-full md:w-[45%] pl-[80px] md:pl-0 md:pr-12 text-left md:text-right relative z-10">
                    <div class="bg-slate-900 p-8 rounded-[2rem] shadow-xl shadow-slate-900/20 border border-slate-800 transform group-hover:-translate-y-2 hover:shadow-2xl hover:shadow-sky-900/30 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-20 h-20 bg-slate-800 rounded-br-[100px] -z-10"></div>
                        <p class="text-slate-300 leading-relaxed font-medium mb-6 text-left">
                            Managed academic database ETL (Extract, Transform, Load) pipelines. Mentored over 80+ students in database and programming practicums, fostering a strong technical foundation.
                        </p>
                        <div class="flex items-center justify-start md:justify-end gap-3 pt-4 border-t border-slate-800">
                            <span class="text-xs font-bold text-sky-400 uppercase tracking-widest bg-slate-800/50 px-3 py-1.5 rounded-md border border-slate-700/50">Leadership & Mentoring</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-32 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16 gs-reveal-up">
            <h2 class="text-4xl font-extrabold text-slate-900">Featured Projects</h2>
            
        </div>

        @php
            $projects = [
                [
                    'title' => 'E-Commerce Churn Risk Analytics',
                    'category' => 'Business Intelligence',
                    'image' => asset('analisis.png'),
                    'color' => 'blue',
                    'delay' => '0ms',
                    'tags' => [
                        ['name' => 'MySQL', 'color' => 'sky'],
                        ['name' => 'Tableau', 'color' => 'blue'],
                        ['name' => 'Data Analytics', 'color' => 'indigo'],
                    ],
                    'desc_short' => 'Analisis komprehensif terhadap data pelanggan e-commerce untuk menemukan akar penyebab churn dan merumuskan strategi retensi.',
                    'desc_full' => 'Proyek analisis end-to-end (ETL) yang melibatkan Data Ingestion dan Cleansing menggunakan MySQL terhadap 50.000+ data pelanggan. Hasil pembersihan divisualisasikan ke dalam satu narasi interaktif menggunakan Tableau (terdiri dari 4 dashboard analitik terpadu) untuk mengidentifikasi pola perilaku pelanggan dan merumuskan strategi retensi bisnis.',
                    'tech_stack' => 'MySQL (Data Cleansing & Transformation), Tableau (Data Visualization).',
                    'system_db' => 'Data diekstrak dan diproses di MySQL lokal, kemudian dihubungkan ke Tableau untuk visualisasi dinamis.',
                    'links' => []
                ],
                
                
                
                [
                    'title' => 'Sales & Order Data Analysis',
                    'category' => 'Data Analysis',
                    'image' => asset('sales.png'),
                    'color' => 'emerald',
                    'delay' => '0ms',
                    'tags' => [
                        ['name' => 'Excel', 'color' => 'green'],
                        ['name' => 'Data Analysis', 'color' => 'emerald'],
                    ],
                    'desc_short' => 'Comprehensive analysis of sales order data to identify key trends, customer purchasing behaviors, and revenue growth opportunities.',
                    'desc_full' => 'Proyek ini berfokus pada analisis data penjualan komprehensif menggunakan Microsoft Excel. Melalui pemrosesan ribuan baris data transaksi, proyek ini mengidentifikasi tren utama, perilaku pembelian pelanggan, dan peluang pertumbuhan pendapatan.',
                    'tech_stack' => 'Microsoft Excel (Pivot Tables, Power Query, Advanced Formulas).',
                    'system_db' => 'Data mentah berupa file Excel/CSV diolah secara lokal tanpa menggunakan database eksternal.',
                    'links' => [
                        ['type' => 'download', 'url' => asset('downloads/Sales-Analysis-Order-Data.xlsx'), 'text' => 'Download Data']
                    ]
                ],
                
                [
                    'title' => 'Global Economic & Human Development',
                    'category' => 'Data Science',
                    'image' => asset('dasboard.png'),
                    'color' => 'sky',
                    'delay' => '0ms',
                    'tags' => [
                        ['name' => 'Python', 'color' => 'blue'],
                        ['name' => 'Excel / Tableau', 'color' => 'emerald'],
                    ],
                    'desc_short' => 'Comprehensive Excel dashboard analyzing global wealth and health disparities, highlighting the correlation between internet penetration, energy consumption, and life expectancy.',
                    'desc_full' => 'Dashboard analitik komprehensif yang memvisualisasikan disparitas kekayaan dan kesehatan global. Analisis ini menyoroti korelasi antara penetrasi internet, konsumsi energi, dan angka harapan hidup di berbagai negara menggunakan data makroekonomi.',
                    'tech_stack' => 'Python (Pandas untuk pembersihan data), Excel, Tableau untuk visualisasi akhir.',
                    'system_db' => 'Dataset makroekonomi dari sumber publik yang diproses menjadi format terstruktur. Tidak menggunakan database realtime.',
                    'links' => [
                        ['type' => 'github', 'url' => 'https://github.com/christeperferdiyanto571/World-Economic-Dashboard', 'text' => 'View on GitHub']
                    ]
                ],
                [
                    'title' => 'BMLP Analytics Dashboard',
                    'category' => 'Data Science',
                    'image' => asset('bmlp.png'),
                    'color' => 'red',
                    'delay' => '100ms',
                    'tags' => [
                        ['name' => 'Streamlit', 'color' => 'red'],
                        ['name' => 'Python', 'color' => 'blue'],
                    ],
                    'desc_short' => 'An interactive dashboard built with Streamlit to comprehensively visualize and analyze the BMLP dataset.',
                    'desc_full' => 'Aplikasi dashboard interaktif yang dibangun dengan Streamlit untuk memvisualisasikan dan menganalisis dataset BMLP secara komprehensif. Memungkinkan pengguna mengeksplorasi data melalui berbagai filter dinamis dan grafik interaktif.',
                    'tech_stack' => 'Python, Streamlit, Pandas, Plotly/Matplotlib.',
                    'system_db' => 'Berjalan secara stateless di cloud menggunakan Streamlit Community Cloud. Menggunakan dataset CSV statis sebagai sumber data.',
                    'links' => [
                        ['type' => 'live', 'url' => 'https://bmlp-dashboard.streamlit.app/', 'text' => 'Open App']
                    ]
                ],
                [
                    'title' => 'Trending Topic Scraper',
                    'category' => 'Automation',
                    'image' => asset('scraper.png'),
                    'color' => 'orange',
                    'delay' => '200ms',
                    'tags' => [
                        ['name' => 'Web Scraping', 'color' => 'orange'],
                        ['name' => 'Automation', 'color' => 'slate'],
                    ],
                    'desc_short' => 'A web scraping automation application using Python to extract and monitor trending topics in real-time.',
                    'desc_full' => 'Aplikasi otomatisasi web scraping yang dikembangkan dengan Python untuk mengekstrak dan memantau topik yang sedang tren secara real-time dari berbagai platform media sosial dan berita.',
                    'tech_stack' => 'Python, BeautifulSoup, Selenium, Pandas.',
                    'system_db' => 'Data diekstrak secara dinamis dari DOM halaman web dan disimpan dalam format terstruktur (CSV/JSON) untuk keperluan analisis lanjutan.',
                    'links' => [
                        ['type' => 'live', 'url' => 'https://app-trending-scraper.streamlit.app/', 'text' => 'Open App']
                    ]
                ],
                [
                    'title' => 'BPS Statistics Dashboard',
                    'category' => 'Data Analysis',
                    'image' => asset('sensus.png'),
                    'color' => 'cyan',
                    'delay' => '300ms',
                    'tags' => [
                        ['name' => 'React.js', 'color' => 'cyan'],
                        ['name' => 'Netlify', 'color' => 'teal'],
                    ],
                    'desc_short' => 'A modern web-based dashboard visualizing live statistical data and metrics from Statistics Indonesia (BPS).',
                    'desc_full' => 'Dashboard berbasis web modern yang memvisualisasikan data statistik dan metrik kependudukan/ekonomi dari Badan Pusat Statistik (BPS) Indonesia dengan antarmuka yang responsif dan user-friendly.',
                    'tech_stack' => 'React.js, Tailwind CSS, Recharts/Chart.js.',
                    'system_db' => 'Aplikasi Single Page Application (SPA) yang dihosting di Netlify. Mengambil data dari public API BPS atau mock data JSON.',
                    'links' => [
                        ['type' => 'live', 'url' => 'https://bps-dashboard.netlify.app/', 'text' => 'Open App']
                    ]
                ],
                [
                    'title' => 'SPK Bantuan Sosial Desa',
                    'category' => 'Data Analysis',
                    'image' => asset('SPK.png'),
                    'color' => 'emerald',
                    'delay' => '400ms',
                    'tags' => [
                        ['name' => 'PHP Native', 'color' => 'emerald'],
                        ['name' => 'MySQL', 'color' => 'sky'],
                    ],
                    'desc_short' => 'A Decision Support System (DSS) web app developed for Desa Lemahireng to determine social assistance eligibility based on multi-criteria algorithms.',
                    'desc_full' => 'Sistem Pendukung Keputusan (SPK) berbasis web yang dikembangkan khusus untuk Pemerintah Desa Lemahireng. Sistem ini membantu menentukan kelayakan warga penerima bantuan sosial menggunakan algoritma multi-kriteria secara objektif dan transparan.',
                    'tech_stack' => 'PHP Native, HTML/CSS/JS, Bootstrap.',
                    'system_db' => 'Sistem monolitik klasik dengan koneksi langsung ke database MySQL (CRUD). Menyimpan data kependudukan dan kriteria penilaian.',
                    'links' => [
                        ['type' => 'live', 'url' => 'http://spk-bansos.freedev.app', 'text' => 'Live App']
                    ]
                ],
                
                [
                    'title' => 'MSME Data Clustering Tool',
                    'category' => 'Data Science',
                    'image' => asset('MSME.png'),
                    'color' => 'fuchsia',
                    'delay' => '600ms',
                    'tags' => [
                        ['name' => 'Python (Pyodide)', 'color' => 'purple'],
                        ['name' => 'Data Science', 'color' => 'pink'],
                        ['name' => 'JavaScript', 'color' => 'yellow'],
                    ],
                    'desc_short' => 'An advanced data science web application running Python natively in the browser via WebAssembly (Pyodide) to process and cluster Excel datasets.',
                    'desc_full' => 'Aplikasi web data science tingkat lanjut yang menjalankan kode Python secara native langsung di dalam browser menggunakan WebAssembly (Pyodide). Aplikasi ini dirancang untuk memproses dan mengelompokkan (clustering) dataset Excel UMKM menggunakan algoritma K-Means tanpa memerlukan server backend.',
                    'tech_stack' => 'Python (Pyodide, Pandas, Scikit-learn), HTML/CSS, JavaScript.',
                    'system_db' => 'Pemrosesan Client-Side sepenuhnya (WebAssembly). Data Excel yang diunggah pengguna diproses di dalam memori browser, menjamin privasi karena data tidak pernah dikirim ke server.',
                    'links' => [
                        ['type' => 'live', 'url' => 'https://christeperferdiyanto571.github.io/msme-clustering/', 'text' => 'Live App'],
                        ['type' => 'live', 'url' => 'https://colab.research.google.com/drive/1dUFo5OQ-LFZygsdlhw7R8UrumswGY2RZ?usp=sharing', 'text' => 'Colab'],
                        ['type' => 'live', 'url' => 'https://canva.link/3tsqieq0xwwy4sp', 'text' => 'Presentation'],
                        ['type' => 'github', 'url' => 'https://github.com/christeperferdiyanto571/msme-clustering', 'text' => 'Source Code']
                    ]
                ],
                [
                    'title' => 'Nature AI Classification',
                    'category' => 'Data Science',
                    'image' => asset('nature.png'),
                    'color' => 'emerald',
                    'delay' => '700ms',
                    'tags' => [
                        ['name' => 'TensorFlow', 'color' => 'orange'],
                        ['name' => 'Python', 'color' => 'blue'],
                        ['name' => 'Laravel', 'color' => 'rose'],
                    ],
                    'desc_short' => 'An Artificial Intelligence web app using TensorFlow to analyze and classify nature photography with real-time confidence scoring.',
                    'desc_full' => 'Aplikasi web Kecerdasan Buatan (AI) yang menggunakan model Machine Learning TensorFlow untuk menganalisis dan mengklasifikasikan fotografi alam (seperti Gletser, Pegunungan, Lautan). Memberikan hasil prediksi klasifikasi secara instan dengan skor akurasi (confidence scoring) real-time.',
                    'tech_stack' => 'Python (TensorFlow, Keras) untuk pemodelan, Flask/FastAPI untuk API, Laravel & Tailwind CSS untuk Frontend.',
                    'system_db' => 'Sistem terdistribusi: Frontend berinteraksi dengan model Deep Learning yang dideploy sebagai REST API terpisah. Gambar diproses secara on-the-fly untuk inferensi.',
                    'links' => [
                        ['type' => 'live', 'url' => 'https://christeperferdiyanto571.github.io/nature-ai/', 'text' => 'Live App'],
                        ['type' => 'github', 'url' => 'https://github.com/christeperferdiyanto571/nature-ai', 'text' => 'Source Code']
                    ]
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $index => $project)
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-xl shadow-slate-200/50 group transform hover:-translate-y-4 hover:shadow-{{ $project['color'] }}-200/50 transition-all duration-300 gs-reveal-up cursor-pointer" 
                 style="transition-delay: {{ $project['delay'] }};"
                 onclick="openProjectModal({{ $index }})">
                
                <div class="h-56 overflow-hidden relative bg-slate-900 p-4 flex items-center justify-center">
                    <img src="{!! $project['image'] !!}" alt="{{ $project['title'] }}" class="w-full h-full object-contain rounded-lg transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-{{ $project['color'] }}-900/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col sm:flex-row items-center justify-center gap-3 backdrop-blur-[2px]">
                        
                        <button onclick="openProjectModal({{ $index }}); event.stopPropagation();" class="bg-white text-{{ $project['color'] }}-600 font-bold px-4 py-2 rounded-full transform translate-y-8 group-hover:translate-y-0 transition-all duration-300 shadow-xl shadow-black/20 hover:bg-{{ $project['color'] }}-50 hover:scale-105 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <span>Detail</span>
                        </button>
                        
                        @foreach($project['links'] as $link)
                            @if($link['type'] == 'github')
                                <a href="{{ $link['url'] }}" target="_blank" onclick="event.stopPropagation();" class="bg-slate-900 text-white font-bold p-2 rounded-full transform translate-y-8 group-hover:translate-y-0 transition-all duration-300 shadow-xl shadow-black/20 hover:bg-slate-800 hover:scale-110 flex items-center justify-center" title="{{ $link['text'] }}">
                                    <i class="devicon-github-original text-lg"></i>
                                </a>
                            @elseif($link['type'] == 'download')
                                <a href="{{ $link['url'] }}" download onclick="event.stopPropagation();" class="bg-emerald-600 text-white font-bold px-4 py-2 rounded-full transform translate-y-8 group-hover:translate-y-0 transition-all duration-300 shadow-xl shadow-black/20 hover:bg-emerald-700 hover:scale-105 flex items-center gap-2" title="{{ $link['text'] }}">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    <span>Unduh</span>
                                </a>
                            @else
                                <a href="{{ $link['url'] }}" target="_blank" onclick="event.stopPropagation();" class="bg-sky-600 text-white font-bold px-4 py-2 rounded-full transform translate-y-8 group-hover:translate-y-0 transition-all duration-300 shadow-xl shadow-black/20 hover:bg-sky-700 hover:scale-105 flex items-center gap-2" title="{{ $link['text'] }}">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    <span>Live App</span>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="p-8 pointer-events-none">
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project['tags'] as $tag)
                        <span class="px-3 py-1 text-xs font-bold bg-{{ $tag['color'] }}-50 text-{{ $tag['color'] }}-600 rounded-full border border-{{ $tag['color'] }}-100">{{ $tag['name'] }}</span>
                        @endforeach
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-{{ $project['color'] }}-600 transition-colors">{{ $project['title'] }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        {{ $project['desc_short'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div></div>
    </div>
</section>

<!-- Project Modal -->
<div id="projectModal" class="fixed inset-0 hidden" style="z-index: 999999 !important;">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity opacity-0" id="modalBackdrop" onclick="closeProjectModal()"></div>
    
    <!-- Modal Content -->
    <div class="absolute inset-4 md:inset-auto md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 bg-white rounded-3xl shadow-2xl flex flex-col md:flex-row overflow-hidden transform scale-95 opacity-0 transition-all duration-300 md:max-w-5xl md:w-full md:max-h-[90vh] z-10" id="modalContent">
        
        <!-- Close Button -->
        <button onclick="closeProjectModal()" class="absolute top-4 right-4 z-20 w-10 h-10 bg-black/10 hover:bg-black/20 md:bg-slate-100 md:hover:bg-slate-200 rounded-full flex items-center justify-center transition-colors">
            <svg class="w-6 h-6 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <!-- Left Image Section -->
        <div class="w-full md:w-2/5 h-64 md:h-auto relative bg-slate-100" id="modalImageContainer">
            <img src="" id="modalImage" class="w-full h-full object-cover" alt="Project Image">
        </div>

        <!-- Right Content Section -->
        <div class="w-full md:w-3/5 p-6 md:p-10 overflow-y-auto bg-white flex flex-col">
            <div class="flex flex-wrap gap-2 mb-4" id="modalTags">
                <!-- Tags will be injected here -->
            </div>
            
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4" id="modalTitle">Project Title</h2>
            
            <p class="text-slate-600 leading-relaxed mb-6" id="modalDesc">
                Project description goes here...
            </p>

            <div class="space-y-6 mb-8">
                <!-- Tech Stack -->
                <div>
                    <h4 class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-2">Tech Stack / Bahasa</h4>
                    <p class="text-slate-700 font-medium" id="modalTechStack">...</p>
                </div>
                
                <!-- System & Database -->
                <div>
                    <h4 class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-2">Sistem & Database</h4>
                    <p class="text-slate-700 font-medium" id="modalSystem">...</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-auto flex flex-wrap gap-4 pt-6 border-t border-slate-100" id="modalLinks">
                <!-- Links will be injected here -->
            </div>
        </div>
    </div>
</div>

<!-- Digital CV Modal -->
<div id="cvModal" class="fixed inset-0 hidden overflow-y-auto" style="z-index: 999999 !important;">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-slate-900/80 backdrop-blur-md transition-opacity opacity-0" id="cvBackdrop" onclick="closeCvModal()"></div>
    
    <!-- Scrollable Flex Wrapper -->
    <div class="relative min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-10" onclick="closeCvModal()">
        <!-- CV Modal Content -->
        <div onclick="event.stopPropagation()" class="bg-white rounded-3xl shadow-2xl transform scale-95 opacity-0 transition-all duration-300 max-w-5xl w-full z-10 border border-slate-200 p-6 sm:p-10 lg:p-12 text-slate-800 text-left my-auto relative" id="cvContent">
        
        <!-- Sticky Action Bar at Top -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pb-6 border-b border-slate-200 mb-8 sticky -top-6 bg-white/95 backdrop-blur-sm z-20 gap-4 py-2">
            <div>
                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-full uppercase tracking-wider border border-emerald-200">Official Resume</span>
                <h2 class="text-2xl md:text-3xl font-black text-slate-900 mt-1">CHRIS TEPER FERDIYANTO</h2>
            </div>
            <div class="flex items-center gap-3 self-end sm:self-auto">
                <a href="https://drive.google.com/drive/folders/1jDHvvCxNlffiIC0-Napk9JMO77F5cjl6?usp=sharing" target="_blank" class="px-4 py-2 bg-emerald-600 text-white font-bold text-sm rounded-xl hover:bg-emerald-700 transition-all flex items-center gap-2 shadow-sm" title="Unduh arsip dari Google Drive jika dibutuhkan">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span>Unduh Arsip (GDrive)</span>
                </a>
                <button onclick="closeCvModal()" class="w-10 h-10 bg-slate-100 hover:bg-rose-100 hover:text-rose-600 text-slate-700 rounded-full flex items-center justify-center transition-colors font-bold text-xl">
                    &times;
                </button>
            </div>
        </div>

        <!-- Contact Badges -->
        <div class="flex flex-wrap gap-2.5 mb-8 text-xs md:text-sm text-slate-600">
            <span class="flex items-center gap-1.5 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 font-medium">Cilacap, Indonesia</span>
            <span class="flex items-center gap-1.5 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 font-medium">(+62) 85878017489</span>
            <span class="flex items-center gap-1.5 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 font-medium">christeperferdiyanto8362@gmail.com</span>
            <a href="https://linkedin.com" target="_blank" class="flex items-center gap-1.5 bg-emerald-50 text-emerald-700 hover:bg-emerald-100 px-3 py-1.5 rounded-lg border border-emerald-200 font-bold transition-colors">LinkedIn</a>
            <a href="#projects" onclick="closeCvModal()" class="flex items-center gap-1.5 bg-sky-50 text-sky-700 hover:bg-sky-100 px-3 py-1.5 rounded-lg border border-sky-200 font-bold transition-colors">Portofolio</a>
            <a href="sertifikat-toefl-chris.pdf" target="_blank" onclick="event.stopPropagation();" class="flex items-center gap-1.5 bg-amber-50 text-amber-900 hover:bg-amber-100 px-3.5 py-1.5 rounded-lg font-extrabold border border-amber-300 transition-colors shadow-2xs" title="Buka Dokumen PDF Sertifikat TOEFL">TOEFL Certified (Score: 503) <span class="text-emerald-600 font-black underline ml-0.5">[PDF]</span></a>
            <span class="flex items-center gap-1.5 bg-emerald-50 text-emerald-800 px-3.5 py-1.5 rounded-lg font-extrabold border border-emerald-300">IPK: 3.86 / 4.00 (Cum Laude)</span>
        </div>

        <!-- SUMMARY -->
        <div class="bg-slate-50 p-6 md:p-8 rounded-2xl border border-slate-200 mb-10">
            <h3 class="text-sm font-extrabold uppercase text-slate-500 tracking-wider mb-3">SUMMARY</h3>
            <p class="text-slate-700 leading-relaxed text-sm md:text-base text-justify font-normal">
                Informatics graduate from Universitas Ahmad Dahlan with a strong focus on Data Analytics and Data Science. Experienced as a Laboratory Assistant in preparing practical materials and mentoring students. Skilled in data processing, cleaning, validation, and visualization using Microsoft Excel, SQL, Python (Pandas), Power BI, and Tableau. Has foundational knowledge in developing web applications to build interactive data dashboards. A fast learner with strong analytical, problem-solving, and teamwork skills, eager to contribute as a Data Analyst or Data Scientist.
            </p>
        </div>

        <!-- EDUCATION -->
        <div class="mb-10">
            <h3 class="text-base md:text-lg font-extrabold text-slate-900 border-l-4 border-amber-500 pl-3.5 uppercase tracking-wider mb-4">EDUCATION</h3>
            <div class="bg-gradient-to-r from-amber-50/50 via-slate-50 to-white p-6 rounded-2xl border border-amber-200/60 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-slate-900">UNIVERSITAS AHMAD DAHLAN - Yogyakarta, Indonesia</h4>
                    <p class="text-sm md:text-base font-semibold text-slate-700 mt-1.5">Bachelor of Informatics <span class="text-amber-800 font-extrabold">(3.86/4.00, Cum Laude)</span>. <a href="transkrip-akademik-chris.pdf" target="_blank" onclick="event.stopPropagation();" class="text-emerald-600 hover:text-emerald-800 underline font-bold cursor-pointer transition-colors" title="Buka Transkrip Asli (PDF)">[Transcript]</a></p>
                </div>
                <span class="text-sm font-bold text-slate-500 px-3 py-1 bg-white rounded-xl border border-slate-200 shadow-sm w-max">(Sep 2022 – 2026)</span>
            </div>
        </div>

        <!-- CERTIFICATIONS & LANGUAGE -->
        <div class="mb-10">
            <h3 class="text-base md:text-lg font-extrabold text-slate-900 border-l-4 border-emerald-500 pl-3.5 uppercase tracking-wider mb-4">CERTIFICATIONS & LANGUAGE</h3>
            <div class="bg-gradient-to-r from-emerald-50/40 via-slate-50 to-white p-6 rounded-2xl border border-emerald-200/60 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-slate-900">AHMAD DAHLAN LANGUAGE CENTER (ADLC) - Universitas Ahmad Dahlan</h4>
                    <p class="text-sm md:text-base font-semibold text-slate-700 mt-1.5">Ahmad Dahlan English Proficiency Test (ADEPT / TOEFL Equivalent) <span class="text-emerald-800 font-extrabold">— Score: 503</span>. <a href="sertifikat-toefl-chris.pdf" target="_blank" onclick="event.stopPropagation();" class="text-emerald-600 hover:text-emerald-800 underline font-bold cursor-pointer transition-colors" title="Buka Sertifikat TOEFL Asli (PDF)">[Certificate]</a></p>
                    <div class="flex flex-wrap items-center gap-2.5 mt-2 text-xs md:text-sm font-bold text-slate-600">
                        <span>🎧 Listening: <span class="text-slate-900 font-black">70</span></span>
                        <span class="text-slate-300">•</span>
                        <span>âœï¸ Structure & Written: <span class="text-slate-900 font-black">72</span></span>
                        <span class="text-slate-300">•</span>
                        <span>📖 Reading: <span class="text-slate-900 font-black">61</span></span>
                    </div>
                </div>
                <span class="text-sm font-bold text-slate-500 px-3 py-1 bg-white rounded-xl border border-slate-200 shadow-sm w-max">(May 2025 – 2026)</span>
            </div>
        </div>

        <!-- PROFESSIONAL EXPERIENCE -->
        <div class="mb-10">
            <h3 class="text-base md:text-lg font-extrabold text-slate-900 border-l-4 border-emerald-600 pl-3.5 uppercase tracking-wider mb-6">PROFESSIONAL EXPERIENCE</h3>
            
            <!-- Exp 1 -->
            <div class="border-l-2 border-emerald-500 pl-5 md:pl-6 pb-6 mb-6 border-b border-slate-100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-1 mb-2">
                    <h4 class="text-base md:text-lg font-bold text-slate-900">Laboratory Assistant - Informatics Laboratory, UAD</h4>
                    <span class="text-xs md:text-sm font-bold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200 w-max">(Sep 2023 – Jun 2025)</span>
                </div>
                <p class="text-sm font-semibold text-emerald-600 mb-3">Yogyakarta, Indonesia</p>
                <ul class="list-disc pl-5 space-y-2 text-sm md:text-base text-slate-700 leading-relaxed">
                    <li>Supported practicum operations across multiple subjects (Computer Systems, OOP, Statistics, OS, Software Analysis, Computer Graphics) for 2+ classes per course (40 students/class) by preparing materials, software, and session readiness, ensuring smooth and on-time execution.</li>
                    <li>Delivered explanations of course materials and guided hands-on lab activities, assisting 80+ students per course in problem-solving and improving understanding as well as task completion rates.</li>
                    <li>Designed assignments and practice questions, evaluated student work, and managed grading reports using structured data validation and simple ETL workflows, improving accuracy, consistency, and reporting efficiency.</li>
                </ul>
            </div>

            <!-- Exp 2 -->
            <div class="border-l-2 border-emerald-500 pl-5 md:pl-6 pb-2">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-1 mb-1">
                    <h4 class="text-base md:text-lg font-bold text-slate-900">MSIB – Startup Campus</h4>
                    <span class="text-xs md:text-sm font-bold text-sky-700 bg-sky-50 px-3 py-1 rounded-full border border-sky-200 w-max">(Sep 2024 – Des 2024)</span>
                </div>
                <p class="text-sm font-bold text-sky-600 mb-1">Data Science</p>
                <p class="text-xs text-slate-500 font-medium mb-3">Yogyakarta, Indonesia</p>
                <ul class="list-disc pl-5 space-y-2 text-sm md:text-base text-slate-700 leading-relaxed">
                    <li>Completed end-to-end data analysis projects including data collection, preprocessing, exploratory data analysis (EDA), and visualization to generate actionable insights for decision-making.</li>
                    <li>Performed data cleaning, feature engineering, and validation (handling missing values, duplicates, and outliers) using Python (pandas) and SQL, improving dataset quality and analysis reliability.</li>
                    <li>Developed interactive KPI dashboards using Tableau to monitor performance metrics and effectively communicate insights to stakeholders.</li>
                </ul>
            </div>
        </div>

        <!-- ORGANIZATIONAL EXPERIENCE -->
        <div class="mb-10">
            <h3 class="text-base md:text-lg font-extrabold text-slate-900 border-l-4 border-emerald-600 pl-3.5 uppercase tracking-wider mb-6">ORGANIZATIONAL EXPERIENCE</h3>
            
            <!-- Org 1 -->
            <div class="border-l-2 border-emerald-500 pl-5 md:pl-6 pb-6 mb-6 border-b border-slate-100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-1 mb-1">
                    <h4 class="text-base font-bold text-slate-900">Panitia P2K (University Orientation Committee) Pusat UAD</h4>
                    <span class="text-xs md:text-sm font-bold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200 w-max">(Sep 2024)</span>
                </div>
                <p class="text-sm font-bold text-emerald-600 mb-1">Companion & Content Creator</p>
                <p class="text-xs text-slate-500 mb-3">Yogyakarta, Indonesia</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700 leading-relaxed">
                    <li>Created and distributed informational content for new students, ensuring clear and consistent communication throughout the orientation program.</li>
                    <li>Acted as a central facilitator by managing and distributing official information from the central committee to faculty-level mentors, ensuring alignment and accuracy of information delivery.</li>
                    <li>Coordinated with cross-functional teams and faculty mentors to support smooth communication flow and effective execution of orientation activities.</li>
                </ul>
            </div>

            <!-- Org 2 -->
            <div class="border-l-2 border-emerald-500 pl-5 md:pl-6 pb-6 mb-6 border-b border-slate-100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-1 mb-1">
                    <h4 class="text-base font-bold text-slate-900">Panitia P2K (University Orientation Committee) Fakultas - UAD</h4>
                    <span class="text-xs md:text-sm font-bold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200 w-max">(Sep 2023)</span>
                </div>
                <p class="text-sm font-bold text-emerald-600 mb-1">Companion</p>
                <p class="text-xs text-slate-500 mb-3">Yogyakarta, Indonesia</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700 leading-relaxed">
                    <li>Mentored and assisted 10 assigned new students throughout the orientation program, ensuring their participation, understanding of activities, and smooth adaptation to the academic environment.</li>
                    <li>Managed attendance tracking for approximately 22 students, ensuring accurate documentation and timely reporting during the event.</li>
                    <li>Supported overall event operations by assisting coordination and on-site activities, contributing to the smooth execution of the orientation program.</li>
                </ul>
            </div>

            <!-- Org 3 -->
            <div class="border-l-2 border-emerald-500 pl-5 md:pl-6 pb-6 mb-6 border-b border-slate-100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-1 mb-1">
                    <h4 class="text-base font-bold text-slate-900">Panitia Upgrading Ormawa - UAD</h4>
                    <span class="text-xs md:text-sm font-bold text-amber-700 bg-amber-50 px-3 py-1 rounded-full border border-amber-200 w-max">(Apr 2024)</span>
                </div>
                <p class="text-sm font-bold text-amber-600 mb-1">Coordinator of Consumption Division</p>
                <p class="text-xs text-slate-500 mb-3">Yogyakarta, Indonesia</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700 leading-relaxed">
                    <li>Managed food logistics for 362 participants, ensuring timely preparation and distribution aligned with the event schedule.</li>
                    <li>Coordinated with vendors and internal teams to handle procurement, delivery, and contingency needs, minimizing delays during the event.</li>
                    <li>Led and organized the consumption team by assigning tasks and monitoring execution, ensuring smooth and efficient operations throughout the program.</li>
                </ul>
            </div>

            <!-- Org 4 -->
            <div class="border-l-2 border-emerald-500 pl-5 md:pl-6 pb-2">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-1 mb-1">
                    <h4 class="text-base font-bold text-slate-900">Panitia Paradox - UAD</h4>
                    <span class="text-xs md:text-sm font-bold text-teal-700 bg-teal-50 px-3 py-1 rounded-full border border-teal-200 w-max">(Okt 2023)</span>
                </div>
                <p class="text-sm font-bold text-teal-600 mb-1">Companion</p>
                <p class="text-xs text-slate-500 mb-3">Yogyakarta, Indonesia</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-slate-700 leading-relaxed">
                    <li>Assisted participants during event sessions, ensuring smooth execution of activities and active engagement throughout the program.</li>
                    <li>Prepared and checked materials and session requirements before activities, minimizing potential operational issues.</li>
                    <li>Supported event coordination by communicating participant needs and assisting the committee in handling on-site activities effectively.</li>
                </ul>
            </div>
        </div>

        <!-- PROJECT -->
        <div class="mb-10">
            <h3 class="text-base md:text-lg font-extrabold text-slate-900 border-l-4 border-purple-600 pl-3.5 uppercase tracking-wider mb-6">PROJECT</h3>
            
            <div class="grid grid-cols-1 gap-6">
                <!-- Proj 1 -->
                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                        <div>
                            <h4 class="text-base font-bold text-slate-900">Excel Data Analysis Project – Karirnex Bootcamp</h4>
                            <p class="text-xs font-semibold text-purple-600">Yogyakarta, Indonesia</p>
                        </div>
                        <span class="text-xs font-bold bg-white px-3 py-1 rounded-lg border border-slate-200 w-max">(Okt 2025)</span>
                    </div>
                    <ul class="list-disc pl-5 space-y-1.5 text-sm text-slate-700 mt-3">
                        <li>Analyzed 2,000+ transaction data using Excel (Pivot Table, advanced formulas, and data processing)</li>
                        <li>Built interactive dashboard using charts, slicers, and pivot charts</li>
                        <li>Performed data cleaning, validation, and basic automation (VBA)</li>
                    </ul>
                </div>

                <!-- Proj 2 -->
                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                        <div>
                            <h4 class="text-base font-bold text-slate-900">Social Assistance Decision Support System (Web-Based)</h4>
                            <p class="text-xs font-semibold text-sky-600">Yogyakarta, Indonesia</p>
                        </div>
                        <span class="text-xs font-bold bg-white px-3 py-1 rounded-lg border border-slate-200 w-max">(Jun 2026)</span>
                    </div>
                    <ul class="list-disc pl-5 space-y-1.5 text-sm text-slate-700 mt-3">
                        <li>Developed a web-based decision support system using PHP Native, MySQL, Bootstrap, HTML, CSS, and JavaScript.</li>
                        <li>Built modules for citizen data management, assessment criteria, and eligibility evaluation.</li>
                        <li>Designed CRUD features and integrated MySQL database for efficient data management.</li>
                    </ul>
                </div>

                <!-- Proj 3 -->
                <div class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                        <div>
                            <h4 class="text-base font-bold text-slate-900">MSME Clustering Using K-Means and Firefly Algorithm (Thesis)</h4>
                            <p class="text-xs font-semibold text-emerald-600">Yogyakarta, Indonesia</p>
                        </div>
                        <span class="text-xs font-bold bg-white px-3 py-1 rounded-lg border border-slate-200 w-max">(2025 - 2026)</span>
                    </div>
                    <ul class="list-disc pl-5 space-y-1.5 text-sm text-slate-700 mt-3">
                        <li>Developed a clustering model for MSMEs using K-Means with Firefly Algorithm for centroid initialization.</li>
                        <li>Performed data preprocessing, clustering, and evaluation using Python.</li>
                        <li>Analyzed clustering results to support MSME categorization and decision-making.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SKILLS -->
        <div>
            <h3 class="text-base md:text-lg font-extrabold text-slate-900 border-l-4 border-emerald-600 pl-3.5 uppercase tracking-wider mb-6">SKILLS & COMPETENCIES</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-7">
                
                <!-- Card 1: Technical Skill -->
                <div class="bg-slate-900 text-white rounded-3xl p-6 md:p-8 shadow-2xl border border-emerald-500/30 relative overflow-hidden group hover:border-emerald-500/60 transition-all duration-500 flex flex-col justify-between">
                    <div class="absolute -top-16 -right-16 w-52 h-52 bg-emerald-600/20 rounded-full blur-3xl pointer-events-none group-hover:bg-emerald-600/30 transition-all duration-500"></div>
                    
                    <div>
                        <!-- Header -->
                        <div class="flex items-center gap-4 mb-6 pb-4 border-b border-slate-800/80">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-600 flex items-center justify-center text-white shadow-lg shadow-emerald-500/30 text-2xl font-black shrink-0">
                                📄Š
                            </div>
                            <div>
                                <span class="text-[11px] font-black text-emerald-400 uppercase tracking-widest block mb-0.5">Data & Analytics</span>
                                <h4 class="text-lg font-extrabold text-white tracking-tight">Technical Skill</h4>
                            </div>
                        </div>

                        <!-- Content Blocks -->
                        <div class="space-y-3.5 text-sm">
                            <!-- Excel -->
                            <div class="bg-slate-800/70 rounded-2xl p-4 border border-slate-700/60 hover:bg-slate-800 transition-all">
                                <div class="font-extrabold text-emerald-300 mb-1 flex items-center gap-2 text-xs md:text-sm">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 shadow-sm shadow-emerald-400"></span> Excel
                                </div>
                                <p class="text-xs text-slate-300 leading-relaxed pl-4 font-normal">Pivot Table, XLOOKUP/VLOOKUP, IF, SUMIF/COUNTIF, basic dashboard</p>
                            </div>

                            <!-- SQL -->
                            <div class="bg-slate-800/70 rounded-2xl p-4 border border-slate-700/60 hover:bg-slate-800 transition-all">
                                <div class="font-extrabold text-purple-300 mb-1.5 flex items-center gap-2 text-xs md:text-sm">
                                    <span class="w-2 h-2 rounded-full bg-purple-400 shadow-sm shadow-purple-400"></span> SQL
                                </div>
                                <ul class="list-disc pl-8 text-xs text-slate-300 space-y-1 font-normal">
                                    <li>MySQL (query, join, aggregation), basic SQL Server</li>
                                    <li>Database Design (Basic), ERD, CRUD Operations</li>
                                </ul>
                            </div>

                            <!-- Python -->
                            <div class="bg-slate-800/70 rounded-2xl p-4 border border-slate-700/60 hover:bg-slate-800 transition-all">
                                <div class="font-extrabold text-pink-300 mb-1 flex items-center gap-2 text-xs md:text-sm">
                                    <span class="w-2 h-2 rounded-full bg-pink-400 shadow-sm shadow-pink-400"></span> Python
                                </div>
                                <p class="text-xs text-slate-300 leading-relaxed pl-4 font-normal">pandas (data cleaning, preprocessing, visualization)</p>
                            </div>

                            <!-- Data Processing & BI -->
                            <div class="bg-slate-800/70 rounded-2xl p-4 border border-slate-700/60 hover:bg-slate-800 transition-all space-y-2">
                                <div>
                                    <div class="font-extrabold text-sky-300 mb-0.5 flex items-center gap-2 text-xs">
                                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span> Data Processing
                                    </div>
                                    <p class="text-xs text-slate-300 pl-3.5">data cleaning, data validation, ETL (extract–transform–load)</p>
                                </div>
                                <div>
                                    <div class="font-extrabold text-teal-300 mb-0.5 flex items-center gap-2 text-xs">
                                        <span class="w-1.5 h-1.5 rounded-full bg-teal-400"></span> Data Visualization
                                    </div>
                                    <p class="text-xs text-slate-300 pl-3.5">Excel, Tableau, Power BI (basic)</p>
                                </div>
                                <div>
                                    <div class="font-extrabold text-amber-300 mb-0.5 flex items-center gap-2 text-xs">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> Power BI
                                    </div>
                                    <p class="text-xs text-slate-300 pl-3.5">Dashboard Development, Data Modeling (Basic)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column Stack: IT, Web Dev, Soft Skills -->
                <div class="space-y-7 flex flex-col justify-between">
                    
                    <!-- Card 2: IT & Programming -->
                    <div class="bg-slate-900 text-white rounded-3xl p-6 md:p-8 shadow-2xl border border-emerald-500/30 relative overflow-hidden group hover:border-emerald-500/60 transition-all duration-500">
                        <div class="absolute -top-16 -right-16 w-52 h-52 bg-emerald-600/20 rounded-full blur-3xl pointer-events-none group-hover:bg-emerald-600/30 transition-all duration-500"></div>
                        
                        <!-- Header -->
                        <div class="flex items-center gap-4 mb-5 pb-3.5 border-b border-slate-800/80">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-600 flex items-center justify-center text-white shadow-lg shadow-emerald-500/30 text-2xl font-black shrink-0">
                                💻
                            </div>
                            <div>
                                <span class="text-[11px] font-black text-emerald-400 uppercase tracking-widest block mb-0.5">Systems & Network</span>
                                <h4 class="text-lg font-extrabold text-white tracking-tight">IT & Programming</h4>
                            </div>
                        </div>

                        <!-- Content Blocks -->
                        <div class="space-y-3 text-sm">
                            <div class="bg-slate-800/70 rounded-xl p-3.5 border border-slate-700/60 hover:bg-slate-800 transition-all flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                <span class="font-extrabold text-emerald-300 text-xs md:text-sm flex items-center gap-2 min-w-[150px]"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> IT Fundamentals</span>
                                <span class="text-xs text-slate-300 sm:text-right font-normal">hardware & software basics, installation, ICT support</span>
                            </div>
                            <div class="bg-slate-800/70 rounded-xl p-3.5 border border-slate-700/60 hover:bg-slate-800 transition-all flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                <span class="font-extrabold text-teal-300 text-xs md:text-sm flex items-center gap-2 min-w-[150px]"><span class="w-2 h-2 rounded-full bg-teal-400"></span> Networking</span>
                                <span class="text-xs text-slate-300 sm:text-right font-normal">LAN/Wi-Fi, TCP/IP, DNS, DHCP (basic)</span>
                            </div>
                            <div class="bg-slate-800/70 rounded-xl p-3.5 border border-slate-700/60 hover:bg-slate-800 transition-all flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                <span class="font-extrabold text-green-300 text-xs md:text-sm flex items-center gap-2 min-w-[150px]"><span class="w-2 h-2 rounded-full bg-green-400"></span> Programming</span>
                                <span class="text-xs text-slate-300 sm:text-right font-normal">HTML, CSS, JavaScript, PHP, C++</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Web Development -->
                    <div class="bg-slate-900 text-white rounded-3xl p-6 md:p-8 shadow-2xl border border-sky-500/30 relative overflow-hidden group hover:border-sky-500/60 transition-all duration-500">
                        <div class="absolute -top-16 -right-16 w-52 h-52 bg-sky-600/20 rounded-full blur-3xl pointer-events-none group-hover:bg-sky-600/30 transition-all duration-500"></div>
                        
                        <!-- Header -->
                        <div class="flex items-center gap-4 mb-5 pb-3.5 border-b border-slate-800/80">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-600 flex items-center justify-center text-white shadow-lg shadow-sky-500/30 text-2xl font-black shrink-0">
                                ðŸŒ
                            </div>
                            <div>
                                <span class="text-[11px] font-black text-sky-400 uppercase tracking-widest block mb-0.5">Full Stack & Frameworks</span>
                                <h4 class="text-lg font-extrabold text-white tracking-tight">Web Development</h4>
                            </div>
                        </div>

                        <!-- Pills Grid -->
                        <div class="flex flex-wrap gap-2.5 text-xs font-bold text-sky-200">
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-sky-400 shadow-xs shadow-sky-400"></span> HTML5, CSS3, JavaScript (ES6+)</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-400 shadow-xs shadow-red-400"></span> Laravel</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-cyan-400 shadow-xs shadow-cyan-400"></span> React.js</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-green-400 shadow-xs shadow-green-400"></span> Node.js</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-purple-400 shadow-xs shadow-purple-400"></span> PHP</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span> Responsive Web Design</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> REST API (Basic)</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-pink-400"></span> Figma (Basic)</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-orange-400"></span> Git & GitHub</span>
                            <span class="px-3.5 py-2 bg-sky-950/80 text-sky-200 hover:bg-sky-500/20 hover:text-white border border-sky-500/30 rounded-xl transition-all flex items-center gap-2 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Version Control (Git)</span>
                        </div>
                    </div>

                    <!-- Card 4: Soft Skills -->
                    <div class="bg-slate-900 text-white rounded-3xl p-6 md:p-8 shadow-2xl border border-amber-500/30 relative overflow-hidden group hover:border-amber-500/60 transition-all duration-500">
                        <div class="absolute -top-16 -right-16 w-52 h-52 bg-amber-600/20 rounded-full blur-3xl pointer-events-none group-hover:bg-amber-600/30 transition-all duration-500"></div>
                        
                        <!-- Header -->
                        <div class="flex items-center gap-4 mb-5 pb-3.5 border-b border-slate-800/80">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-600 flex items-center justify-center text-white shadow-lg shadow-amber-500/30 text-2xl font-black shrink-0">
                                ðŸ”¥
                            </div>
                            <div>
                                <span class="text-[11px] font-black text-amber-400 uppercase tracking-widest block mb-0.5">Professional Qualities</span>
                                <h4 class="text-lg font-extrabold text-white tracking-tight">Soft Skills</h4>
                            </div>
                        </div>

                        <!-- Soft Skills Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs font-bold text-amber-200">
                            <div class="bg-amber-950/50 hover:bg-amber-900/50 p-3.5 rounded-xl border border-amber-500/30 flex items-center gap-2.5 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-amber-400 shrink-0 shadow-sm shadow-amber-400"></span>
                                <span>Problem Solving <span class="text-amber-300 font-normal block text-[11px]">(analytical thinking)</span></span>
                            </div>
                            <div class="bg-amber-950/50 hover:bg-amber-900/50 p-3.5 rounded-xl border border-amber-500/30 flex items-center gap-2.5 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-orange-400 shrink-0 shadow-sm shadow-orange-400"></span>
                                <span>Communication & Interpersonal Skills</span>
                            </div>
                            <div class="bg-amber-950/50 hover:bg-amber-900/50 p-3.5 rounded-xl border border-amber-500/30 flex items-center gap-2.5 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-yellow-400 shrink-0 shadow-sm shadow-yellow-400"></span>
                                <span>Teamwork & Collaboration</span>
                            </div>
                            <div class="bg-amber-950/50 hover:bg-amber-900/50 p-3.5 rounded-xl border border-amber-500/30 flex items-center gap-2.5 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0 shadow-sm shadow-emerald-400"></span>
                                <span>Time Management & Discipline</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Footer inside CV Modal -->
        <div class="mt-12 pt-6 border-t border-slate-200 text-center text-xs text-slate-500 font-medium">
            &copy; 2026 Chris Teper Ferdiyanto
        </div>

        </div>
    </div>
</div>

<!-- Contact Form Section -->
<section id="contact" class="py-20 bg-white relative">
    <div class="max-w-xl mx-auto px-6 gs-reveal-up">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-3">Connect With Me</h2>
            <p class="text-slate-600 font-medium text-base">Check out my repositories, professional network, and daily updates.</p>
        </div>
        
        <div class="bg-gradient-to-br from-white to-slate-50 p-6 md:p-8 rounded-3xl shadow-2xl shadow-emerald-100/50 border border-slate-100 flex justify-center">
            <div class="flex flex-row flex-wrap justify-center items-center gap-4">
                <!-- GitHub -->
                <a href="https://github.com/christeperferdiyanto571" target="_blank" class="flex items-center justify-center gap-2 w-auto px-5 py-2.5 bg-slate-900 text-white rounded-lg hover:-translate-y-1 hover:shadow-lg hover:shadow-slate-400/50 transition-all duration-300">
                    <i class="devicon-github-original text-xl"></i>
                    <span class="font-bold text-sm tracking-wide">GitHub</span>
                </a>
                
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/christeperferdiyanto/" target="_blank" class="flex items-center justify-center gap-2 w-auto px-5 py-2.5 bg-[#0a66c2] text-white rounded-lg hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/50 transition-all duration-300">
                    <i class="devicon-linkedin-plain text-xl"></i>
                    <span class="font-bold text-sm tracking-wide">LinkedIn</span>
                </a>
                
                <!-- Instagram -->
                <a href="https://www.instagram.com/ctp.rhs?igsh=bXQxZmJzOGcwYmlv&utm_source=qr" target="_blank" class="flex items-center justify-center gap-2 w-auto px-5 py-2.5 bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888] text-white rounded-lg hover:-translate-y-1 hover:shadow-lg hover:shadow-pink-400/50 transition-all duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    <span class="font-bold text-sm tracking-wide">Instagram</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-white border-t border-slate-100 py-10 text-center">
    <a href="#" class="text-2xl font-extrabold tracking-tighter text-slate-900 inline-block mb-4">CHRIS<span class="text-emerald-500">.</span></a>
    <p class="text-slate-500 font-medium text-sm mb-2">© 2026 Chris Teper Ferdiyanto. All rights reserved.</p>
    <p class="text-slate-400 text-xs">Crafted cleanly with Laravel 11, Tailwind CSS & Swiper.js.</p>
</footer>

<script>
    // Typed.js Implementation
    new Typed('#typed-text', {
        strings: ['Data Analyst.', 'Data Scientist.'],
        typeSpeed: 60,
        backSpeed: 40,
        backDelay: 2500,
        loop: true,
        cursorChar: '|'
    });



    // GSAP ScrollTrigger Animations
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.utils.toArray('.gs-reveal-up').forEach(function(elem) {
        gsap.fromTo(elem, { y: 60, opacity: 0 }, {
            y: 0, opacity: 1, duration: 1.2, ease: "power3.out",
            scrollTrigger: {
                trigger: elem,
                start: "top 85%"
            }
        });
    });





    // Initialize Certifications Swiper
    new Swiper('.cert-swiper', {
        effect: 'cards',
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    // Explicitly Initialize Vanilla Tilt for 3D image effect
    VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
        max: 20,
        speed: 400,
        glare: true,
        "max-glare": 0.4,
        perspective: 1000,
        scale: 1.05
    });
const projectsData = @json($projects);

    const modal = document.getElementById('projectModal');
    const modalBackdrop = document.getElementById('modalBackdrop');
    const modalContent = document.getElementById('modalContent');

    function openProjectModal(index) {
        const project = projectsData[index];
        if(!project) return;

        // Populate Data
        const imageEl = document.getElementById('modalImage');
        imageEl.src = project.image;
        imageEl.className = 'w-full h-full object-contain p-6';
        document.getElementById('modalImageContainer').className = 'w-full md:w-2/5 h-64 md:h-auto relative bg-slate-900 flex items-center justify-center';

        document.getElementById('modalTitle').textContent = project.title;
        document.getElementById('modalDesc').textContent = project.desc_full;
        document.getElementById('modalTechStack').textContent = project.tech_stack;
        document.getElementById('modalSystem').textContent = project.system_db;

        // Tags
        const tagsHtml = project.tags.map(tag => `<span class="px-3 py-1 text-xs font-bold bg-${tag.color}-50 text-${tag.color}-600 rounded-full border border-${tag.color}-100">${tag.name}</span>`).join('');
        document.getElementById('modalTags').innerHTML = tagsHtml;

        // Links
        let linksHtml = '';
        project.links.forEach(link => {
            if(link.type === 'github') {
                linksHtml += `<a href="${link.url}" target="_blank" class="px-6 py-2.5 bg-slate-900 text-white font-bold rounded-xl hover:bg-slate-800 transition-colors flex items-center gap-2"><i class="devicon-github-original"></i> ${link.text}</a>`;
            } else if (link.type === 'download') {
                linksHtml += `<a href="${link.url}" download class="px-6 py-2.5 bg-emerald-600 text-white font-bold rounded-xl hover:bg-emerald-700 transition-colors flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg> ${link.text}</a>`;
            } else {
                linksHtml += `<a href="${link.url}" target="_blank" class="px-6 py-2.5 bg-sky-600 text-white font-bold rounded-xl hover:bg-sky-700 transition-colors flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg> ${link.text}</a>`;
            }
        });
        document.getElementById('modalLinks').innerHTML = linksHtml;

        // Show Modal
        document.body.appendChild(modal);
        modal.classList.remove('hidden');
        // Trigger reflow
        void modal.offsetWidth;
        
        modalBackdrop.classList.remove('opacity-0');
        modalBackdrop.classList.add('opacity-100');
        
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');
        
        document.body.style.overflow = 'hidden';
    }

    function closeProjectModal() {
        modalBackdrop.classList.remove('opacity-100');
        modalBackdrop.classList.add('opacity-0');
        
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }, 300);
    }

    // Digital CV Modal Controls
    const cvModal = document.getElementById('cvModal');
    const cvBackdrop = document.getElementById('cvBackdrop');
    const cvContent = document.getElementById('cvContent');

    function openCvModal() {
        document.body.appendChild(cvModal);
        cvModal.classList.remove('hidden');
        cvModal.scrollTop = 0;
        setTimeout(() => {
            cvBackdrop.classList.remove('opacity-0');
            cvBackdrop.classList.add('opacity-100');
            cvContent.classList.remove('scale-95', 'opacity-0');
            cvContent.classList.add('scale-100', 'opacity-100');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    function closeCvModal() {
        cvBackdrop.classList.remove('opacity-100');
        cvBackdrop.classList.add('opacity-0');
        cvContent.classList.remove('scale-100', 'opacity-100');
        cvContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            cvModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }, 300);
    }
</script>
@endsection



