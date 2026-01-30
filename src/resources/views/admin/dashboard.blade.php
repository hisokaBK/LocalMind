<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LEGO Admin Dashboard</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#ee2b2b",
                "lego-yellow": "#FFD500",
                "lego-blue": "#0055AD",
                "lego-grey": "#A5A5A5",
                "background-light": "#f8f6f6",
                "background-dark": "#221010",
              },
              fontFamily: {
                "display": ["Plus Jakarta Sans", "sans-serif"]
              },
              borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .lego-studs {
            background-image: radial-gradient(circle, rgba(255,255,255,0.3) 20%, transparent 20%);
            background-size: 20px 20px;
        }
        .baseplate-grid {
            background-image: radial-gradient(circle, #d1d5db 10%, transparent 10%);
            background-size: 30px 30px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#181111] dark:text-white transition-colors duration-200">
<div class="flex min-h-screen">
<!-- Sidebar Navigation -->
<aside class="w-64 bg-white dark:bg-[#1a0c0c] border-r border-[#f4f0f0] dark:border-[#3d2525] flex flex-col fixed h-full z-20">
<div class="p-6 flex flex-col h-full justify-between">
<div class="flex flex-col gap-8">
<!-- Brand / Profile -->
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12 ring-2 ring-primary ring-offset-2" data-alt="Lego character avatar for master builder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAax0UGg-NXFVnp5UMYySlwseLELpjT423TyUYWtGZuvMkX-eDXhDUw1FGoWDXzd780-Jt9SQtpluaG9uve-mgfkKWZsAhjjkfEnpPBqpaBVbS8mkz7HnyhpMzv4lmtI3RlD6n98SDzuLeO2iLAFfpd1mWxU851AiN1rJMwdT5xjjTNgVf8NRXGVi8HZrMCajqBFjDHmz-hQ029MCocRamSabRuWfmxNxSrJLNFewdG6Hq53w1L64jn3GguFsIsQXoBHhEsyzgh9ak");'></div>
<div class="flex flex-col">
<h1 class="text-[#181111] dark:text-white text-base font-bold leading-tight">LEGO Admin</h1>
<p class="text-primary text-xs font-bold uppercase tracking-wider">Master Builder</p>
</div>
</div>
<!-- Nav Items -->
<nav class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary text-white shadow-md" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-semibold">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#181111] dark:text-[#a08a8a] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">forum</span>
<span class="text-sm font-medium">Questions</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#181111] dark:text-[#a08a8a] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">Users</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#181111] dark:text-[#a08a8a] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">category</span>
<span class="text-sm font-medium">Categories</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#181111] dark:text-[#a08a8a] hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</nav>
</div>
<button class="w-full flex items-center justify-center gap-2 rounded-xl h-12 bg-primary text-white text-sm font-bold shadow-[0_4px_0_0_#b91c1c] active:translate-y-1 active:shadow-none transition-all">
<span class="material-symbols-outlined">add_box</span>
<span>New Block</span>
</button>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-64 min-h-screen flex flex-col">
<!-- Top Navbar -->
<header class="h-16 bg-white/80 dark:bg-[#1a0c0c]/80 backdrop-blur-md border-b border-[#f4f0f0] dark:border-[#3d2525] px-8 flex items-center justify-between sticky top-0 z-10">
<div class="flex items-center gap-4">
<div class="flex items-center gap-2 text-[#181111] dark:text-white">
<span class="material-symbols-outlined text-primary">extension</span>
<h2 class="text-lg font-bold tracking-tight">Brick Control Panel</h2>
</div>
</div>
<div class="flex items-center gap-6">
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-gray-400">search</span>
<input class="pl-10 pr-4 py-2 bg-[#f4f0f0] dark:bg-[#2d1a1a] border-none rounded-lg text-sm focus:ring-2 focus:ring-primary w-64" placeholder="Search blocks..." type="text"/>
</div>
<div class="flex items-center gap-2 border-l border-gray-200 dark:border-gray-700 pl-6">
<button class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-primary rounded-full"></span>
</button>
<button class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined">dark_mode</span>
</button>
</div>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Breadcrumbs -->
<div class="flex items-center gap-2 text-sm text-[#896161] dark:text-[#a08a8a]">
<a class="hover:text-primary transition-colors" href="#">Admin</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="font-semibold text-[#181111] dark:text-white">Dashboard</span>
</div>
<!-- Stats Grid (Stacked Bricks) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Total Questions (Yellow Brick) -->
<div class="lego-studs bg-lego-yellow rounded-xl p-6 shadow-[0_8px_0_0_#d9b500] flex flex-col gap-2 group transition-transform hover:-translate-y-1">
<div class="flex justify-between items-start">
<p class="text-black font-bold uppercase tracking-wider text-xs">Total Questions</p>
<span class="material-symbols-outlined text-black/50">help_center</span>
</div>
<p class="text-black text-4xl font-extrabold">4</p>
<div class="flex items-center gap-1 text-black/70 font-bold text-sm">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>12% this week</span>
</div>
</div>
<!-- Popular Questions (Red Brick) -->
<div class="lego-studs bg-primary rounded-xl p-6 shadow-[0_8px_0_0_#b91c1c] flex flex-col gap-2 group transition-transform hover:-translate-y-1">
<div class="flex justify-between items-start">
<p class="text-white font-bold uppercase tracking-wider text-xs">Popular Questions</p>
<span class="material-symbols-outlined text-white/50">local_fire_department</span>
</div>
<p class="text-white text-4xl font-extrabold">2</p>
<div class="flex items-center gap-1 text-white/80 font-bold text-sm">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>5% increase</span>
</div>
</div>
<!-- User Count (Blue Brick) -->
<div class="lego-studs bg-lego-blue rounded-xl p-6 shadow-[0_8px_0_0_#003d7a] flex flex-col gap-2 group transition-transform hover:-translate-y-1">
<div class="flex justify-between items-start">
<p class="text-white font-bold uppercase tracking-wider text-xs">Active Users</p>
<span class="material-symbols-outlined text-white/50">person_celebrate</span>
</div>
<p class="text-white text-4xl font-extrabold">3</p>
<div class="flex items-center gap-1 text-white/80 font-bold text-sm">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>8% from yesterday</span>
</div>
</div>
</div>
<!-- Section Header -->
<div class="flex items-center justify-between">
<h2 class="text-2xl font-extrabold text-[#181111] dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">view_quilt</span>
                        Citizen Directory
                    </h2>
<div class="flex gap-2">
<button class="px-4 py-2 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-sm font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-sm">filter_list</span> Filter
                        </button>
<button class="px-4 py-2 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-sm font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-sm">file_download</span> Export
                        </button>
</div>
</div>
<!-- User Table (Baseplate Design) -->
<div class="baseplate-grid bg-gray-200 dark:bg-gray-900 rounded-2xl p-4 shadow-inner border-4 border-gray-300 dark:border-gray-800">
<div class="bg-white dark:bg-[#1a0c0c] rounded-xl overflow-hidden shadow-xl">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-gray-50 dark:bg-[#2d1a1a] border-b border-gray-100 dark:border-gray-800">
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest text-gray-500">Name</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest text-gray-500">Email</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest text-gray-500">Role</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest text-gray-500">Status</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest text-gray-500 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100 dark:divide-gray-800">
<!-- User 1 -->
<tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 bg-lego-yellow rounded-lg flex items-center justify-center text-white font-bold" data-alt="User avatar 1">EB</div>
<div>
<p class="text-sm font-bold">Emmet Brickowski</p>
<p class="text-xs text-gray-500">Joined Oct 2023</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">emmet@special.build</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded bg-lego-blue/10 text-lego-blue text-[10px] font-bold uppercase border border-lego-blue/20">Master Builder</span>
</td>
<td class="px-6 py-4">
<span class="size-2 rounded-full bg-green-500 inline-block mr-2"></span>
<span class="text-sm">Online</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-gray-400 hover:text-primary"><span class="material-symbols-outlined">more_vert</span></button>
</td>
</tr>
<!-- User 2 -->
<tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 bg-primary rounded-lg flex items-center justify-center text-white font-bold" data-alt="User avatar 2">WS</div>
<div>
<p class="text-sm font-bold">Wyldstyle</p>
<p class="text-xs text-gray-500">Joined Sep 2023</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">lucy@resistance.org</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded bg-primary/10 text-primary text-[10px] font-bold uppercase border border-primary/20">Admin</span>
</td>
<td class="px-6 py-4">
<span class="size-2 rounded-full bg-green-500 inline-block mr-2"></span>
<span class="text-sm">Online</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-gray-400 hover:text-primary"><span class="material-symbols-outlined">more_vert</span></button>
</td>
</tr>
<!-- User 3 -->
<tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 bg-gray-400 rounded-lg flex items-center justify-center text-white font-bold" data-alt="User avatar 3">BM</div>
<div>
<p class="text-sm font-bold">Batman</p>
<p class="text-xs text-gray-500">Joined Jan 2024</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">darkness@gotham.city</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded bg-gray-100 text-gray-600 text-[10px] font-bold uppercase border border-gray-200">Citizen</span>
</td>
<td class="px-6 py-4">
<span class="size-2 rounded-full bg-gray-400 inline-block mr-2"></span>
<span class="text-sm text-gray-400">Away</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-gray-400 hover:text-primary"><span class="material-symbols-outlined">more_vert</span></button>
</td>
</tr>
<!-- User 4 -->
<tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 bg-lego-blue rounded-lg flex items-center justify-center text-white font-bold" data-alt="User avatar 4">BA</div>
<div>
<p class="text-sm font-bold">Benny</p>
<p class="text-xs text-gray-500">Joined Dec 2023</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">spaceship@galaxy.net</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded bg-gray-100 text-gray-600 text-[10px] font-bold uppercase border border-gray-200">Citizen</span>
</td>
<td class="px-6 py-4">
<span class="size-2 rounded-full bg-green-500 inline-block mr-2"></span>
<span class="text-sm">Online</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-gray-400 hover:text-primary"><span class="material-symbols-outlined">more_vert</span></button>
</td>
</tr>
</tbody>
</table>
<!-- Pagination Footer -->
<div class="px-6 py-4 bg-gray-50 dark:bg-[#2d1a1a] flex items-center justify-between">
<p class="text-xs font-medium text-gray-500">Showing 4 of 891 citizens</p>
<div class="flex gap-1">
<button class="size-8 rounded flex items-center justify-center bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="size-8 rounded flex items-center justify-center bg-primary text-white font-bold text-xs">1</button>
<button class="size-8 rounded flex items-center justify-center bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 font-bold text-xs hover:border-primary transition-colors">2</button>
<button class="size-8 rounded flex items-center justify-center bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 font-bold text-xs hover:border-primary transition-colors">3</button>
<button class="size-8 rounded flex items-center justify-center bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- Secondary Section: Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<div class="bg-white dark:bg-[#1a0c0c] p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-[#3d2525]">
<h3 class="text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-lego-yellow">bolt</span>
                            System Events
                        </h3>
<div class="space-y-4">
<div class="flex gap-4 items-start">
<div class="size-2 rounded-full bg-primary mt-2"></div>
<div>
<p class="text-sm font-bold">Critical Question Flagged</p>
<p class="text-xs text-gray-500">User Batman flagged "How to build in black?"</p>
<p class="text-[10px] text-gray-400 mt-1 uppercase font-bold">2 mins ago</p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="size-2 rounded-full bg-lego-blue mt-2"></div>
<div>
<p class="text-sm font-bold">New Category Created</p>
<p class="text-xs text-gray-500">Category "Space Exploration" added by Benny</p>
<p class="text-[10px] text-gray-400 mt-1 uppercase font-bold">15 mins ago</p>
</div>
</div>
</div>
</div>
<div class="bg-white dark:bg-[#1a0c0c] p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-[#3d2525]">
<h3 class="text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-lego-blue">analytics</span>
                            Brick Distribution
                        </h3>
<div class="h-40 flex items-end gap-2 px-2">
<div class="flex-1 bg-lego-yellow rounded-t-lg h-[60%] relative group">
<span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold opacity-0 group-hover:opacity-100 transition-opacity">Yellow</span>
</div>
<div class="flex-1 bg-primary rounded-t-lg h-[85%] relative group">
<span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold opacity-0 group-hover:opacity-100 transition-opacity">Red</span>
</div>
<div class="flex-1 bg-lego-blue rounded-t-lg h-[40%] relative group">
<span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold opacity-0 group-hover:opacity-100 transition-opacity">Blue</span>
</div>
<div class="flex-1 bg-gray-400 rounded-t-lg h-[70%] relative group">
<span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold opacity-0 group-hover:opacity-100 transition-opacity">Grey</span>
</div>
<div class="flex-1 bg-black dark:bg-white rounded-t-lg h-[30%] relative group">
<span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold opacity-0 group-hover:opacity-100 transition-opacity">Misc</span>
</div>
</div>
<div class="mt-4 flex justify-between text-[10px] font-bold text-gray-400 uppercase tracking-widest px-2">
<span>Mon</span>
<span>Tue</span>
<span>Wed</span>
<span>Thu</span>
<span>Fri</span>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>