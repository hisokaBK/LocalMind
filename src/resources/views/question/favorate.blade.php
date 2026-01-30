<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LEGO Favorites Page</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "lego-red": "#e60012",
                        "lego-blue": "#0055bf",
                        "lego-green": "#00a95c",
                        "lego-yellow": "#f9f506",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                },
            },
        }
    </script>
<style>
        .lego-gradient {
            background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
            position: relative;
            overflow: hidden;
        }
        .star-field {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background-image: 
                radial-gradient(2px 2px at 20px 30px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 40px 70px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 90px 40px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 160px 120px, #ffffff, rgba(0,0,0,0));
            background-repeat: repeat;
            background-size: 200px 200px;
            opacity: 0.4;
        }
        .brick-letter {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 56px;
            position: relative;
            color: white;
            font-weight: 800;
            font-size: 2rem;
            text-shadow: 2px 2px 0px rgba(0,0,0,0.2);
            border-bottom: 6px solid rgba(0,0,0,0.2);
            margin: 0 2px;
            border-radius: 4px;
        }
        .brick-letter::before {
            content: '';
            position: absolute;
            top: -6px;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 6px;
            border-radius: 4px 4px 0 0;
            background: inherit;
            filter: brightness(1.2);
        }
        .lego-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 6px 6px 0px 0px rgba(0,0,0,0.1);
        }
        .lego-card:hover {
            transform: translateY(-4px);
            box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.1);
        }
        .stud-overlay {
            position: absolute;
            top: -12px;
            left: 20px;
            display: flex;
            gap: 12px;
        }
        .stud {
            width: 16px;
            height: 12px;
            border-radius: 4px 4px 0 0;
            filter: brightness(1.1);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="lego-gradient min-h-screen">
<div class="star-field"></div>
<!-- TopNavBar -->
<header class="relative z-10 flex items-center justify-between whitespace-nowrap border-b border-solid border-[#181811]/10 px-6 lg:px-40 py-4 bg-white/70 backdrop-blur-md">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-[#181811]">
<div class="bg-primary p-1.5 rounded-lg shadow-[2px_2px_0px_#000]">
<span class="material-symbols-outlined text-black font-bold">extension</span>
</div>
<h2 class="text-[#181811] text-xl font-extrabold leading-tight tracking-[-0.015em]">BrickAsk</h2>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-[#181811] text-sm font-bold uppercase tracking-wider hover:text-lego-blue transition-colors" href="#">Home</a>
<a class="text-[#181811] text-sm font-bold uppercase tracking-wider hover:text-lego-blue transition-colors" href="#">Explore</a>
<a class="text-[#181811] text-sm font-bold uppercase tracking-wider text-lego-blue border-b-2 border-lego-blue" href="#">Favorites</a>
<a class="text-[#181811] text-sm font-bold uppercase tracking-wider hover:text-lego-blue transition-colors" href="#">Community</a>
</nav>
</div>
<div class="flex flex-1 justify-end gap-4 items-center">
<label class="hidden lg:flex flex-col min-w-40 h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full overflow-hidden border-2 border-black">
<div class="text-black flex bg-white items-center justify-center pl-3">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 border-none bg-white focus:ring-0 h-full placeholder:text-gray-500 px-3 text-sm font-bold" placeholder="Find bricks..." value=""/>
</div>
</label>
<div class="flex gap-2">
<button class="flex size-10 cursor-pointer items-center justify-center rounded-lg bg-white border-2 border-black hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-black">notifications</span>
</button>
<div class="size-10 rounded-full border-2 border-black bg-center bg-no-repeat bg-cover" data-alt="User profile avatar circular" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB5dK1SR0jwGPYdcKuotX_2O455q_8kmXw9gyFQU0IxtrPx67r2iP0UO5wt90iHny4hDEReeCVj69xxZtgo96-QE3E9bgptBWDJoR50CUPo4zfQNJQZEojiFRfadqNjd-2oNX8elgWAMD5N9p-xfmZsWJFWAoFnbXlBkmPDR3TbNQb1J2j9VWo1z3LrzHkp2MLM1lupUsYBIpGuiLhWyHRlfb-98A405rpikm3WO5WG41LQ-jTDJIPRyAbOjX0h50yNVuaoCKTTu64");'></div>
</div>
</div>
</header>
<main class="relative z-10 px-6 lg:px-40 py-12">
<!-- 3D Brick Header Section -->
<div class="flex flex-col items-center mb-12">
<div class="flex flex-wrap justify-center mb-4">
<div class="brick-letter bg-lego-red">M</div>
<div class="brick-letter bg-lego-blue">Y</div>
<div class="w-8"></div>
<div class="brick-letter bg-lego-green">F</div>
<div class="brick-letter bg-lego-yellow !text-black">A</div>
<div class="brick-letter bg-lego-red">V</div>
<div class="brick-letter bg-lego-blue">O</div>
<div class="brick-letter bg-lego-green">R</div>
<div class="brick-letter bg-lego-red">I</div>
<div class="brick-letter bg-lego-yellow !text-black">T</div>
<div class="brick-letter bg-lego-blue">E</div>
<div class="brick-letter bg-lego-green">S</div>
</div>
<p class="text-slate-600 text-lg font-bold bg-white/50 px-4 py-1 rounded-full border border-slate-300">You have 12 items in your collection</p>
</div>
<!-- Filter Chips -->
<div class="flex gap-3 mb-8 justify-center flex-wrap">
<div class="flex h-10 items-center justify-center rounded-lg bg-primary border-2 border-black px-6 shadow-[3px_3px_0px_#000] cursor-pointer">
<p class="text-black text-sm font-bold uppercase tracking-tight">All Bricks</p>
</div>
<div class="flex h-10 items-center justify-center rounded-lg bg-white border-2 border-black px-6 shadow-[3px_3px_0px_#000] cursor-pointer hover:bg-gray-100 transition-all">
<p class="text-black text-sm font-bold uppercase tracking-tight">Questions</p>
</div>
<div class="flex h-10 items-center justify-center rounded-lg bg-white border-2 border-black px-6 shadow-[3px_3px_0px_#000] cursor-pointer hover:bg-gray-100 transition-all">
<p class="text-black text-sm font-bold uppercase tracking-tight">Answers</p>
</div>
<div class="flex h-10 items-center justify-center rounded-lg bg-white border-2 border-black px-6 shadow-[3px_3px_0px_#000] cursor-pointer hover:bg-gray-100 transition-all">
<p class="text-black text-sm font-bold uppercase tracking-tight">Tutorials</p>
</div>
</div>
<!-- Favorites Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
<!-- Card 1 (Red) -->
@foreach($questions as $question)
<div class="lego-card relative flex flex-col bg-white border-[4px] border-lego-red rounded-lg p-6">
<div class="stud-overlay">
<div class="stud bg-lego-red"></div>
<div class="stud bg-lego-red"></div>
<div class="stud bg-lego-red"></div>
</div>
<div class="absolute -top-4 -right-4 size-10 bg-primary border-2 border-black rounded-full flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-black font-bold text-xl" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<div class="w-full h-48 bg-gray-100 rounded-lg mb-4 bg-center bg-cover border border-slate-200" data-alt="Modern modular spaceship construction build" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBIcPTeMP-TV_y-tQJzjQ5zPyqO0iAU9A6FJ2TLdkbGxuj1PYWIlJa1JaceY2tAwNut3fBmgewAlGGZzd7kf29i81QFpDBpqOQE7E5H0F3Dr5_b9lMq095H9RxGDKq-3o0zimOL_DRwluAWYdmcYR-PbbhxTDbSmqxa3S-p4bowV7BTpvs1ZUveMHcxUUyOdJXhoTs2geJDS80VxhCYrAaKArS21NKBPSSd-KztPU8B2Rarnc1XzBONY13C0zX8N7jq6z3cQItaEBo");'></div>
<div class="flex flex-col flex-1">
<div class="flex items-center gap-2 mb-2">
<span class="bg-lego-red text-white text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-tighter">Tutorial</span>
<div class="flex items-center gap-1 bg-slate-100 px-2 py-0.5 rounded-sm border border-slate-200">
<span class="material-symbols-outlined text-xs">location_on</span>
<span class="text-[10px] font-bold text-slate-600">Earth</span>
</div>
</div>
<h3 class="text-black text-xl font-extrabold leading-tight mb-2">How to build a modular spaceship?</h3>
<p class="text-slate-600 text-sm font-medium leading-relaxed mb-6">Learn the basics of modular design for intergalactic travel with easy snap-on components.</p>
<div class="mt-auto flex gap-2">
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">thumb_up</span>
<span class="text-xs font-black">1.2k</span>
</div>
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">chat_bubble</span>
<span class="text-xs font-black">84</span>
</div>
</div>
</div>
</div>
@endforeach
<!-- Card 2 (Blue) -->
<div class="lego-card relative flex flex-col bg-white border-[4px] border-lego-blue rounded-lg p-6">
<div class="stud-overlay">
<div class="stud bg-lego-blue"></div>
<div class="stud bg-lego-blue"></div>
<div class="stud bg-lego-blue"></div>
</div>
<div class="absolute -top-4 -right-4 size-10 bg-primary border-2 border-black rounded-full flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-black font-bold text-xl" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<div class="w-full h-48 bg-gray-100 rounded-lg mb-4 bg-center bg-cover border border-slate-200" data-alt="Close up of SNOT building technique bricks" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBVIzab1Qt9LKHLTO46tyGbJjp1ymoWHsLAvhoPs5HcMEGjPUpRUlJMnukq-kny1yJVtBWdwrliECP7hFICkBqCyiWf6qqfdCtcZQjDOnNj8L8YxiNr3Q4IIKTjY1HFRdI7yAquGoNSJUttVY2lSoirxYftKdnNbT2vZ_h4dx3LB13uYCrIh4gfzXc_Zn5rOHt0lw0-OQ7D_etHtFdwU6vJfV3k_djU9Zn8Q5cqM8lXhqIEy6zTXMWUOMaH4HbbDWwfMJ0Bya2g9cI");'></div>
<div class="flex flex-col flex-1">
<div class="flex items-center gap-2 mb-2">
<span class="bg-lego-blue text-white text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-tighter">Technique</span>
<div class="flex items-center gap-1 bg-slate-100 px-2 py-0.5 rounded-sm border border-slate-200">
<span class="material-symbols-outlined text-xs">location_on</span>
<span class="text-[10px] font-bold text-slate-600">Moon Base</span>
</div>
</div>
<h3 class="text-black text-xl font-extrabold leading-tight mb-2">Best techniques for SNOT building</h3>
<p class="text-slate-600 text-sm font-medium leading-relaxed mb-6">Exploring 'Studs Not On Top' for smooth surface finishes and advanced vertical construction.</p>
<div class="mt-auto flex gap-2">
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">thumb_up</span>
<span class="text-xs font-black">2.5k</span>
</div>
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">chat_bubble</span>
<span class="text-xs font-black">312</span>
</div>
</div>
</div>
</div>
<!-- Card 3 (Green) -->
<div class="lego-card relative flex flex-col bg-white border-[4px] border-lego-green rounded-lg p-6">
<div class="stud-overlay">
<div class="stud bg-lego-green"></div>
<div class="stud bg-lego-green"></div>
<div class="stud bg-lego-green"></div>
</div>
<div class="absolute -top-4 -right-4 size-10 bg-primary border-2 border-black rounded-full flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-black font-bold text-xl" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<div class="w-full h-48 bg-gray-100 rounded-lg mb-4 bg-center bg-cover border border-slate-200" data-alt="Assortment of translucent neon LEGO bricks" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC39bjx3d37VMynXfzNv14ZooMRDPgcJAELrpcDDLVwGyChKYmt1VKZekpt4XqaaygASH8SCAhnBQEtGlLACB4xN705q5Zy30Pwjy5Ce6NTtDaWIISEMSxGFDBpssdWrGB-ybY9OWIC8k6T0NjzbUs4Y5s5_LYhPCLbay3amrA_KAxE0ajAvd9Wg8DN77m9XzUyg-t15S35tPntoU6AVCA0nqou96VoCou60ULUdwgcCq3TD7ASsgsD5uuxxGmIdwmf0KWt9QoKeNw");'></div>
<div class="flex flex-col flex-1">
<div class="flex items-center gap-2 mb-2">
<span class="bg-lego-green text-white text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-tighter">Guide</span>
<div class="flex items-center gap-1 bg-slate-100 px-2 py-0.5 rounded-sm border border-slate-200">
<span class="material-symbols-outlined text-xs">location_on</span>
<span class="text-[10px] font-bold text-slate-600">Mars Colony</span>
</div>
</div>
<h3 class="text-black text-xl font-extrabold leading-tight mb-2">Where to find rare translucent pieces?</h3>
<p class="text-slate-600 text-sm font-medium leading-relaxed mb-6">A curated list of local vendors and online brick marketplaces for glowing elements.</p>
<div class="mt-auto flex gap-2">
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">thumb_up</span>
<span class="text-xs font-black">940</span>
</div>
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">chat_bubble</span>
<span class="text-xs font-black">26</span>
</div>
</div>
</div>
</div>
<!-- Card 4 (Yellow) -->
<div class="lego-card relative flex flex-col bg-white border-[4px] border-lego-yellow rounded-lg p-6">
<div class="stud-overlay">
<div class="stud bg-lego-yellow"></div>
<div class="stud bg-lego-yellow"></div>
<div class="stud bg-lego-yellow"></div>
</div>
<div class="absolute -top-4 -right-4 size-10 bg-primary border-2 border-black rounded-full flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-black font-bold text-xl" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<div class="w-full h-48 bg-gray-100 rounded-lg mb-4 bg-center bg-cover border border-slate-200" data-alt="Comparison between Technic and System LEGO bricks" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCn_5WUXyF5xSRv1RiIGYwNHXSfQR3cGy2sRzgjHYWIbyqdTFzN3a_oW5J7ZwzrmlzCTWinmxmUIcxKn_QdGp9I7HbiJMbbl2tGk6zg4Lu5Und4H1HvdHxqYrZqSccAt7Sq1PxoQdSKAtI6h2M0Z5rVmvwEx8UGYkUmSGE7D2kXVVMfN36aq-2zzmRLTJFtRk2bIVawgVtiFNrur-gwSf22SALEDq3-PhCMvrPxlU6Or7dw3NX7yU8SOkgoucpX_rq9WWl3cJmKGoo");'></div>
<div class="flex flex-col flex-1">
<div class="flex items-center gap-2 mb-2">
<span class="bg-lego-yellow text-black text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-tighter">Debate</span>
<div class="flex items-center gap-1 bg-slate-100 px-2 py-0.5 rounded-sm border border-slate-200">
<span class="material-symbols-outlined text-xs">location_on</span>
<span class="text-[10px] font-bold text-slate-600">Earth</span>
</div>
</div>
<h3 class="text-black text-xl font-extrabold leading-tight mb-2">Technic vs. System: Which is better?</h3>
<p class="text-slate-600 text-sm font-medium leading-relaxed mb-6">An in-depth look at the structural integrity and aesthetic trade-offs between both systems.</p>
<div class="mt-auto flex gap-2">
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">thumb_up</span>
<span class="text-xs font-black">5.1k</span>
</div>
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">chat_bubble</span>
<span class="text-xs font-black">1.4k</span>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Floating Action Button -->
<button class="fixed bottom-8 right-8 size-16 bg-primary border-4 border-black rounded-xl shadow-[6px_6px_0px_#000] flex items-center justify-center hover:translate-y-[-4px] active:translate-y-[0px] active:shadow-none transition-all z-50">
<span class="material-symbols-outlined text-black text-3xl font-black">add</span>
</button>
</div>
</body></html>