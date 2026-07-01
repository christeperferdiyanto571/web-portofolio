<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Data Analyst</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; overflow-x: hidden; }
        
        /* Custom Floating Animation for Profile Photo */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Gradient Text Custom */
        .text-gradient {
            background: linear-gradient(90deg, var(--color-flame), var(--color-carbon));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-white text-carbon antialiased selection:bg-flame selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-dust shadow-sm" data-aos="fade-down" data-aos-duration="800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <span class="text-3xl font-extrabold text-carbon tracking-tighter">Portofolio<span class="text-flame">.</span></span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="hover:text-flame font-semibold transition-colors">Home</a>
                        <a href="#about" class="hover:text-flame font-semibold transition-colors">About</a>
                        <a href="#skills" class="hover:text-flame font-semibold transition-colors">Skills</a>
                        <a href="#projects" class="hover:text-flame font-semibold transition-colors">Projects</a>
                        <a href="#contact" class="bg-flame hover:bg-orange-600 text-white px-5 py-2.5 rounded-full font-bold transition-transform hover:scale-105 shadow-lg shadow-flame/40">Hire Me</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Page 1) -->
    <section id="home" class="relative pt-32 pb-20 md:pt-40 md:pb-32 px-4 max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between min-h-screen">
        
        <!-- Kiri: Teks Perkenalan -->
        <div class="md:w-1/2 text-left z-10" data-aos="fade-right" data-aos-duration="1000">
            <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-alabaster border border-dust text-carbon text-sm font-bold mb-6 shadow-sm">
                <span class="flex w-2.5 h-2.5 rounded-full bg-flame mr-2 animate-pulse"></span>
                Data Analyst
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-carbon leading-tight">
                Turning Raw Data into <br/>
                <span class="text-gradient">Actionable Stories</span>
            </h1>
            <p class="mt-4 text-xl text-gray-600 max-w-lg mb-10 leading-relaxed font-medium">
                Hello! I transform complex datasets into interactive dashboards and strategic business insights.
            </p>
            <div class="flex gap-4">
                <a href="#projects" class="bg-flame hover:bg-orange-700 text-white px-8 py-3.5 rounded-full font-bold transition-all shadow-xl shadow-flame/30 hover:-translate-y-1">View My Work</a>
            </div>
        </div>

        <!-- Kanan: Foto Profil (Bisa Gerak/Float) -->
        <div class="md:w-1/2 mt-16 md:mt-0 flex justify-center z-10" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
            <!-- INI TEMPAT FOTO LU NANTI -->
            <!-- Ganti src="gambar-sementara" dengan path foto lu (misal: /images/foto-saya.jpg) -->
            <div class="relative w-72 h-72 md:w-96 md:h-96 rounded-full border-4 border-flame p-2 animate-float bg-alabaster shadow-2xl flex items-center justify-center overflow-hidden group cursor-pointer">
                <!-- GANTI src DI BAWAH INI NANTI YAA -->
                <img src="https://ui-avatars.com/api/?name=Data+Analyst&background=191919&color=fff&size=512" alt="Foto Profil" class="rounded-full w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                
                <div class="absolute inset-0 bg-carbon/50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full">
                    <p class="text-white font-bold">Ganti Foto Disini Nanti!</p>
                </div>
            </div>
            
            <!-- Ornamen Dekorasi -->
            <div class="absolute w-64 h-64 bg-flame/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
        </div>
    </section>

    <!-- About Section (Page 2) -->
    <section id="about" class="py-24 bg-alabaster">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold mb-8 text-carbon" data-aos="fade-up">About Me</h2>
            <div class="bg-white p-10 rounded-3xl shadow-xl border border-dust" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-xl text-gray-700 leading-relaxed font-medium">
                    Saya adalah seorang Data Analyst yang percaya bahwa setiap angka memiliki cerita. Dengan keahlian dalam memproses data mentah menjadi visualisasi interaktif, saya membantu bisnis mengambil keputusan yang tepat sasaran, akurat, dan berbasis data.
                </p>
            </div>
        </div>
    </section>

    <!-- Skills Section (Page 3) -->
    <section id="skills" class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl font-extrabold text-carbon">Skills & Tools</h2>
                <p class="mt-4 text-gray-600 font-medium">Senjata andalan saya dalam membedah data.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                
                <!-- Skill 1: Muncul dari Kiri -->
                <div class="bg-carbon text-white p-6 rounded-2xl shadow-xl flex items-center border-l-8 border-flame transform transition-transform hover:scale-105" data-aos="fade-right" data-aos-duration="1000">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center text-4xl mr-6">
                        📊
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-1">Advanced Excel</h3>
                        <p class="text-gray-400">PivotTables, Power Query, Macros & Complex Dashboards.</p>
                    </div>
                </div>

                <!-- Skill 2: Muncul dari Kanan -->
                <div class="bg-carbon text-white p-6 rounded-2xl shadow-xl flex items-center border-r-8 border-flame transform transition-transform hover:scale-105" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center text-4xl mr-6">
                        🐍
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-1">Python Programming</h3>
                        <p class="text-gray-400">Pandas, Numpy, Data Cleaning & Automation.</p>
                    </div>
                </div>

                <!-- Skill 3: Muncul dari Kiri Bawah -->
                <div class="bg-carbon text-white p-6 rounded-2xl shadow-xl flex items-center border-l-8 border-flame transform transition-transform hover:scale-105" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center text-4xl mr-6">
                        📈
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-1">Data Visualization</h3>
                        <p class="text-gray-400">Storytelling with data, UI/UX for Dashboards.</p>
                    </div>
                </div>

                <!-- Skill 4: Muncul dari Kanan Bawah -->
                <div class="bg-carbon text-white p-6 rounded-2xl shadow-xl flex items-center border-r-8 border-flame transform transition-transform hover:scale-105" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center text-4xl mr-6">
                        💡
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-1">Business Intelligence</h3>
                        <p class="text-gray-400">Turning insights into actionable business strategies.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Projects Section (Page 4) -->
    <section id="projects" class="py-24 bg-alabaster">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-extrabold text-carbon">Featured Projects</h2>
                <p class="mt-4 text-gray-600 font-medium">Hasil karya analisis data terbaru.</p>
            </div>

            <!-- Project Card 1: JogjaKarya E-commerce -->
            <!-- Project Card 1: JogjaKarya E-commerce -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-2xl border border-dust max-w-5xl mx-auto hover:shadow-flame/20 transition-shadow duration-300 mb-12" data-aos="zoom-in-up" data-aos-duration="1200">
                <div class="md:flex">
                    <div class="md:w-1/2 h-80 md:h-auto bg-carbon relative flex items-center justify-center group overflow-hidden p-6">
                        <div class="absolute inset-0 bg-carbon/10 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
                        <img src="{{ asset('JogjaKarya.png') }}" alt="JogjaKarya E-commerce" class="object-contain w-full h-full group-hover:scale-105 transition-transform duration-700 rounded-xl">
                    </div>
                    <div class="md:w-1/2 p-10 md:p-14 flex flex-col justify-center">
                        <div class="flex gap-2 mb-6">
                            <span class="px-3 py-1 text-sm font-bold bg-red-100 text-red-700 rounded-full border border-red-300">Laravel</span>
                            <span class="px-3 py-1 text-sm font-bold bg-cyan-100 text-cyan-700 rounded-full border border-cyan-300">Tailwind CSS</span>
                            <span class="px-3 py-1 text-sm font-bold bg-yellow-100 text-yellow-700 rounded-full border border-yellow-300">MySQL</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-carbon mb-4">JogjaKarya UMKM E-commerce</h3>
                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            Membangun platform E-commerce *full-stack* khusus untuk produk-produk UMKM Yogyakarta seperti batik dan kerajinan. Dilengkapi dengan sistem manajemen produk, riwayat pesanan (Admin Panel), dan integrasi keranjang belanja.
                        </p>
                        <ul class="text-gray-600 mb-8 space-y-2 font-medium">
                            <li><span class="text-flame font-bold">✓</span> Sistem Otentikasi (Admin & Customer).</li>
                            <li><span class="text-flame font-bold">✓</span> Tampilan elegan bertema Coklat Sogan (Batik).</li>
                        </ul>
                        <a href="http://web-jogjakarya-umkm.page.gd/public/" target="_blank" class="self-start bg-flame hover:bg-orange-700 text-white px-8 py-3 rounded-full font-bold transition-transform hover:-translate-y-1 shadow-lg">Kunjungi Website</a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2: Excel Dashboard -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-2xl border border-dust max-w-5xl mx-auto hover:shadow-flame/20 transition-shadow duration-300" data-aos="zoom-in-up" data-aos-duration="1200">
                <div class="md:flex">
                    <div class="md:w-1/2 h-80 md:h-auto bg-dust relative flex items-center justify-center group overflow-hidden">
                        <!-- NANTI GANTI SRC FOTO DASHBOARD EXCEL LU DISINI -->
                        <div class="absolute inset-0 bg-carbon/10 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
                        <img src="{{ asset('dasboard.png') }}" alt="Excel Dashboard" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="md:w-1/2 p-10 md:p-14 flex flex-col justify-center">
                        <div class="flex gap-2 mb-6">
                            <span class="px-3 py-1 text-sm font-bold bg-green-100 text-green-700 rounded-full border border-green-300">Excel</span>
                            <span class="px-3 py-1 text-sm font-bold bg-blue-100 text-blue-700 rounded-full border border-blue-300">Python</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-carbon mb-4">Global Economic & HDI Analysis</h3>
                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            Menganalisis korelasi antara indikator makroekonomi (GDP) dan metrik kesejahteraan manusia (Harapan Hidup, Internet) dari tahun 1960-2021. Dibangun dari nol menggunakan Python untuk pembersihan data dan Excel untuk pembuatan dashboard interaktif.
                        </p>
                        <ul class="text-gray-600 mb-8 space-y-2 font-medium">
                            <li><span class="text-flame font-bold">✓</span> Menyoroti ketimpangan global antara negara kaya & miskin.</li>
                            <li><span class="text-flame font-bold">✓</span> Membuktikan korelasi internet dan harapan hidup.</li>
                        </ul>
                        <button class="self-start bg-carbon hover:bg-black text-white px-8 py-3 rounded-full font-bold transition-transform hover:-translate-y-1 shadow-lg">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-carbon text-white py-12 text-center border-t-8 border-flame">
        <h2 class="text-3xl font-bold mb-4">Mari Berkolaborasi!</h2>
        <p class="text-dust mb-8">Punya data yang butuh diolah jadi visualisasi menawan?</p>
        <a href="mailto:hello@example.com" class="inline-block bg-flame hover:bg-orange-600 text-white px-10 py-4 rounded-full font-bold transition-transform hover:-translate-y-1 shadow-lg shadow-flame/30 mb-12">
            Hubungi Saya
        </a>
        <p class="text-gray-500 text-sm font-medium">&copy; 2026 Data Analyst Portfolio. Crafted with Laravel & Tailwind CSS.</p>
    </footer>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi Animasi saat di scroll
        AOS.init({
            once: true, // animasinya jalan sekali aja pas pertama kali dilihat
            offset: 100, // jarak dari bawah layar sebelum animasi mulai
        });
    </script>
</body>
</html>
