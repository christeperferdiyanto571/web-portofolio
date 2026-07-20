@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="fixed w-full z-50 bg-white/70 backdrop-blur-xl border-b border-slate-200 transition-all duration-300 py-4">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center">
        <a href="#" class="text-2xl font-extrabold tracking-tighter text-slate-900">
            CHRIS<span class="bg-gradient-to-r from-sky-400 to-indigo-500 bg-clip-text text-transparent">.</span>
        </a>
        <div class="hidden md:flex space-x-8">
            <a href="#about" class="text-sm font-semibold text-slate-600 hover:text-indigo-500 transition-colors">About</a>
            <a href="#skills" class="text-sm font-semibold text-slate-600 hover:text-indigo-500 transition-colors">Skills</a>
            <a href="#experience" class="text-sm font-semibold text-slate-600 hover:text-indigo-500 transition-colors">Experience</a>
            <a href="#projects" class="text-sm font-semibold text-slate-600 hover:text-indigo-500 transition-colors">Projects</a>
            <a href="#contact" class="text-sm font-semibold text-slate-600 hover:text-indigo-500 transition-colors">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center pt-20 relative overflow-hidden bg-slate-50">
    <!-- Colorful Background Blurs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-purple-300/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-40 right-20 w-72 h-72 bg-sky-300/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-40 w-72 h-72 bg-indigo-300/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10">
        <div class="flex flex-col-reverse md:flex-row items-center gap-12">
            <!-- Kiri: Teks -->
            <div class="w-full md:w-1/2 gs-reveal-up mt-12 md:mt-0">
                <p class="inline-block px-4 py-1.5 rounded-full bg-indigo-100 text-indigo-600 font-bold tracking-wider uppercase mb-5 text-xs shadow-sm">
                    ✨ Welcome to my portfolio
                </p>
                <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 mb-4 leading-tight tracking-tight">
                    Hi, I'm <br/> 
                    <span class="bg-gradient-to-r from-sky-500 via-indigo-500 to-purple-500 bg-clip-text text-transparent">Chris Teper</span>
                </h1>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-500 mb-8 h-12 flex items-center">
                    <span class="mr-2">I am a</span> <span id="typed-text" class="text-indigo-500"></span>
                </h2>
                <p class="text-lg text-slate-600 mb-10 max-w-lg leading-relaxed">
                    Bridging the gap between <span class="font-bold text-indigo-600">Web Development</span> and <span class="font-bold text-sky-600">Data Science</span> to build smart, clean, and dynamic applications.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#projects" class="px-8 py-3.5 rounded-full bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-bold hover:from-sky-400 hover:to-indigo-500 shadow-lg shadow-indigo-500/30 transition-all transform hover:-translate-y-1">View Projects</a>
                    <a href="https://drive.google.com/drive/folders/1jDHvvCxNlffiIC0-Napk9JMO77F5cjl6?usp=sharing" target="_blank" class="px-8 py-3.5 rounded-full bg-white border border-slate-300 text-slate-700 font-bold hover:border-indigo-400 hover:text-indigo-600 shadow-sm transition-all">Download CV</a>
                </div>
            </div>
            
            <!-- Kanan: Image -->
            <div class="w-full md:w-1/2 flex justify-center relative gs-reveal-up" style="transition-delay: 200ms;">
                <!-- Kotak dengan gradasi sebagai border -->
                <div data-tilt data-tilt-max="15" data-tilt-speed="400" data-tilt-perspective="1000" class="relative w-[85%] max-w-[280px] sm:max-w-[320px] md:max-w-[360px] aspect-[4/5] rounded-[2.5rem] bg-gradient-to-br from-sky-400 via-indigo-500 to-purple-500 p-1.5 shadow-2xl shadow-indigo-300/50 group cursor-pointer transform transition-transform duration-500">
                    <!-- Container Gambar Dalam -->
                    <div class="w-full h-full rounded-[2.3rem] overflow-hidden bg-slate-100 relative">
                        <!-- Gradient Overlay Tipis pas dihover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/40 via-transparent to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                        
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
    <div class="absolute left-0 top-0 w-[500px] h-[500px] bg-gradient-to-br from-indigo-100/40 to-transparent rounded-full blur-3xl -z-10"></div>
    
    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16 gs-reveal-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">
                About <span class="bg-gradient-to-r from-indigo-500 to-sky-500 bg-clip-text text-transparent">Me.</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 gs-reveal-up">
            <!-- Main Bio (Takes up 2 columns) -->
            <div class="md:col-span-2 bg-white p-8 md:p-12 rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 relative overflow-hidden group">
                <!-- Quote Icon Watermark -->
                <div class="absolute -right-4 -top-8 text-[180px] text-indigo-50/50 font-serif leading-none group-hover:scale-110 group-hover:-rotate-6 transition-transform duration-700 pointer-events-none">"</div>
                
                <h3 class="text-2xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                    <span class="w-8 h-1 bg-indigo-500 rounded-full"></span>
                    Who am I?
                </h3>
                <p class="text-lg text-slate-600 leading-relaxed font-medium relative z-10">
                    Hello! I'm Chris Teper Ferdiyanto, a Cum Laude Informatics graduate from Universitas Ahmad Dahlan. I specialize at the intersection of <span class="text-indigo-500 font-bold">Data Science</span> and <span class="text-sky-500 font-bold">Web Development</span>. 
                    <br><br>
                    With a strong foundation in data processing (Python, SQL) and modern web technologies (React, Node.js, PHP), I don't just analyze complex datasets—I build the <span class="text-slate-800 font-semibold border-b-2 border-indigo-200">interactive platforms</span> to visualize and deliver those insights. Backed by my experience as a Data Science Mentee at Startup Campus and an Informatics Lab Assistant, I am passionate about transforming raw data into meaningful, user-friendly digital experiences.
                </p>
            </div>

            <!-- Info Column (Takes up 1 column) -->
            <div class="flex flex-col gap-6">
                <!-- Box 1: Current Status -->
                <div class="flex-1 bg-gradient-to-br from-indigo-500 to-purple-600 p-8 rounded-[2rem] shadow-lg shadow-indigo-200 text-white transform hover:-translate-y-2 transition-transform duration-300 flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-40 h-40" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="flex items-center gap-3 mb-2 relative z-10">
                        <span class="relative flex h-4 w-4">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-4 w-4 bg-green-500 border-2 border-indigo-600"></span>
                        </span>
                        <h4 class="text-sm font-bold uppercase tracking-widest text-indigo-200">Current Status</h4>
                    </div>
                    <div class="text-3xl font-black mb-2 relative z-10 leading-tight">Open to<br>Work</div>
                    <p class="text-indigo-100 font-medium relative z-10 mt-1 text-sm leading-relaxed">Seeking full-time roles in Data Science or Web Development.</p>
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
                // Web Fundamental & Backend
                ['name' => 'HTML5', 'folder' => 'html5', 'file' => 'html5-original'],
                ['name' => 'CSS3', 'folder' => 'css3', 'file' => 'css3-original'],
                ['name' => 'JavaScript', 'folder' => 'javascript', 'file' => 'javascript-original'],
                ['name' => 'PHP', 'folder' => 'php', 'file' => 'php-original'],
                ['name' => 'Laravel', 'folder' => 'laravel', 'file' => 'laravel-original'],
                ['name' => 'MySQL', 'folder' => 'mysql', 'file' => 'mysql-original-wordmark'],
                ['name' => 'Python', 'folder' => 'python', 'file' => 'python-original'],
                
                // Frontend, Tools & Data Science
                ['name' => 'ReactJS', 'folder' => 'react', 'file' => 'react-original'],
                ['name' => 'Next.js', 'folder' => 'nextjs', 'file' => 'nextjs-original', 'is_dark' => true],
                ['name' => 'Tailwind CSS', 'folder' => 'tailwindcss', 'file' => 'tailwindcss-original'],
                ['name' => 'Git', 'folder' => 'git', 'file' => 'git-original'],
                ['name' => 'Pandas', 'folder' => 'pandas', 'file' => 'pandas-original'],
                ['name' => 'Jupyter', 'folder' => 'jupyter', 'file' => 'jupyter-original'],
                ['name' => 'Figma', 'folder' => 'figma', 'file' => 'figma-original']
            ];
            // Split skills into dua baris
            $row1 = array_slice($allSkills, 0, 7);
            $row2 = array_slice($allSkills, 7, 7);
        @endphp

        <!-- Mask Image untuk efek pudar di sisi kiri dan kanan -->
        <div class="w-full overflow-hidden pb-4" style="-webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
            
            <!-- Baris 1 (Jalan ke kiri) -->
            <div class="marquee-wrapper mb-6">
                <div class="marquee-content animate-marquee-left flex gap-4 md:gap-6 w-max">
                    @foreach($row1 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill['folder'] }}/{{ $skill['file'] }}.svg" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Duplicate -->
                    @foreach($row1 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill['folder'] }}/{{ $skill['file'] }}.svg" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Triplicate biar animasi gak patah di layar lebar -->
                    @foreach($row1 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill['folder'] }}/{{ $skill['file'] }}.svg" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
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
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill['folder'] }}/{{ $skill['file'] }}.svg" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Duplicate -->
                    @foreach($row2 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill['folder'] }}/{{ $skill['file'] }}.svg" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                    <!-- Triplicate -->
                    @foreach($row2 as $skill)
                        <div class="bg-white border border-slate-100/80 px-5 py-3 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex items-center gap-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill['folder'] }}/{{ $skill['file'] }}.svg" alt="{{ $skill['name'] }}" class="w-6 h-6 md:w-7 md:h-7 {{ isset($skill['is_dark']) ? 'invert opacity-80' : '' }}" onerror="this.style.display='none'">
                            <span class="font-bold text-slate-600 text-sm md:text-base">{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Certifications Section (Swiper Cards) -->
<section id="certifications" class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <!-- Dekorasi -->
    <div class="absolute left-1/4 top-0 w-[500px] h-[500px] bg-gradient-to-br from-indigo-500/20 to-transparent rounded-full blur-3xl -z-10"></div>
    <div class="absolute right-0 bottom-0 w-[400px] h-[400px] bg-gradient-to-tl from-sky-500/20 to-transparent rounded-full blur-3xl -z-10"></div>
    
    <div class="max-w-6xl mx-auto px-6 gs-reveal-up text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Licenses & <span class="bg-gradient-to-r from-sky-400 to-indigo-400 bg-clip-text text-transparent">Certifications.</span></h2>
        <p class="text-slate-400 text-lg font-medium">Swipe to explore my professional credentials.</p>
    </div>
    
    <div class="w-full max-w-7xl mx-auto px-2 md:px-6 gs-reveal-up pb-10">
        <!-- 3 Columns for Swiper -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8">
            
            @php
                $certFiles = \Illuminate\Support\Facades\File::files(public_path('sertif'));
                $myskill = [];
                $dicoding = [];
                $others = [];

                foreach($certFiles as $file) {
                    $filename = $file->getFilename();
                    $nameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
                    $ext = strtolower($file->getExtension());
                    
                    if (preg_match('/-(2|3|4|5)$/', $nameWithoutExt) || preg_match('/_page-000(2|3|4)$/', $nameWithoutExt) || !in_array($ext, ['png', 'jpg', 'jpeg'])) {
                        continue;
                    }

                    $title = "Professional Certificate";
                    $category = 'others';
                    
                    if (str_starts_with($nameWithoutExt, 'HG5B')) {
                        $title = "MySkill Course Certificate";
                        $category = 'myskill';
                    } elseif (stripos($nameWithoutExt, 'Dicoding') !== false) {
                        $title = "Dicoding Certificate";
                        $parts = explode('Indonesia', $nameWithoutExt);
                        if (count($parts) > 1) {
                            $sub = trim(str_replace(['-1', ',', 'a', 'js', 'r', 'v', 'w e', 'y', 'fa', 'data'], 
                                                    ['', '', 'Android', 'JavaScript', 'React', 'Vue', 'Web Engine', 'Python', 'Frontend', 'Data'], 
                                                    $parts[1]));
                            if ($sub) $title .= ' - ' . ucwords($sub);
                        }
                        $category = 'dicoding';
                    } elseif (stripos($nameWithoutExt, 'certificate') !== false) {
                        $clean = str_replace(['certificate', '_', '-1', '(1)'], [' ', ' ', '', ''], $nameWithoutExt);
                        $title = ucwords(trim($clean)) . " (HackerRank)";
                    } else {
                        $clean = str_replace(['_', '-1'], [' ', ''], $nameWithoutExt);
                        $title = ucwords(trim($clean));
                    }
                    
                    $item = ['file' => $filename, 'title' => $title];
                    if($category == 'myskill') $myskill[] = $item;
                    elseif($category == 'dicoding') $dicoding[] = $item;
                    else $others[] = $item;
                }
                
                $collections = [
                    'MySkill Bootcamp' => $myskill,
                    'Dicoding Academy' => $dicoding,
                    'General & Others' => $others
                ];
            @endphp
            
            @foreach($collections as $colTitle => $items)
                <div class="flex flex-col items-center w-full">
                    <h3 class="text-sm font-bold text-sky-400 mb-8 bg-slate-800/60 px-5 py-2 rounded-full border border-slate-700/50 shadow-lg">{{ $colTitle }}</h3>
                    <!-- Swiper -->
                    <div class="swiper cert-swiper w-[280px] sm:w-[320px] md:w-[260px] lg:w-[320px]">
                        <div class="swiper-wrapper">
                            @foreach($items as $item)
                                <div class="swiper-slide bg-gradient-to-br from-slate-800 to-slate-900 p-4 flex flex-col items-center justify-center text-center border border-slate-700 rounded-2xl shadow-xl">
                                    <img src="{{ asset('sertif/' . $item['file']) }}" alt="{{ $item['title'] }}" class="w-full h-auto max-h-[35vh] rounded-lg shadow-xl shadow-black/40 mb-4 object-contain bg-white/5">
                                    <h4 class="text-xs font-bold text-white mb-2 line-clamp-2 leading-relaxed" title="{{ $item['title'] }}">{{ $item['title'] }}</h4>
                                    <div class="mt-auto bg-slate-800/80 px-3 py-1 rounded-full border border-slate-700">
                                        <span class="text-slate-400 text-[9px] font-semibold uppercase tracking-wider">Credential</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-32 bg-slate-50 relative overflow-hidden">
    <!-- Dekorasi Background -->
    <div class="absolute right-0 top-1/4 w-96 h-96 bg-sky-100/60 rounded-full blur-3xl -z-10"></div>
    <div class="absolute left-0 bottom-1/4 w-96 h-96 bg-indigo-100/60 rounded-full blur-3xl -z-10"></div>
    
    <div class="max-w-6xl mx-auto px-6">
        <div class="w-full text-center mb-24 gs-reveal-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">Experience & <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-500 to-indigo-500">Impact.</span></h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto font-medium">
                A timeline of my professional journey, where I solve real-world problems using data and mentor young tech talents.
            </p>
        </div>
        
        <div class="relative w-full max-w-4xl mx-auto">
            <!-- Center Line (Desktop) / Left Line (Mobile) -->
            <div class="absolute left-[39px] md:left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-indigo-500 via-sky-400 to-slate-200 transform md:-translate-x-1/2 rounded-full z-0"></div>
            
            <!-- Item 1: Data Science Mentee -->
            <div class="relative flex flex-col md:flex-row items-center justify-between mb-16 md:mb-24 gs-reveal-up group">
                <!-- Dot -->
                <div class="absolute left-[39px] md:left-1/2 w-6 h-6 rounded-full bg-indigo-500 border-4 border-slate-50 shadow-lg shadow-indigo-300 transform -translate-x-1/2 group-hover:scale-125 transition-transform duration-300 z-10"></div>
                
                <!-- Content Left (Info) -->
                <div class="w-full md:w-[45%] pl-[80px] md:pl-0 md:pr-12 text-left md:text-right mb-4 md:mb-0 relative z-10">
                    <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 font-bold text-xs rounded-full mb-3 uppercase tracking-widest shadow-sm">Data Science</span>
                    <h3 class="text-2xl font-bold text-slate-900 mb-1">Data Science Mentee</h3>
                    <h4 class="text-slate-500 font-semibold mb-2">Startup Campus (MSIB)</h4>
                </div>
                
                <!-- Content Right (Card) -->
                <div class="w-full md:w-[45%] pl-[80px] md:pl-12 text-left relative z-10">
                    <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 transform group-hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-100 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-indigo-50 rounded-bl-[100px] -z-10"></div>
                        <p class="text-slate-600 leading-relaxed font-medium mb-6">
                            Focused on analyzing Green Economy data. Implementing machine learning models to predict future sustainability trends and identifying key economic indicators.
                        </p>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest bg-slate-50 px-3 py-1.5 rounded-md border border-slate-100">Final Score</span>
                            <span class="text-2xl font-black text-indigo-500">94.00</span>
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
            <p class="text-slate-500 mt-4 font-medium text-lg">A colorful harmony of Data Science and Web Development.</p>
        </div>

        @php
            $projects = [
                [
                    'title' => 'Sales & Order Data Analysis',
                    'category' => 'Data Analysis',
                    'image' => asset('sales.png'),
                    'color' => 'indigo',
                    'delay' => '0ms',
                    'tags' => [
                        ['name' => 'Excel', 'color' => 'green'],
                        ['name' => 'Data Analysis', 'color' => 'indigo'],
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
                    'title' => 'JogjaKarya UMKM E-commerce',
                    'category' => 'Web Development',
                    'image' => asset('JogjaKarya.png'),
                    'color' => 'amber',
                    'delay' => '0ms',
                    'tags' => [
                        ['name' => 'Laravel', 'color' => 'red'],
                        ['name' => 'Tailwind', 'color' => 'cyan'],
                        ['name' => 'MySQL', 'color' => 'yellow'],
                    ],
                    'desc_short' => 'Full-stack E-commerce platform khusus produk UMKM Yogyakarta. Memiliki sistem Admin Panel, manajemen pesanan, dan keranjang belanja dinamis bertema Sogan Batik.',
                    'desc_full' => 'Sebuah platform E-commerce lengkap yang dirancang khusus untuk membantu UMKM di Yogyakarta memasarkan produk mereka. Menggunakan tema Sogan Batik yang khas, sistem ini dilengkapi fitur seperti keranjang belanja, checkout, dan Admin Panel untuk manajemen produk dan pesanan.',
                    'tech_stack' => 'Laravel (PHP), Tailwind CSS, Alpine.js.',
                    'system_db' => 'Arsitektur Monolithic MVC (Model-View-Controller). Database menggunakan MySQL relasional untuk menyimpan data user, produk, dan transaksi.',
                    'links' => [
                        ['type' => 'live', 'url' => 'http://web-jogjakarya-umkm.page.gd/public/', 'text' => 'Live App']
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
                    'category' => 'Web Development',
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
                    'category' => 'Web Development',
                    'image' => asset('SPK.png'),
                    'color' => 'emerald',
                    'delay' => '400ms',
                    'tags' => [
                        ['name' => 'PHP Native', 'color' => 'indigo'],
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
                    'title' => 'ChrisFlix Premium Movies',
                    'category' => 'Web Development',
                    'image' => asset('chrisflix.png'),
                    'color' => 'red',
                    'delay' => '500ms',
                    'tags' => [
                        ['name' => 'HTML/CSS', 'color' => 'orange'],
                        ['name' => 'Vanilla JS', 'color' => 'yellow'],
                        ['name' => 'TMDB API', 'color' => 'green'],
                    ],
                    'desc_short' => 'A visually stunning, Netflix-inspired movie discovery web application. Integrating with the TMDB API to fetch trending movies.',
                    'desc_full' => 'Aplikasi web pencarian film yang terinspirasi dari Netflix dengan visual memukau bergaya glassmorphism. Terintegrasi langsung dengan TMDB API untuk mengambil data film yang sedang tren, pencarian real-time, dan menampilkan metadata sinematik lengkap.',
                    'tech_stack' => 'HTML5, CSS3, Vanilla JavaScript (ES6+), Fetch API.',
                    'system_db' => 'Aplikasi Front-End murni. Tidak memiliki database sendiri; seluruh data (film, poster, rating) ditarik secara real-time dari REST API eksternal (The Movie Database).',
                    'links' => [
                        ['type' => 'live', 'url' => 'https://christeperferdiyanto571.github.io/movie-app-premium/', 'text' => 'Live App'],
                        ['type' => 'github', 'url' => 'https://github.com/christeperferdiyanto571/movie-app-premium', 'text' => 'Source Code']
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
                
                <div class="h-56 overflow-hidden relative {{ (str_contains($project['image'], 'JogjaKarya.png') || str_contains($project['image'], 'chrisflix.png') || str_contains($project['image'], 'nature.png')) ? 'bg-slate-900 p-6 flex items-center justify-center' : 'bg-slate-100' }}">
                    <img src="{!! $project['image'] !!}" alt="{{ $project['title'] }}" class="w-full h-full {{ (str_contains($project['image'], 'JogjaKarya.png') || str_contains($project['image'], 'chrisflix.png') || str_contains($project['image'], 'nature.png')) ? 'object-contain rounded-lg' : 'object-cover' }} transform group-hover:scale-105 transition-transform duration-500">
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
                                <a href="{{ $link['url'] }}" download onclick="event.stopPropagation();" class="bg-indigo-600 text-white font-bold px-4 py-2 rounded-full transform translate-y-8 group-hover:translate-y-0 transition-all duration-300 shadow-xl shadow-black/20 hover:bg-indigo-700 hover:scale-105 flex items-center gap-2" title="{{ $link['text'] }}">
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
<div id="projectModal" class="fixed inset-0 z-[100] hidden">
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

<!-- Contact Form Section -->
<section id="contact" class="py-20 bg-white relative">
    <div class="max-w-xl mx-auto px-6 gs-reveal-up">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-3">Connect With Me</h2>
            <p class="text-slate-600 font-medium text-base">Check out my repositories, professional network, and daily updates.</p>
        </div>
        
        <div class="bg-gradient-to-br from-white to-slate-50 p-6 md:p-8 rounded-3xl shadow-2xl shadow-indigo-100/50 border border-slate-100 flex justify-center">
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
    <a href="#" class="text-2xl font-extrabold tracking-tighter text-slate-900 inline-block mb-4">CHRIS<span class="text-indigo-500">.</span></a>
    <p class="text-slate-500 font-medium text-sm mb-2">© 2026 Chris Teper Ferdiyanto. All rights reserved.</p>
    <p class="text-slate-400 text-xs">Crafted cleanly with Laravel 11, Tailwind CSS & Swiper.js.</p>
</footer>

<script>
    // Typed.js Implementation
    new Typed('#typed-text', {
        strings: ['Web Developer.', 'Data Scientist.'],
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
        if(project.image.includes('JogjaKarya.png') || project.image.includes('chrisflix.png') || project.image.includes('nature.png')) {
            imageEl.className = 'w-full h-full object-contain p-6';
            document.getElementById('modalImageContainer').className = 'w-full md:w-2/5 h-64 md:h-auto relative bg-slate-900 flex items-center justify-center';
        } else {
            imageEl.className = 'w-full h-full object-cover';
            document.getElementById('modalImageContainer').className = 'w-full md:w-2/5 h-64 md:h-auto relative bg-slate-100';
        }

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
                linksHtml += `<a href="${link.url}" download class="px-6 py-2.5 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition-colors flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg> ${link.text}</a>`;
            } else {
                linksHtml += `<a href="${link.url}" target="_blank" class="px-6 py-2.5 bg-sky-600 text-white font-bold rounded-xl hover:bg-sky-700 transition-colors flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg> ${link.text}</a>`;
            }
        });
        document.getElementById('modalLinks').innerHTML = linksHtml;

        // Show Modal
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
</script>
@endsection
