<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Chris Teper - Data Scientist & Web Developer Portfolio')</title>
    
    <!-- Primary Meta Tags -->
    <meta name="title" content="Chris Teper - Data Scientist & Web Developer Portfolio">
    <meta name="description" content="Portofolio resmi Chris Teper Ferdiyanto. Menampilkan berbagai project menarik di bidang Data Science, Machine Learning, dan Web Development.">
    <meta name="keywords" content="Chris Teper, Chris Teper Ferdiyanto, Data Scientist Indonesia, Web Developer, Portofolio Web, Machine Learning, Laravel, Python, React">
    <meta name="author" content="Chris Teper Ferdiyanto">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Chris Teper - Data Scientist & Web Developer Portfolio">
    <meta property="og:description" content="Portofolio resmi Chris Teper Ferdiyanto. Menampilkan berbagai project menarik di bidang Data Science, Machine Learning, dan Web Development.">
    <!-- Ganti URL_GAMBAR_KAMU dengan URL gambar thumbnail jika web sudah online -->
    <meta property="og:image" content="{{ asset('sales.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Chris Teper - Data Scientist & Web Developer Portfolio">
    <meta property="twitter:description" content="Portofolio resmi Chris Teper Ferdiyanto. Menampilkan berbagai project menarik di bidang Data Science, Machine Learning, dan Web Development.">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- GSAP, Typed.js, Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Slate sangat terang */
            color: #0f172a; /* Deep Navy */
            overflow-x: hidden;
        }
        
        /* Marquee Animation CSS */
        .marquee-wrapper {
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: 2rem;
        }
        
        .marquee-content {
            flex-shrink: 0;
            display: flex;
            justify-content: space-around;
            min-width: 100%;
            gap: 2rem;
        }
        
        @keyframes scroll-left {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }

        @keyframes scroll-right {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        .animate-marquee-left {
            animation: scroll-left 25s linear infinite;
        }
        
        .animate-marquee-right {
            animation: scroll-right 25s linear infinite;
        }

        /* Swiper Cards Effect */
        .swiper {
            width: 320px;
            height: 400px;
        }
        @media (min-width: 768px) {
            .swiper {
                width: 400px;
                height: 450px;
            }
        }
        .swiper-slide {
            display: flex;
            border-radius: 24px;
            box-shadow: 0 20px 40px -15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="antialiased selection:bg-sky-400 selection:text-white">

    @yield('content')

</body>
</html>
