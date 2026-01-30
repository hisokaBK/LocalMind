<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LEGO Community Home Page</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f9f506",
                        "background-light": "#f8f8f5",
                        "background-dark": "#23220f",
                        "brick-red": "#e3000b",
                        "brick-blue": "#0055bf",
                        "brick-green": "#008528",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .lego-stud {
            background: radial-gradient(circle at 50% 30%, rgba(255,255,255,0.4) 0%, rgba(0,0,0,0.1) 100%);
            box-shadow: inset 0 -2px 4px rgba(0,0,0,0.2);
        }
        .brick-shadow {
            box-shadow: 4px 4px 0px rgba(0,0,0,0.15);
        }
        .isometric-card {
            transform: perspective(1000px) rotateX(10deg) rotateY(-5deg);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#181811] dark:text-white transition-colors duration-300">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Top Navigation -->
<header class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-solid border-[#e6e6db] dark:border-[#3a391e] px-4 md:px-20 lg:px-40 py-3">
<div class="flex items-center justify-between whitespace-nowrap">
<div class="flex items-center gap-4">
<div class="size-10 bg-brick-red rounded-lg flex items-center justify-center brick-shadow">
<span class="material-symbols-outlined text-white font-bold">extension</span>
</div>
<h2 class="text-[#181811] dark:text-white text-xl font-extrabold leading-tight tracking-[-0.015em]">LEGO City Builders</h2>
</div>
<div class="hidden md:flex flex-1 justify-center gap-8">
<a class="text-[#181811] dark:text-gray-300 text-sm font-bold leading-normal hover:text-brick-red transition-colors" href="#">Build</a>
<a class="text-[#181811] dark:text-gray-300 text-sm font-bold leading-normal hover:text-brick-blue transition-colors" href="#">Explore</a>
<a class="text-[#181811] dark:text-gray-300 text-sm font-bold leading-normal hover:text-brick-green transition-colors" href="#">Challenges</a>
<a class="text-[#181811] dark:text-gray-300 text-sm font-bold leading-normal hover:text-primary transition-colors" href="#">Cities</a>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-[#181811] dark:text-white">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="bg-primary text-[#181811] px-5 py-2 rounded-lg font-bold text-sm brick-shadow hover:translate-y-[-2px] active:translate-y-[0px] transition-all">
                        Sign In
                    </button>
<div class="size-10 rounded-full bg-cover bg-center border-2 border-primary" data-alt="User avatar placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBq5xQJwCsmPY8iCeaxZ49TgT_jq-6N6RpJzidJctXO151jV6dKCZHEAXlzl4ae1Qkwc5MEqebXcOjAN3FnGqsF_OlW_-B1w3BKKiwZc-y6Xrne_PYtlCfQpwiuBYguGaCrF8VNc8n7HQ-LPeZvFa1NkK6sZfbzTwY_EsTHt0JD3HmISlI9-Q76hw9RAU6iQNXUhLsn6nJWg4fimrXNtfWCzXxePuYSmYIJS5spbyXq-9QGNoOAWRpVnpSJEvkhN3tkaNDxlQlcBZM");'></div>
</div>
</div>
</header>
<!-- Hero Section -->
<main class="flex-1">
<div class="relative w-full @container">
<div class="min-h-[600px] flex flex-col items-center justify-center p-6 bg-cover bg-center relative" data-alt="Isometric LEGO city map illustration with blocky 3D models" style='background-image: linear-gradient(rgba(248, 248, 245, 0.8), rgba(248, 248, 245, 0.6)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBIGrn1vPwE7vbwj8c8lQfiaJ3oVm32-PbjTyh5roJEBCTFXbkVkEgQC553IS5uLJKQrjsNDe0cQvoAX6c52p6H3gXD8guebH3T7qEl6-bKSfSPjatEvlD--mvOQoFeoS72kYBbk87OivLjyGSe8wHxILhpSzsw4YfdEAB1l_iQy6EOGyFWdUtAzpsll4C_S1ZnCHGTbVuJ-8xnLBNl-4LFrZTlhR9uIStl9h7Ao7J_WvI-K8LagKAVQaiUPuhUBs7VGTVKeMRCujc");'>
<!-- Floating Questions Overlay -->
<div class="absolute inset-0 pointer-events-none overflow-hidden hidden lg:block">
<div class="absolute top-20 left-[15%] isometric-card bg-white p-4 rounded-xl shadow-xl w-64 border-2 border-brick-blue">
<div class="flex gap-3 items-start">
<span class="material-symbols-outlined text-brick-blue">chat_bubble</span>
<p class="text-sm font-bold">How to build a modular park in Rabat?</p>
</div>
</div>
<div class="absolute bottom-40 right-[10%] isometric-card bg-white p-4 rounded-xl shadow-xl w-64 border-2 border-brick-red">
<div class="flex gap-3 items-start">
<span class="material-symbols-outlined text-brick-red">quiz</span>
<p class="text-sm font-bold">Best bricks for Casablanca's harbor wall?</p>
</div>
</div>
</div>
<div class="relative z-10 flex flex-col items-center gap-8 max-w-4xl text-center">
<h1 class="text-[#181811] dark:text-white text-5xl md:text-7xl font-[900] leading-tight tracking-tighter uppercase">
                            Ask Questions <br/><span class="text-brick-red">About Your City</span>
</h1>
<p class="text-[#181811] dark:text-gray-300 text-lg md:text-xl font-medium max-w-2xl">
                            Connect with urban builders across the globe in our blocky community. Build the world, brick by brick.
                        </p>
<!-- Massive LEGO Search Bar -->
<div class="w-full max-w-2xl mt-4 relative">
<!-- Stud decorations -->
<div class="absolute -top-3 left-4 flex gap-4">
<div class="size-6 rounded-full bg-primary lego-stud"></div>
<div class="size-6 rounded-full bg-primary lego-stud"></div>
<div class="size-6 rounded-full bg-primary lego-stud"></div>
</div>
<div class="flex items-stretch bg-primary p-2 rounded-xl brick-shadow border-4 border-[#d1cd00]">
<div class="flex items-center px-4 text-[#181811]">
<span class="material-symbols-outlined text-3xl font-bold">search</span>
</div>
<input class="flex-1 bg-white border-none rounded-lg focus:ring-4 focus:ring-brick-blue/20 px-4 py-4 text-lg font-bold placeholder:text-gray-400" placeholder="Search for a city or question..." type="text"/>
<button class="ml-2 bg-brick-blue text-white px-8 py-4 rounded-lg font-black text-lg uppercase tracking-wider hover:bg-brick-blue/90 transition-all active:scale-95">
                                    Search
                                </button>
</div>
</div>
</div>
</div>
</div>
<!-- Trending Section Header -->
<div class="px-4 md:px-20 lg:px-40 py-10">
<div class="flex items-center justify-between mb-8">
<div>
<h2 class="text-3xl font-black text-[#181811] dark:text-white flex items-center gap-3">
<span class="size-6 bg-brick-green rounded-sm inline-block"></span>
                            Trending in the City
                        </h2>
<p class="text-gray-500 dark:text-gray-400 font-medium">Top discussions from master builders around the world.</p>
</div>
<button class="flex items-center gap-2 text-brick-blue font-bold hover:underline">
                        View all cities <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<!-- City Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Featured Casablanca -->
<div class="group flex flex-col bg-white dark:bg-[#2d2c14] rounded-2xl overflow-hidden border-2 border-transparent hover:border-primary transition-all brick-shadow">
<div class="relative h-64 bg-cover bg-center" data-alt="3D LEGO model of Casablanca harbor" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAS9QBst0RVtVexnNZS6uq5dbtM44eSiQYh4zIw_d0po6IoLau6uVLFiJLHr20rQXWznCpKU4FlkMgvUeuxhPUjStiVYxpNjmrb_BoE9_C8dDUj6T1MECN0WK8LgPdu9wngk7-sUlxsI36yqBa5I0zVjKQ12MIuhcESzb488wzdGpF_qqTR5SyhYA87gTXpt0JYWt9uCth_dSirFH7ySeg5q2GAdGnWT05nusCa-2QxOw7fz4zcQIx0UobAgSAzi4sdml4RCHx58rs");'>
<div class="absolute top-4 left-4">
<span class="bg-brick-red text-white px-3 py-1 rounded-full text-xs font-black uppercase tracking-widest">Hot Topic</span>
</div>
</div>
<div class="p-6">
<div class="flex items-center justify-between mb-2">
<h3 class="text-2xl font-black">Casablanca</h3>
<div class="flex gap-1">
<div class="size-4 rounded-full bg-brick-blue"></div>
<div class="size-4 rounded-full bg-brick-red"></div>
</div>
</div>
<p class="text-lg font-bold text-[#181811] dark:text-gray-200 mb-6">How to optimize the harbor traffic flow using modular tiles?</p>
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="size-8 rounded-full bg-gray-200 border-2 border-white" data-alt="User profile" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBuNTUSfNWLQL8cMqL8repbMgV4SmwNY7t4IuMYK77pXyqTsWnCYppFNs7qG6XhXPXC821k04o4VXSyge-hgPKM_9KpOSDNzcXABB-JH5A774aKd1tSKwtVqA7lGjoQegZzZ7qD_EmoSK_kdDYySXTNBCLmF4tvCXfV6-di750GPlMko9xF42jRBSF-WTISYepL7q-fsqOiIWBJQye5bg8ysw38Dm6KW_iGeS4DV4Gp8kia8OQklZLvhguH3nVO7BfGgbAn5p7QE20");'></div>
<span class="text-sm font-bold text-gray-600 dark:text-gray-400">@BuilderAli</span>
</div>
<div class="flex gap-3">
<div class="flex items-center gap-1 bg-background-light dark:bg-background-dark px-3 py-1 rounded-lg border border-[#e6e6db] dark:border-[#3a391e]">
<span class="material-symbols-outlined text-sm font-bold text-brick-blue">forum</span>
<span class="text-sm font-black">42</span>
</div>
<div class="flex items-center gap-1 bg-background-light dark:bg-background-dark px-3 py-1 rounded-lg border border-[#e6e6db] dark:border-[#3a391e]">
<span class="material-symbols-outlined text-sm font-bold text-brick-red">favorite</span>
<span class="text-sm font-black">128</span>
</div>
</div>
</div>
</div>
</div>
<!-- Featured Rabat -->
<div class="group flex flex-col bg-white dark:bg-[#2d2c14] rounded-2xl overflow-hidden border-2 border-transparent hover:border-primary transition-all brick-shadow">
<div class="relative h-64 bg-cover bg-center" data-alt="LEGO architecture model of Rabat landmarks" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCh_h1TKoNj_TA-uxQZFHWf_iXGvNhRqnhQXAgd0yUWUzFAUbFH4rFgY3mInxO-VbPL8S3rAf6MBG-Cwbb-nRAqcCCWn-SHxREnI3bc8P42nFEGhIxcZVyEfuOgrXCRfIovgOvfd-cmCcxpCER3MVR1o-x-jsfTMceb1KUm04427jQ75f9_ixaREkXH179OCbvsO9lRIeyuta-IIXZ33DLb_CLr9UeyTM9LjKIQx2Om2rAJyEnX-fLr6hr6UmcA44qc6lAhPgFDTiE");'>
<div class="absolute top-4 left-4">
<span class="bg-brick-green text-white px-3 py-1 rounded-full text-xs font-black uppercase tracking-widest">New</span>
</div>
</div>
<div class="p-6">
<div class="flex items-center justify-between mb-2">
<h3 class="text-2xl font-black">Rabat</h3>
<div class="flex gap-1">
<div class="size-4 rounded-full bg-brick-green"></div>
<div class="size-4 rounded-full bg-primary"></div>
</div>
</div>
<p class="text-lg font-bold text-[#181811] dark:text-gray-200 mb-6">What's the best block type to recreate the textures of Tour Hassan?</p>
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="size-8 rounded-full bg-gray-200 border-2 border-white" data-alt="User profile" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD3AmrDM2SFLKH5vRAHX4uR4dbpKFGPmY9CNtDieZLc84VO8NqL_i3sAnVnTk58-3jrFNle9Eizt76SEEwcsJXbBUvYaBfxZp-DfS2-sEX2hTEF8YiixSd6T82uvXiadRf9X8lihgP1lkEqEu6OyCpp_mMIpX_U0y_e-KAVuEXSmdX9U-avLVJiNfaA21fb5rqlI2__GYLtH01Y8-QmrUrcf8UXp3y1XDF6y1gdI4TXzvFdxKSpMWTCjq2-i-cfcZJiCKLh8-z2bHg");'></div>
<span class="text-sm font-bold text-gray-600 dark:text-gray-400">@BlockMaster_K</span>
</div>
<div class="flex gap-3">
<div class="flex items-center gap-1 bg-background-light dark:bg-background-dark px-3 py-1 rounded-lg border border-[#e6e6db] dark:border-[#3a391e]">
<span class="material-symbols-outlined text-sm font-bold text-brick-blue">forum</span>
<span class="text-sm font-black">31</span>
</div>
<div class="flex items-center gap-1 bg-background-light dark:bg-background-dark px-3 py-1 rounded-lg border border-[#e6e6db] dark:border-[#3a391e]">
<span class="material-symbols-outlined text-sm font-bold text-brick-red">favorite</span>
<span class="text-sm font-black">95</span>
</div>
</div>
</div>
</div>
</div>
<!-- Floating Question Card Action -->
<div class="flex flex-col items-center justify-center bg-primary/20 dark:bg-primary/5 rounded-2xl border-4 border-dashed border-primary p-8 text-center group">
<div class="size-20 bg-primary rounded-full flex items-center justify-center brick-shadow mb-6 group-hover:scale-110 transition-transform cursor-pointer">
<span class="material-symbols-outlined text-4xl font-black">add_circle</span>
</div>
<h3 class="text-2xl font-black mb-2 uppercase">Your Question Here</h3>
<p class="font-bold text-gray-600 dark:text-gray-400 mb-6 px-4">Got a building challenge in your city? Ask the community!</p>
<button class="bg-white dark:bg-background-dark border-2 border-primary text-[#181811] dark:text-white px-8 py-3 rounded-lg font-black uppercase hover:bg-primary transition-colors">
                            Ask Now
                        </button>
</div>
</div>
</div>
<!-- Promotion Section -->
<div class="px-4 md:px-20 lg:px-40 py-20">
<div class="bg-brick-blue rounded-3xl p-10 md:p-20 relative overflow-hidden brick-shadow flex flex-col md:flex-row items-center gap-10">
<!-- Background decoration -->
<div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full translate-x-32 -translate-y-32"></div>
<div class="absolute bottom-0 left-0 w-32 h-32 bg-primary/20 rounded-full -translate-x-16 translate-y-16"></div>
<div class="flex-1 z-10 text-center md:text-left">
<h2 class="text-white text-4xl md:text-6xl font-black mb-6 leading-tight uppercase tracking-tight">Become a <br/><span class="text-primary">Master Builder</span></h2>
<p class="text-blue-100 text-xl font-medium mb-10 max-w-lg">Unlock special badges, city-building kits, and lead your local LEGO community today.</p>
<button class="bg-primary text-[#181811] px-10 py-4 rounded-xl font-black text-xl uppercase brick-shadow hover:translate-y-[-4px] active:translate-y-[0px] transition-all">
                            Join the Guild
                        </button>
</div>
<div class="flex-1 flex justify-center z-10">
<div class="w-full max-w-sm aspect-square bg-cover bg-center rounded-2xl border-8 border-white/20 brick-shadow" data-alt="Illustration of a complex 3D LEGO skyscraper kit" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDtGg3SHK5d-UkXuZ-TrPf1hnKEwENhOc5pHQrg1ur-mtXaX3uCh1KPI6i025pMnD5xo_PvjaetLuq8inuhiOKIE6ZvXNw1GTHBGw5k__wuLPpjrMdYuHvhnphFdnHRyREyZmO6A89VdAt5PqVOxw2FTfjel0OB8GYbBpiEhqJ-cSKDCzlzLFJRScsaKLZDYJFxRw4dkdV9zsIBXsGguZlZdc_TeuWAEhaduwqOmFg8kWdY2Qo62ElOcp8Ll95QSST86i9Y831Y7yQ");'></div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-[#e6e6db] dark:border-[#3a391e] px-4 md:px-20 lg:px-40 py-12">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-2 mb-6">
<div class="size-6 bg-brick-red rounded"></div>
<h3 class="font-black text-xl">LEGO Community</h3>
</div>
<p class="text-gray-500 dark:text-gray-400 font-medium">Building bridges, cities, and friendships one brick at a time.</p>
</div>
<div>
<h4 class="font-black uppercase mb-6 text-sm tracking-widest text-brick-blue">Platform</h4>
<ul class="space-y-4 font-bold text-gray-600 dark:text-gray-400">
<li><a class="hover:text-primary transition-colors" href="#">Map Explore</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Questions Feed</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Global Leaderboard</a></li>
</ul>
</div>
<div>
<h4 class="font-black uppercase mb-6 text-sm tracking-widest text-brick-green">Community</h4>
<ul class="space-y-4 font-bold text-gray-600 dark:text-gray-400">
<li><a class="hover:text-primary transition-colors" href="#">Guidelines</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Master Builders</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Events</a></li>
</ul>
</div>
<div>
<h4 class="font-black uppercase mb-6 text-sm tracking-widest text-brick-red">Contact</h4>
<ul class="space-y-4 font-bold text-gray-600 dark:text-gray-400">
<li><a class="hover:text-primary transition-colors" href="#">Support Center</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Build Reports</a></li>
<li><a class="hover:text-primary transition-colors" href="#">API Docs</a></li>
</ul>
</div>
</div>
<div class="mt-12 pt-8 border-t border-gray-100 dark:border-[#3a391e] flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-gray-500 font-bold">© 2024 LEGO Community UI. Created with 🧱 and ☕.</p>
<div class="flex gap-6">
<a class="text-gray-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
<a class="text-gray-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">share</span></a>
</div>
</div>
</footer>
</div>
</body></html>