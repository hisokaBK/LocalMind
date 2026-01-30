<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LEGO Community Home Page Updated</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
<style type="text/tailwindcss">
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
        .stud-pattern {
            background-color: #0055bf;
            background-image: radial-gradient(rgba(255,255,255,0.15) 15%, transparent 16%),
                              radial-gradient(rgba(255,255,255,0.15) 15%, transparent 16%);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#181811] dark:text-white transition-colors duration-300">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<header class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-solid border-[#e6e6db] dark:border-[#3a391e] px-4 md:px-20 lg:px-40 py-3">
<div class="flex items-center justify-between whitespace-nowrap">
<div class="flex items-center gap-4">
<div class="size-10 bg-brick-red rounded-lg flex items-center justify-center brick-shadow">
<span class="material-symbols-outlined text-white font-bold">extension</span>
</div>
<h2 class="text-[#181811] dark:text-white text-xl font-extrabold leading-tight tracking-[-0.015em]"> LEGO Q&amp;A</h2>
</div>

<div class="flex items-center gap-4">
    <div class="hidden md:flex flex-1 justify-center gap-8">
    <a class="text-[#181811] dark:text-gray-300 text-sm font-bold leading-normal hover:text-brick-red transition-colors" href="/questions">Browse</a>
    </div> 
    <a href="/login" class="bg-primary text-[#181811] px-5 py-2 rounded-lg font-bold text-sm brick-shadow hover:translate-y-[-2px] active:translate-y-[0px] transition-all">
                Sign In
    </a>
</div>
</header>
<main class="flex-1">
<div class="relative w-full @container">
<div class="min-h-[600px] flex flex-col items-center justify-center p-6 bg-cover bg-center relative" style='background-image: linear-gradient(rgba(248, 248, 245, 0.8), rgba(248, 248, 245, 0.6)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBIGrn1vPwE7vbwj8c8lQfiaJ3oVm32-PbjTyh5roJEBCTFXbkVkEgQC553IS5uLJKQrjsNDe0cQvoAX6c52p6H3gXD8guebH3T7qEl6-bKSfSPjatEvlD--mvOQoFeoS72kYBbk87OivLjyGSe8wHxILhpSzsw4YfdEAB1l_iQy6EOGyFWdUtAzpsll4C_S1ZnCHGTbVuJ-8xnLBNl-4LFrZTlhR9uIStl9h7Ao7J_WvI-K8LagKAVQaiUPuhUBs7VGTVKeMRCujc");'>
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
<div class="w-full max-w-2xl mt-4 relative">
<div class="absolute -top-3 left-4 flex gap-4">

</div>
</div>
</div>
</div>
</div>
<div class="px-4 md:px-20 lg:px-40 py-16">

<div class="flex items-center justify-between mb-10">
<div class="px-4 md:px-20 lg:px-40 py-20 bg-background-light dark:bg-background-dark">
<div class="stud-pattern rounded-[2.5rem] p-12 md:p-20 relative overflow-hidden brick-shadow flex flex-col lg:flex-row items-center gap-16">
<div class="flex-1 z-10 text-center lg:text-left">
<h2 class="text-white text-5xl md:text-7xl font-black mb-8 leading-tight uppercase tracking-tight">
                        Become a <br/><span class="text-primary">Master Builder</span>
</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12 text-left">
<div class="flex gap-4 items-start">
<div class="bg-primary/20 p-2 rounded-lg">
<span class="material-symbols-outlined text-primary">verified</span>
</div>
<div>
<h4 class="text-white font-black uppercase text-sm mb-1">Exclusive Status</h4>
<p class="text-blue-100 text-sm">Gain the coveted Master Builder badge next to your profile and rank higher in search.</p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="bg-primary/20 p-2 rounded-lg">
<span class="material-symbols-outlined text-primary">inventory_2</span>
</div>
<div>
<h4 class="text-white font-black uppercase text-sm mb-1">Monthly Kits</h4>
<p class="text-blue-100 text-sm">Receive digital blueprints and parts lists for limited-edition city-building expansion packs.</p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="bg-primary/20 p-2 rounded-lg">
<span class="material-symbols-outlined text-primary">groups</span>
</div>
<div>
<h4 class="text-white font-black uppercase text-sm mb-1">Lead Your City</h4>
<p class="text-blue-100 text-sm">Apply to become a moderator and community lead for your specific geographic city hub.</p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="bg-primary/20 p-2 rounded-lg">
<span class="material-symbols-outlined text-primary">star</span>
</div>
<div>
<h4 class="text-white font-black uppercase text-sm mb-1">Early Access</h4>
<p class="text-blue-100 text-sm">Be the first to vote on upcoming features and beta test new building collaboration tools.</p>
</div>
</div>
</div>
<button class="bg-primary text-[#181811] px-12 py-5 rounded-xl font-black text-xl uppercase brick-shadow hover:translate-y-[-4px] active:translate-y-[0px] transition-all">
                        Join the Elite Guild
                    </button>
</div>
<div class="lg:w-1/3 flex justify-center z-10 opacity-80 lg:opacity-100">
<div class="w-64 h-64 md:w-80 md:h-80 bg-cover bg-center rounded-3xl border-4 border-white/30 brick-shadow grayscale hover:grayscale-0 transition-all duration-500" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDtGg3SHK5d-UkXuZ-TrPf1hnKEwENhOc5pHQrg1ur-mtXaX3uCh1KPI6i025pMnD5xo_PvjaetLuq8inuhiOKIE6ZvXNw1GTHBGw5k__wuLPpjrMdYuHvhnphFdnHRyREyZmO6A89VdAt5PqVOxw2FTfjel0OB8GYbBpiEhqJ-cSKDCzlzLFJRScsaKLZDYJFxRw4dkdV9zsIBXsGguZlZdc_TeuWAEhaduwqOmFg8kWdY2Qo62ElOcp8Ll95QSST86i9Y831Y7yQ");'></div>
</div>
</div>
</div>
</main>
<footer class="mt-20 bg-gray-300 dark:bg-zinc-900  py-12 px-4 border-t-8 border-gray-400 dark:border-zinc-800">
<div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
<div class="flex items-center gap-3">
<div class="bg-primary p-1 rounded shadow-brick">
<span class="material-symbols-outlined text-white text-xl">extension</span>
</div>
<h2 class="text-xl font-800 tracking-tighter uppercase italic">BrickTalk</h2>
</div>
<p class="text-xs font-bold text-gray-500 uppercase">© 2026 Bakessou bilal . Youcode </p>
</div>
</footer>
</div>

</body></html>